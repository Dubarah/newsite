<?php
/**
 *
 */
class Main_model extends CI_Model {


    var $store_salt;//      = $this->config->item('store_salt', 'ion_auth');
    var $salt_length;//     = $this->config->item('salt_length', 'ion_auth');
    var $hash_method;

    function __construct() {
        parent::__construct();

        $this->store_salt  = $this->config->item('store_salt');
        $this->salt_length = $this->config->item('salt_length');
        $this->hash_method = $this->config->item('hash_method');
    }



    public function get_sliders()
    {
        return $this->db->get_where('sliders', array('active' => 1, 'deleted' => 0));
    }
	public function add_view($type='' , $type_id )
	{
		
	

		 $this->load->library('user_agent');
        $ip_address =  '90.546.54.654';//$this->input->ip_address();
		
     
            if ($this->agent->is_robot()) {
                $device = $this->agent->robot();
            } elseif ($this->agent->is_mobile()) {
                $device = $this->agent->mobile();
				
            } else {
                $device = 'Computer';  
            }
            $os = $this->agent->platform();
            $browser = $this->agent->browser() . ' ' . $this->agent->version();
            $insert = array(

                'ip_address' => $ip_address,
                'device' => $device,
                'os' => $os,
                'browser' => $browser,
                'type_id' => $type_id,
                'type' => $type,
                'start_time' => time()
            );
            $this->db->insert('session_log', $insert);
       return 1;
	  
		
	}



    public function login($email='', $password="")
    {
        if (!$email || !$password) {
            return FALSE;
        }
		
        $user = $this->db->get_where('user', array('email' => $email,'fired' =>0));
        $is_exist_user = $user->num_rows();
        if ($is_exist_user != 1) {
            return 'emsil_error';
        }
		
        $old = $user->row()->lastname ? 0 : 1;
        if ($old) {
        	$active_sented  = $this->db->get_where('user', array('email' => $email, 'fired' =>0))->row()->temp_id;
        	if($active_sented){
        		$date     = $this->db->get_where('old_temp', array('id' => $active_sented))->row()->verify_token_date;
				$was_send = $date+(2*24*60*60);
				$now      = time();
        		if($was_send >= $now ){
        			redirect(base_url()."done");
				} else {
        			$this->session->set_userdata('not_verified', $user->row()->id);
        			redirect(base_url()."send_activation");
    			}
			}
            $id  = $this->db->get_where('user', array('email' => $email,'fired' =>0))->row()->id;
			

            $this->session->set_userdata('old_user', $id);
            //$this->messages->error('old_user');

            redirect(base_url()."reregister");
        }
		
        if (!$user->row()->verified) {
        	
    		$date     = $this->db->get_where('user', array('email' => $email,'fired' =>0,'verified'=>0))->row()->verify_token_date;
			$was_send = $date+(2*24*60*60);
			$now      = time();
    		if($was_send >= $now ){
    			redirect(base_url()."done");	
			} else {
    	
	            $this->session->set_userdata('not_verified', $user->row()->id);
	
	
	            redirect(base_url()."send_activation");
	        }
		}

        $salt = $user->row()->auth_key;
        $pass = $user->row()->password_hash;
        $passed = $this->verify_password($password, $pass, $salt);
        //echo $passed; exit;
        if ($passed) {
            $complete = $user->row()->city ? 1 : 0;
            if (!$complete) {
            	$logged = $user->row()->logged == 1 ? 0 : 1 ;
				$this->session->set_userdata('first_logged', $logged);
                $this->session->set_userdata('not_completed', 1);
				$this->session->set_userdata('user_id', $user->row()->id);
            	$this->session->set_userdata('username', $user->row()->username);
				
				redirect(base_url()."my_profile");
            }
           	$logged = $user->row()->logged== 1 ? 0 : 1 ;
			
			 $this->session->set_userdata('first_logged', $logged);
			
            $this->session->set_userdata('user_id', $user->row()->id);
            $this->session->set_userdata('username', $user->row()->username);
            return 'passed';
        } else {
            return 'pass_error';
        }
	}
	
	public function reset_pass($email)
	{
		$user_id = $this->db->get_where('user',array('email' => $email));
		
		if (!$user_id->num_rows()) {
			return 'err_user';
		}
		
		$user = $user_id->row();
		$user_id = $user_id->row()->id;
		
		$verify_salt = $this->salt();
        $this->db->where('id', $user_id);
        $this->db->update('user', array('password_reset_token' => $verify_salt, 'password_reset_date' => time()));
        if ($this->db->affected_rows()) {
        	
        	$user = $this->db->get_where('user',array('id' => $user_id))->row();
            $jwt = $this->load->library('JWT');
            $token = array('user_id' => $user_id, 'salt' => $verify_salt);
            $CONSUMER_SECRET = $this->config->item('token_secret');
            $token = $this->jwt->encode($token, $CONSUMER_SECRET);
			
            $url = base_url() . "reset_pass/" . $token;
			//echo $url; exit;
			$from_name = $this->config->item('from_name');
			$from_email = $this->config->item('from_email');
			$subject = 'Reset password';
			$members = $email;
			$to_name = $user->username.' '.$user->lastname;
			$message = "resetpass";
			$var1 = $url;
			//exit;
            $sent = $this->prepare_mail($from_name, $from_email, $subject, $members, $to_name, $message, $var1, $user_id);
			
			
			//echo "<pre>";
			//print_r($sent); exit;
            return $sent;
        }
        return 0;
	}
	
	public function face_register($face_id, $first_name, $last_name, $email, $gender, $photo)
	{
		//echo $face_id;
		$user = $this->db->get_where('user', array('email' => $email));
		if ($user->num_rows()) {
			$row_lastname = $user->row()->lastname;
			if (!$row_lastname) {
				$update = array (
						            'is_staff'   => 0,
						            'lastname'	 => $last_name,
						            'gender'	 => $gender,
						            'verified'	 => 1,
						            'face_id'	 => $face_id,
						            'face_photo' => $photo_mail
						            
								);
				$this->db->where('email', $email);
				$this->db->update('user', $update);
			}
			
			$complete = $user->row()->city ? 1 : 0;
            if (!$complete) {
                $this->session->set_userdata('not_completed', 1);
				$this->session->set_userdata('user_id', $user->row()->id);
            	$this->session->set_userdata('username', $user->row()->username);
				
				return "passed";
            }
           
            $this->session->set_userdata('user_id', $user->row()->id);
            $this->session->set_userdata('username', $user->row()->username);
            return 'passed';
		}
		//exit;
		$insert = array (
				            'email'      => $email,
				            'is_staff'   => 0,
				            'username'   => $first_name,
				            'lastname'	 => $last_name,
				            'gender'	 => $gender,
				            'verified'	 => 1,
				            'face_id'	 => $face_id,
				            'face_photo' => $photo
						);
		//echo "<pre>"; print_r($insert); exit;
		$this->db->insert('user', $insert);
		$id = $this->db->insert_id();
		$this->session->set_userdata('user_id', $id);
		$this->session->set_userdata('not_completed', 1);
        $this->session->set_userdata('v_id', $id);
        $this->session->set_userdata('username', $first_name);
        return 'new';
	}
	
	public function resend_code($email, $type)
	{
		$user_id = $this->db->get_where('user',array('email' => $email));
		if (!$user_id->num_rows()) {
			return 0;
		}
		$user = $user_id->row();
		$user_id = $user_id->row()->id;
		//request_pass_reset
		$requisted_times = $user->request_pass_reset;
		if ($requisted_times >= 3) {
			$this->session->unset_userdata('reset_email');
			return 0;
		}
		$verify_salt = $user->password_reset_token;
		if (!$verify_salt) {
			return 0;
		}
		$jwt = $this->load->library('JWT');
        $token = array('user_id' => $user_id, 'salt' => $verify_salt);
        $CONSUMER_SECRET = $this->config->item('token_secret');
        $token = $this->jwt->encode($token, $CONSUMER_SECRET);
		
        $url = base_url() . "reset_pass/" . $token;
		$from_name = $this->config->item('from_name');
		$from_email = $this->config->item('from_email');
		$subject = 'Reset password';
		$members = $email;
		$to_name = $user->username.' '.$user->lastname;
		$message = "reset_pass";
		$var1 = $url;
		
        $sent = $this->prepare_mail($from_name, $from_email, $subject, $members, $to_name, $message, $var1, $user_id);
		$this->db->where('id', $user_id);
		$update = array (
							'request_pass_reset' => $user->request_pass_reset++,
							'password_reset_date' => time()
						);
		$this->db->update('user', $update);
        return $sent;
	}
	
	public function update_pass($user_id, $password)
	{
		
		
		$salt = $this->salt();
        $password = $password.$salt;
        $hashed_pass = $this->hash_password($password);
        $verify_salt = $this->salt();
        
        $update = array (
				            'auth_key'       		=> $salt,
				            'password_hash'     	=> $hashed_pass,
				            'password_reset_token' 	=> $verify_salt
				        );
		$this->db->where('id', $user_id);
		$this->db->update('user', $update);
		return $this->db->affected_rows();
	}
	
	public function verify_pass_token($user_id, $token)
	{
		$time = time() - (30 * 60);
        $sql = "SELECT * FROM user WHERE id=$user_id AND password_reset_token='$token' AND password_reset_date>$time";
        $res = $this->db->query($sql);
        if ($res->num_rows()) {
            return TRUE;
        }
		return FALSE;
	}
  	
	 public function verify_password($password='', $hash, $salt='')
     {
        //$salt = $this->salt();
        if (empty($password))
        {
            return FALSE;
        }
        $this->load->library('bcrypt');
        // bcrypt
        //echo "$password $hash";
        return $this->bcrypt->verify($password.$salt, $hash);
    }
    
	
	
    public function prepare_mail($from_name='', $from_email='', $subject='', $members, $to_name='', $message='', $var1='', $user_id=0)
    {	//echo "$from_name , $from_email, $subject , $members, $to_name , $message , $var1 , $user_id";
        $this->load->library('mail');
		$res = $this->mail->send_mail($from_name, $from_email, $subject, $members, $to_name, $message, $var1, $user_id);
		return $res;
    }

   /* public function complete_account($user_id,  $country, $city, $langs, $skills, $gender, $mobile)
    {   //$email, $password, $firstname, $lastname,
        //$salt = $this->salt();
        //$password = $password.$salt;
        //$hashed_pass = $this->hash_password($password);
        //$verify_salt = $this->salt();
        $this->db->trans_start();
		
        $update = array(
            //'auth_key'       	=> $salt,
            //'email'         	=> $email,
            //'password_hash'     => $hashed_pass,
            'is_staff'    		=> 0,
            // 'username'          => $firstname,
            //'lastname'			=> $lastname,
            'mobile'            => $mobile,
            'city'				=> $city,
            'gender'			=> $gender,
            //'verify_token'		=> $verify_salt,
            //'verify_token_date' => time()
        );
        //echo "<pre>"; print_r($insert); exit;	
        $this->db->where('id', $user_id);
        $this->db->update('user', $update);
        $user_id = $this->db->insert_id();
        foreach ($langs as $lang) {
            $this->db->delete('user_langs', array('user_id', $user_id));
            $insert = array (
                'user_id' => $user_id,
                'lang_id' => $lang
            );
            $this->db->insert('user_langs', $insert);
        }

        foreach ($skills as $skill) {
            $this->db->delete('user_skills', array('user_id', $user_id));
            $insert = array (
                'user_id' => $user_id,
                'skill_id' => $skill
            );
            $this->db->insert('user_skills', $insert);
        }
 			
        $this->db->trans_complete();
		$this->session->set_userdata('not_completed', 0);
        $res = $this->db->trans_status();
		
        return $res;
    }*/

    public function send_activation($user_id)
    {
    	
        $verify_salt = $this->salt();
        $this->db->where('id', $user_id);
        $this->db->update('user', array('verify_token' => $verify_salt, 'verify_token_date' => time()));
        if ($this->db->affected_rows()) {
        	$user=$this->db->get_where('user',array('id' => $user_id))->row();
            $jwt = $this->load->library('JWT');
            $token = array('user_id' => $user_id, 'salt' => $verify_salt);
            $CONSUMER_SECRET = $this->config->item('token_secret');
            $token = $this->jwt->encode($token, $CONSUMER_SECRET);
			
            $url = base_url() . "verify_account/" . $token;
			$from_name = $this->config->item('from_name');
			$from_email = $this->config->item('from_email');
			$subject = 'Activation';
			$members = $user->email;
			$to_name = $user->username.' '.$user->lastname;
			$message = "verify";
			$var1 = $url;

            $sent = $this->prepare_mail($from_name, $from_email, $subject, $members, $to_name, $message, $var1, $user_id);
            //echo $sent;
            return $sent;
        }
        return 0;
    }

    public function salt()
    {

        $raw_salt_len = 16;

        $buffer = '';
        $buffer_valid = false;

        if (function_exists('mcrypt_create_iv') && !defined('PHALANGER')) {
            $buffer = mcrypt_create_iv($raw_salt_len, MCRYPT_DEV_URANDOM);
            if ($buffer) {
                $buffer_valid = true;
            }
        }

        if (!$buffer_valid && function_exists('openssl_random_pseudo_bytes')) {
            $buffer = openssl_random_pseudo_bytes($raw_salt_len);
            if ($buffer) {
                $buffer_valid = true;
            }
        }

        if (!$buffer_valid && @is_readable('/dev/urandom')) {
            $f = fopen('/dev/urandom', 'r');
            $read = strlen($buffer);
            while ($read < $raw_salt_len) {
                $buffer .= fread($f, $raw_salt_len - $read);
                $read = strlen($buffer);
            }
            fclose($f);
            if ($read >= $raw_salt_len) {
                $buffer_valid = true;
            }
        }

        if (!$buffer_valid || strlen($buffer) < $raw_salt_len) {
            $bl = strlen($buffer);
            for ($i = 0; $i < $raw_salt_len; $i++) {
                if ($i < $bl) {
                    $buffer[$i] = $buffer[$i] ^ chr(mt_rand(0, 255));
                } else {
                    $buffer .= chr(mt_rand(0, 255));
                }
            }
        }

        $salt = $buffer;

        // encode string with the Base64 variant used by crypt
        $base64_digits   = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';
        $bcrypt64_digits = './ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $base64_string   = base64_encode($salt);
        $salt = strtr(rtrim($base64_string, '='), $base64_digits, $bcrypt64_digits);

        $salt = substr($salt, 0, $this->salt_length);


        return $salt;

    }

    public function check_paypass($user_id, $pass)
    {
        $pass = sha1($pass);
        $res = $this->db->get_where('employees', array('emp_id' => $user_id, 'password' => $pass))->num_rows();

        return $res;
    }

    public function signup($email, $password, $firstname, $lastname, $gender)
        //, $country, $city, $langs, $skills, $gender, $mobile
    {
        $salt = $this->salt();
        $password = $password.$salt;
        $hashed_pass = $this->hash_password($password);
        $verify_salt = $this->salt();
        $this->db->trans_start();
        $insert = array(
            'auth_key'       	=> $salt,
            'email'         	=> $email,
            'password_hash'     => $hashed_pass,
            'is_staff'    		=> 0,
            'username'          => $firstname,
            'lastname'			=> $lastname,
            'gender'			=> $gender,
            'verify_token'		=> $verify_salt,
            'verify_token_date' => time()
        );
        //echo "<pre>"; print_r($insert); exit;			
        $this->db->insert('user', $insert);
        $user_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        $res = $this->db->trans_status();
		//echo $user_id; exit;
        if ($res) {
            $this->session->set_userdata('not_verified', $user_id);
            $jwt = $this->load->library('JWT');
            $token = array('user_id' => $user_id, 'salt' => $verify_salt);
            $CONSUMER_SECRET = $this->config->item('token_secret');
            $token = $this->jwt->encode($token, $CONSUMER_SECRET);
			
			$url = base_url() . "verify_account/" . $token;
			$from_name = $this->config->item('from_name');
			$from_email = $this->config->item('from_email');
			$subject = 'Activation';
			$members = $email;
			$to_name = $firstname.' '.$lastname;
			$message = "verify";
			$var1 = $url;
			
            $sent = $this->prepare_mail($from_name, $from_email, $subject, $members, $to_name, $message, $var1, $user_id);
            
			
			return $sent;
        }
		
        return 1;
    }

    public function hash_password($password, $salt='')
    {
        if (empty($password))
        {
            return FALSE;
        }
        $this->load->library('bcrypt');
        // bcrypt

        return $this->bcrypt->hash($password.$salt);

    }
	
	public function check_old($id='')
	{
		$row = $this->db->get_where('old_temp', array('user_id' => $id));
		if (!$row->num_rows()) {
			return FALSE;
		}
		
		$verify_salt = $this->salt();
		
		$update = array (
				            'verify_token'		=> $verify_salt,
				            'verify_token_date' => time()
				        );

        $this->db->where('user_id', $id);		
        $this->db->update('old_temp', $update);
		if ($this->db->affected_rows()) {
            $email = $this->db->get_where('user', array('id' => $id ))->row()->email;
            $jwt = $this->load->library('JWT');
            $token = array('user_id' => $id, 'salt' => $verify_salt);
            $CONSUMER_SECRET = $this->config->item('token_secret');
            $token = $this->jwt->encode($token, $CONSUMER_SECRET);
			
			$url = base_url() . "verify_account/" . $token;
			$from_name = $this->config->item('from_name');
			$from_email = $this->config->item('from_email');
			$subject = 'Activation';
			$members = $email;
			$to_name = $row->username.' '.$row->lastname;
			$message = "verify";
			$var1 = $url;
			
            $sent = $this->prepare_mail($from_name, $from_email, $subject, $members, $to_name, $message, $var1, $id);
            return $sent;
		}
		return 1;
	}

    public function oldregister($id, $password, $firstname, $lastname ,$gender)
        //, $country, $city, $langs, $skills, $gender, $mobile
    {
        $salt = $this->salt();
        $password = $password.$salt;
        $hashed_pass = $this->hash_password($password);
        $verify_salt = $this->salt();
        $this->db->trans_start();

        $insert = array(
            'auth_key'       	=> $salt,
            'user_id' 			=> $id,
            'password_hash'     => $hashed_pass,
            'is_staff'    		=> 0,
            'gender'			=> $gender,
            'username'          => $firstname,
            'lastname'			=> $lastname,
            'verify_token'		=> $verify_salt,
            'verify_token_date' => time()
        );

        //echo "<pre>"; print_r($insert); exit;			
        $this->db->insert('old_temp', $insert);

        $temp_id = $this->db->insert_id();

        $insert =  array(
				            'temp_id' 	=> $temp_id
				        );
        $this->db->where('id',$id);
        $this->db->update('user', $insert);
        
        $this->db->trans_complete();
        $res = $this->db->trans_status();
        if ($res) {
            $email = $this->db->get_where('user', array('id' => $id ))->row()->email;
            $jwt = $this->load->library('JWT');
            $token = array('user_id' => $id, 'salt' => $verify_salt);
            $CONSUMER_SECRET = $this->config->item('token_secret');
            $token = $this->jwt->encode($token, $CONSUMER_SECRET);
			
			$url = base_url() . "verify_account/" . $token;
			$from_name = $this->config->item('from_name');
			$from_email = $this->config->item('from_email');
			$subject = 'Activation';
			$members = $email;
			$to_name = $firstname.' '.$lastname;
			$message = "verify";
			$var1 = $url;
			
            $sent = $this->prepare_mail($from_name, $from_email, $subject, $members, $to_name, $message, $var1, $id);
            return $sent;
        }
        return 1;
    }


    public function verify_account($user_id, $token)
    {
        $time = time() - (30 * 60);
        $old  = $this->db->get_where('user', array('id' => $user_id))->row()->temp_id;
        if ($old==0){
            $sql = "SELECT * FROM user WHERE id=$user_id AND verify_token='$token' AND verify_token_date>$time";
            $res = $this->db->query($sql);
            if ($res->num_rows()) {
                $newtoken = $this->salt();

                $update = array (
                                    'verified' 		=> 1,
                                    'verify_token' 	=> $newtoken
                                );
                $this->db->where('id', $user_id);
                $this->db->update('user', $update);
                return $this->db->affected_rows();
            }
		}
        elseif ($old !== 0) {
            $sql = "SELECT * FROM old_temp WHERE user_id=$user_id AND id=$old AND verify_token='$token' AND verify_token_date>$time";
            $res = $this->db->query($sql);
            if ($res->num_rows()) {
                $newtoken = $this->salt();
                $data = $this->db->get_where('old_temp', array('id' => $old))->row();
                $update = array (
                    'verified' 			=> 1,
                    'verify_token' 		=> $newtoken,
                    'auth_key'      	=> $data->auth_key,
                    'password_hash'     => $data->password_hash,
                    'is_staff'    		=> $data->is_staff,
                    'username'          => $data->username,
                    'lastname'			=> $data->lastname,
                    'gender'			=> $data->gender
                    

                );
                $this->db->where('id', $user_id);
                $this->db->update('user', $update);
                return $this->db->affected_rows();
            }

        }
        return 0;
    }

/*-------------------------------#PE$$ Section Start---------------------------------*/
    //get home data #PE$$
    public function home_data(){
        if(is_logged()){
            $id = user_id();
            $follow = ", (SELECT count(*) FROM hero_followers hf WHERE hf.hero_id = b.hero_id AND hf.by_user_id = $id) as follow ";
        }else{
            $follow = '';
        }

        //general achievement query
        $sql_ach ="SELECT b.hero_id, b.user_id, b.hero, a.ach_title, a.ach_logo, a.ach_date, a.verified, d.country_arabic_name , d.country_english_name, e.city_english_name, c.username, c.lastname, c.photo, c.job, (SELECT count(*) FROM ach_likes f WHERE f.ach_id = a.ach_id) as likes, (SELECT count(*) FROM ach_dislikes g WHERE g.ach_id = a.ach_id) as dislikes, (SELECT count(*) From hero_followers hfs
            WHERE hfs.hero_id = b.hero_id) as followers ".$follow."
            FROM hero_citizen b, achievements a, user c, country d, city e WHERE a.hero_id = b.hero_id 
            AND c.id = b.user_id 
            AND d.country_id = a.ach_country 
            AND e.city_id = a.ach_city 
            AND b.status = 1 
            AND a.status = 1 
            ";
				
				// $t = $this->db->query($sql_ach)->result();
			// echo "<pre>";
			// print_r($t);
			// exit;	
        //get jobs
        $today  = date('Y-m-d');
        $sql_job = "SELECT tp.type_name , tp.type_name_ar, c.arabic_name, a.title,a.employer,c.english_name, a.created_at, a.title, a.advertisement_id , DATEDIFF(FROM_UNIXTIME(expiration),'$today') diff, a.country, can.country_english_name , a.img, a.job_type,a.address,a.expiration
        FROM categories c, categories fc, advertisement a, country can , job_type tp
        WHERE fc.category_id = c.parent_category_id 
        AND a.category_id = c.category_id 
        AND can.country_id = a.country 
        AND a.status = 1 
        AND tp.type_id = a.job_type ";
        
        $sql_bus = "
               SELECT b.id , b.*, ci.* ,co.* , cat.*  FROM businesses b  
                inner join city ci on ( ci.city_id = b.cityId)
                inner join country  co on ( co.country_id = b.countryId )   
                left join busi_catgo_fks catfks on ( catfks.busi_id = b.id)
                left join categories  cat on ( cat.category_id  = catfks.cat_id)
                left join busi_gen_feat_fks genfks on ( genfks.busi_id = b.id)
                left join busi_general_features gen on ( genfks.gf_id = gen.id)
                left join busi_datetimes dtm on ( dtm.busi_id = b.id)
                left join  busi_catgo_parents catp on ( catp.id = b.category_prnt )  
                left join  busi_catgo cats on ( cats.parent_id = catp.id)
                where 
                b.status = 0 ";
//                 
                	// $t = $this->db->query($sql_bus)->result();
			// echo "<pre>";
			// print_r($t);
			// exit;	

        //prefered countries with it's id
        $countries  = array(
            'Syria'                 => '213',
            'Turkey'                => '223',
            'United Arab Emirates'  => '229',
            'Lebanon'               => '121',
            'Saudi Arabia'          => '191'
        );

        //get user country 
        $res = $this->get_user_country();
        if(!empty($res)){
            $country = $res->country_id;
            $name = $res->country_english_name;
        }else{
            $country = 213;
            $name = "Syria";
        }

        //get user's country data (ach | jobs)
        if(in_array($country, $countries))
            $i = 1;
        else{
            $sql_ash = $sql_ash." AND a.ach_country = $country LIMIT 4 ";
            $data['achs'] = $this->db->query($sql_ash)->result();
           
           
            $sql_job = $sql_job." AND a.country = $country 
                ORDER BY a.advertisement_id DESC
                LIMIT 6  ";
            $data['jobs'] = $this->db->query($sql_job)->result();
            $data['country'] = $data['country_j'] = $name;
			
			$sql_bus = $sql_bus." AND b.countryId = $country 
               GROUP BY b.id   LIMIT 8";
            $data['bus'] = $this->db->query($sql_bus)->result();
            
			
			
            $i = 2;
        }
        
        //getting ach queries for each country
        foreach ($countries as $key => $value){
        	
		//	echo "$value";exit;
            $query_ach = $sql_ach." AND a.ach_country = $value LIMIT 4 ";
            $d  = 'achs'.$i;
            if($country==$value)
                $d  = 'achs';
            $$d = $this->db->query($query_ach)->result();
			// echo "<pre>";
			// print_r($$d);
			// echo "=========";
            if(empty($$d))
                continue;
            $data[$d] = $$d;
            if($country==$value){
                $data['country']=$key;
                continue;
            }
            else
                $data['country'.$i]=$key;
            if($i == 3)
                break;
            $i++;
        }
		//exit;
        
		 $data['bus_cat']=[];
        foreach ($countries as $key => $value){
        	
		//	echo "$value";exit;
            $query_bus = $sql_bus." AND b.countryId = $value 
              GROUP BY b.id   LIMIT 8";
            $d  = 'bus'.$i;
            if($country==$value)
                $d  = 'bus';
            $$d = $this->db->query($query_bus)->result();
			// echo "<pre>";
			// print_r($$d);
			// echo "=========";
            if(empty($$d))
                continue;
            $data[$d] = $$d;
			 foreach($data[$d] as $bus){
                $bus_id =$bus->id;
                $sql = "SELECT * FROM  busi_catgo s,  busi_catgo_fks ass 
                				 WHERE ass.busi_id=$bus_id 
                				 AND ass.cat_id =s.id 
                				 LIMIT 3 ";
                $data['bus_cat'][$bus_id] = $this->db->query($sql)->result();
            }
            if($country==$value){
                $data['country']=$key;
                continue;
            }
            else
                $data['countryb'.$i]=$key;
            if($i == 3)
                break;
            $i++;
        }
        
	//	exit;

        $data['jobSkills']=[];
        //getting job queries for each country
        foreach ($countries as $key => $value){
            $query_job = $sql_job." AND a.country = $value 
                ORDER BY a.advertisement_id DESC
                LIMIT 6  ";
            $j  = 'jobs'.$i;
            if($country==$value)
                $j  = 'jobs';
            $$j = $this->db->query($query_job)->result();
            if(empty($$j))
                continue;
            $data[$j] = $$j;

            foreach($data[$j] as $job){
                $job_id =$job->advertisement_id;
                $sql = "SELECT * FROM  skills s, adver_skills ass WHERE ass.adver_id=$job_id AND ass.skill_id =s.skill_id LIMIT 3 ";
                $data['jobSkills'][$job_id] = $this->db->query($sql)->result();
            }

            if($country==$value){
                $data['country_j']=$key;
                continue;
            }
            else
                $data['country_j'.$i]=$key;
            if($i == 3)
                break;
            $i++;
        }
        
        // __($data);
        
        // echo "<pre>";
		// print_r($data);
		// exit;
        return $data;
    }

    //public new profile
    public function get_profile_data($user_id =''){
      $data['profile'] = 0; //load public profile by default 
      //if the user is logged in check if he is requesting his own profile
      if(is_logged()){
        // 1 => private profile  ,  0 => public profile 
        $data['profile'] = (user_id() == $user_id ? 1 : 0 );
        //get recommendation
        $recom = recommend_ach(2, $user_id);
        $data['re_achs']  = $recom['achs'];
        $data['re_achs_d']  = array(
          'follow'  => $recom['follow'],
          'followers' => $recom['followers']
        );
      }
      //if public get active achievments only
      $profile = $data['profile'] ? "" : " AND a.active = 1 AND a.verified = 1";
      $sql="SELECT username, lastname, photo, job, about FROM user 
          WHERE id = $user_id ";
      $data['user'] = $this->db->query($sql)->row();

      //if user doesn't exist go home
      if(!$data['user']){
        redirect(base_url().'home');
      }

      //get user country & city
      $sql="SELECT d.country_english_name as country, e.city_english_name as city ,country_arabic_name as nm FROM user a, country d, city e 
      WHERE a.id = $user_id 
      AND a.country = d.country_id 
      AND a.city = e.city_id ";
      $place = $this->db->query($sql)->row();
      $data['place'] = $place ? $place : '';
      //get user skills
      $sql = "SELECT a.skill_name FROM skills a, user_skills b  
      WHERE b.user_id = $user_id 
      AND a.skill_id = b.skill_id";
      $data['skills'] = $this->db->query($sql)->result();
	  
	   $sql = "SELECT * FROM  session_log  
      WHERE type_id = $user_id 
      AND type = 1";
      $data['views'] = $this->db->query($sql)->num_rows();
 

      $data['followers']   = '';
      $data['follow']      = '';
      $data['have_bus']      = 0;
	  $sql = " SELECT * FROM businesses b where b.user_id = $user_id;";
	  
	 $bus =  $this->db->query($sql);
	 $have_bus = $bus->num_rows();
	 if($have_bus > 0){
	 			
	 	  $data['have_bus']      = 1;
	 	   $data['bus']      = $bus->result();
	 	  	
	 	
	 }
      //check if user have hero citizen service #PE$$
      $sql="SELECT * FROM user_services WHERE user_id = $user_id AND serv_id = 1";
      if($this->db->query($sql)->num_rows()){
        //get hero data
        $sql = "SELECT hero_id, user_id, verified, hero, became_hero_date FROM hero_citizen 
        WHERE user_id = $user_id ";
        $data['hero'] = $this->db->query($sql)->row();
        $hero_id = $data['hero']->hero_id;
        //get achievement data
        $sql = "SELECT a.ach_id, a.hero_id, a.ach_title, d.country_arabic_name   ,a.ach_logo, a.ach_date, a.ach_exp, a.website, a.facebook, a.twitter, a.linkedin, a.instagram, a.youtube, a.verified, a.active, b.type_name as achType, d.country_english_name as country, e.city_english_name as city
        FROM achievements a, ach_type b, country d, city e
        WHERE hero_id = $hero_id 
        AND a.ach_type = b.ach_typeid 
        AND a.ach_country = d.country_id 
        AND a.ach_city = e.city_id ".$profile." ORDER BY a.active DESC, a.ach_id DESC";
        $data['achs'] = $this->db->query($sql)->result();
        //count followers
        $sql = "SELECT id FROM hero_followers 
        WHERE hero_id = $hero_id";
        $data['followers'][$hero_id] = $this->db->query($sql)->num_rows();
        //checking if the heros was followed by the user #PE$$
        if(is_logged()){
          $id = user_id();
          $sub_sql = "SELECT by_user_id From hero_followers 
              WHERE hero_id = $hero_id 
              AND by_user_id = $id";
          $data['follow'][$hero_id] = $this->db->query($sub_sql)->num_rows();
        }
        //user total likes & dislikes
        $data['t_likes']=0;
        $data['t_dislikes']=0;
        //get achievement imgs, likes, dislikes, check like , check dislike, total likes & dislikes
        foreach ($data['achs'] as $ach) {
        $sql ="SELECT img FROM ach_imgs WHERE achiv_id = $ach->ach_id";
        $data['ach_data'][$ach->ach_id]['imgs'] = $this->db->query($sql)->result();
        $sql = "SELECT id FROM ach_likes WHERE ach_id = $ach->ach_id";
        $data['ach_data'][$ach->ach_id]['likes'] = $this->db->query($sql)->num_rows();
        $sql = "SELECT id FROM ach_dislikes WHERE ach_id = $ach->ach_id";
        $data['ach_data'][$ach->ach_id]['dislikes'] = $this->db->query($sql)->num_rows();
        if(is_logged()){
            //check if like or dislike
            $sql = "SELECT id FROM ach_likes WHERE ach_id = $ach->ach_id AND by_user_id = $id ";
            $data['ach_data'][$ach->ach_id]['ck_like'] = $this->db->query($sql)->row();
            $sql = "SELECT id FROM ach_dislikes WHERE ach_id = $ach->ach_id AND by_user_id = $id ";
            $data['ach_data'][$ach->ach_id]['ck_dislike'] = $this->db->query($sql)->row();
        }
        //get total likes
        $data['t_likes'] +=$data['ach_data'][$ach->ach_id]['likes'];
        $data['t_dislikes'] +=$data['ach_data'][$ach->ach_id]['dislikes'];
        }
      }else{
        //if user don't have hero citizen service #PE$$
        $data['hero']        = '';
        $data['achs']        = '';
        $data['ach_data']    = '';
        $data['t_likes']     = '';
        $data['t_dislikes']  = '';
      }
      return $data;
    }

    //get user country
    public function get_user_country(){
        $user_id = user_id();
        if($user_id){
            $this->db->select('country');
            $country = $this->db->get_where('user', array('id' => $user_id))->row()->country;
            $this->db->select('country_id, country_english_name');
            $res = $this->db->get_where('country', array('country_id' => $country))->row();
        }
        if(!isset($country) || !empty($country)){
            $this->db->select('country_id, country_english_name');
            $res = $this->db->get_where('country', array('country_arabic_name' => $this->session->userdata('logged_country')))->row();
        }
        return $res;
    }

/*-------------------------------#PE$$ Section End----------------------------------*/

    public function categories_main($id, $page=0, $country_id='', $cat_id='', $search='', $filter='')
    {

        $where = ' ';
        $search = str_replace(' ', '%', $search);
        //$search = mysqli_real_escape_string($search, );
        $search = str_replace("'", "", $search);
        $search = str_replace('"', "", $search);
        $where .= $search ? " OR a.title LIKE '%$search%' " : '';
        $where .= $search ? " OR a.description LIKE '%$search%' " : '';

        //$where .= $search ? " AND fc.english_name LIKE '%$search%' " : '';
		
		$where .= $filter && is_numeric($filter) ? " AND job_type=$filter " : '';
		$today = date('Y-m-d');

    	$sql   	= " SELECT tp.type_name , tp.type_name_ar, c.arabic_name, a.title,a.employer,c.english_name, a.created_at, a.title, a.advertisement_id , 
    					   DATEDIFF(FROM_UNIXTIME(expiration),'$today') diff,
				  		   a.country, can.country_english_name , a.img, a.job_type,a.address,a.expiration
			  		  FROM categories c, categories fc, advertisement a, country can , job_type tp
					 WHERE fc.category_id = $id
			 		   AND a.category_id = c.category_id
			  		   AND can.country_id = a.country
			  		   AND tp.type_id = a.job_type
			 		   AND a.status = 1
			 		   ".($cat_id ? " AND a.category_id=$cat_id " : '').
                        ($country_id ? " AND a.country=$country_id " : '')."
			 		   
			 		   AND (1 $where)
			 		   AND DATEDIFF(FROM_UNIXTIME(expiration),'2017-07-12') > 0
	 				 ORDER BY a.advertisement_id DESC";
       // echo $sql; exit;
        $num_rows = $this->db->query($sql)->num_rows();
        if ($num_rows > 8) {
            $first = $page * 8;

            $sql .= " LIMIT $first, 8";
        }

        return array($this->db->query($sql), $num_rows);
    }






     public function apply_job($firstname, $lastname , $massage, $skills , $job_id, $user_id)
    {
    	$applicant_id = $this->db->get_where('advertisement', array('advertisement_id' => $job_id))->row()->user_id;
    	if ($applicant_id == $user_id) {
			return array(0, 'apply_my_dub');
		}
		
		$res = $this->db->get_where('users_apply', array('advertisement_id' => $job_id, 'user_id' => $user_id))->num_rows();
		if ($res) {
			return array(0, 'already_applied');
		}
        if (!$_FILES) {
            return array(0, 0);
        }
		
        $fs_images 	 = array();
        $i			 = 0;
        $logos[]	 = array();
        $errors		 = array();
        $ext		 = array();
        $config['upload_path']   = 'uploads/cv/';
        $path				     = $config['upload_path'];
        $config['allowed_types'] = 'jpg|jpeg|png|pdf|doc|docx';
        $config['max_size'] 	 = '6000';
        $config['overwrite'] 	 = FALSE;
		$config['encrypt_name'] = TRUE; $this->load->library('upload');
		


		
        foreach ($_FILES as $fieldname => $fileObject)  //fieldname is the form field name
        {
            if (!empty($fileObject['name']))
            { 
                $this->upload->initialize($config);
                if (!$this->upload->do_upload($fieldname))
                {
                    $error = $this->upload->display_errors();
                    $errors[] = $error;
                } else {

                    $upload_data     = $this->upload->data();
                    $fs_images[$i] = $upload_data['file_name'];
                    $i++;
                }
            }	
		}

        if ($errors) {
			//exit;
            return array(0, $errors[0]);
        }
        $this->db->trans_start();

        if (isset($fs_images[0])) {
            $insert = array(
                'cv' 			  	=> $fs_images[0],
                'advertisement_id' 	=> $job_id,
                'user_id'		  	=> $user_id,
                'massage'		  	=> $massage,
				'insert_date'		=> time(),
            );
            $this->db->insert('users_apply', $insert);
			$this->db->delete('user_skills', array('user_id' => $user_id));
       		
       		foreach ($skills as $skill) {
            
            $insert = array (
                'user_id'  => $user_id,
                'skill_id' => $skill
            );
            $this->db->insert('user_skills', $insert);
        }
        }
		
		
        $this->db->trans_complete();
		$res = $this->db->trans_status();
		$url = base_url() . "my_applicants/" . $job_id;
		if ($res) {
			$rows = $this->db->get_where('users_apply', array('advertisement_id' => $job_id, 'sent' => 0));
			$id   = $this->db->get_where('advertisement', array('advertisement_id' => $job_id))->row()->user_id;
			
			$insert = array (
								'op_id' 	=> 6,
								'user_id' 	=> $id,
								'n_text'	=> 'يوجد طلب تقدم جديد لديك',
								'n_text_en'	=> 'You have a new applicant',
								'date'		=> time(),
								'link'		=> $url
							);
			$this->db->insert('notifications', $insert);
			if ($rows->num_rows() >= 5) {
				
				$from_name = $this->config->item('from_name');
				$from_email = $this->config->item('from_email');
				$subject = 'Job apply';
				$send_id = $this->db->get_where('advertisement', array('advertisement_id'=> $job_id))->row()->user_id;
				$me = $this->db->get_where('user', array('id' => $send_id))->row();
				$email = $me->email;
				$members = $email;
				$to_name = $me->username.' '.$me->lastname;
				$message = "jobapply";
				$var1 = $url;
				
	            $sent = $this->prepare_mail($from_name, $from_email, $subject, $members, $to_name, $message, $var1, $user_id);
				$this->db->where(array('advertisement_id' => $job_id, 'sent' => 0));
				$this->db->update('users_apply', array('sent' => 1, 'sent_date' => time()));
			}
		}
        return array($res, 0);
    }

	


    public function get_high_news()
    {
        $sql = "SELECT n.*, CONCAT(' ', e.first_name, e.last_name) name 
				  FROM news n, employees e 
				 WHERE e.emp_id=n.added_by
				   AND n.active=1
				   AND n.deleted=0
				   AND n.high_light=1";
        return $this->db->query($sql);
    }

    public function get_high_prods($value='')
    {
        $sql = "SELECT p.*, CONCAT(' ', e.first_name, e.last_name) name 
				  FROM prods p, employees e 
				 WHERE e.emp_id=p.added_by
				   AND p.active=1
				   AND p.deleted=0
				   AND p.high_light=1";
        return $this->db->query($sql);
    }

    public function get_news($page_id)
    {
        $page_id--;
        $start = $page_id * 3;
        $sql = "SELECT n.*, CONCAT(' ', e.first_name, e.last_name) name 
				  FROM news n, employees e 
				 WHERE e.emp_id=n.added_by
				   AND n.active=1
				   AND n.deleted=0 limit $start, 3";
        return $this->db->query($sql);
    }

    public function get_news_det($news_id)
    {
        $sql = "SELECT n.*, CONCAT(' ', e.first_name, e.last_name) name 
				  FROM news n, employees e 
				 WHERE e.emp_id=n.added_by
				   AND n.active=1
				   AND n.deleted=0
				   AND n.n_id=$news_id";
        if ($this->db->query($sql)->num_rows() == 0) {
            return 0;
        }
        return $this->db->query($sql)->row();
    }

    public function get_news_pages()
    {
        $sql = "SELECT n.*, CONCAT(' ', e.first_name, e.last_name) name 
				  FROM news n, employees e 
				 WHERE e.emp_id=n.added_by
				   AND n.active=1
				   AND n.deleted=0";
        $num = $this->db->query($sql)->num_rows();
        $pages = $num % 3 > 0 ? (int)($num / 3) + 1 : $num / 3;
        //$pages = $pages == 0 ? 1 : $pages;
        return $pages;
    }

    public function get_prods($page_id)
    {
        $page_id--;
        $start = $page_id * 3;
        $sql = "SELECT p.*, CONCAT(' ', e.first_name, e.last_name) name 
				  FROM prods p, employees e 
				 WHERE e.emp_id=p.added_by
				   AND p.active=1
				   AND p.deleted=0 limit $start, 3";
        return $this->db->query($sql);
    }

    public function get_prod($prod_id)
    {
        $sql = "SELECT p.*, CONCAT(' ', e.first_name, e.last_name) name 
				  FROM prods p, employees e 
				 WHERE e.emp_id=p.added_by
				   AND p.active=1
				   AND p.deleted=0
				   AND p.p_id=$prod_id";
        if ($this->db->query($sql)->num_rows() == 0) {
            return 0;
        }
        return $this->db->query($sql)->row();
    }

    public function get_prods_pages()
    {
        $sql = "SELECT p.*, CONCAT(' ', e.first_name, e.last_name) name 
				  FROM prods p, employees e 
				 WHERE e.emp_id=p.added_by
				   AND p.active=1
				   AND p.deleted=0";
        $num = $this->db->query($sql)->num_rows();
        $pages = $num % 3 > 0 ? (int)($num / 3) + 1 : $num / 3;
        //$pages = $pages == 0 ? 1 : $pages;
        return $pages;
    }

    public function send_email($name='', $email='', $subject='support', $message='', $reciver = "info@do.sy")
    {

        $sender = 'info@aya.sy';
        $config = Array(
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.do.sy',
            'smtp_port' => '25',
            'smtp_user' => 'info@do.sy',
            'smtp_pass' => ''
        );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from($sender, $name.' | '.$email);
        $this->email->to($reciver);
        $this->email->subject($subject);
        $this->email->message($message);
        if (!$this->email->send()) {
            return 2;
        } else {
            return 1;
        }

    }

    public function set_basics($value='')
    {
        return $this->db->get('site_data')->row();
    }



    public function get_search_pages($str='')
    {
        $title = LANG() == 'en' ? 'title_en' : 'title_ar';
        $desc = LANG() == 'en' ? 'desc_en' : 'desc_ar';
        $sql = "SELECT n.*, CONCAT(' ', e.first_name, e.last_name) name, 1 as type
				  FROM news n, employees e 
				 WHERE e.emp_id=n.added_by
				   AND n.active=1
				   AND n.deleted=0
				   AND 	(
				   			n.$title LIKE '%$str%'
				   			OR n.$desc LIKE '%$str%'
				   		)
			UNION ALL
				SELECT p.*, CONCAT(' ', e.first_name, e.last_name) name, 2
				  FROM prods p, employees e 
				 WHERE e.emp_id=p.added_by
				   AND p.active=1
				   AND p.deleted=0
				   AND 	(
				   			p.$title LIKE '%$str%'
				   			OR p.$desc LIKE '%$str%'
				   		)";
        $num = $this->db->query($sql)->num_rows();
        //echo $num; exit;
        $pages = $num % 3 > 0 ? (int)($num / 3) + 1 : $num / 3;
        //$pages = $pages == 0 ? 1 : $pages;
        //echo $pages; exit;
        return $pages;
    }

    public function get_res($page_id, $str='')
    {
        $page_id--;
        $start = $page_id * 3;
        $title = LANG() == 'en' ? 'title_en' : 'title_ar';
        $desc = LANG() == 'en' ? 'desc_en' : 'desc_ar';

        $sql = "SELECT n.*, CONCAT(' ', e.first_name, e.last_name) name, 1 as type
				  FROM news n, employees e 
				 WHERE e.emp_id=n.added_by
				   AND n.active=1
				   AND n.deleted=0
				   AND 	(
				   			n.$title LIKE '%$str%'
				   			OR n.$desc LIKE '%$str%'
				   		)
			UNION ALL
				SELECT p.*, CONCAT(' ', e.first_name, e.last_name) name, 2
				  FROM prods p, employees e 
				 WHERE e.emp_id=p.added_by
				   AND p.active=1
				   AND p.deleted=0 
				   AND 	(
				   			p.$title LIKE '%$str%'
				   			OR p.$desc LIKE '%$str%'
				   		)
				 LIMIT $start, 3";
        return $this->db->query($sql);
    }

    public	function subscribe($sub)
    {

        $insert = array (
            'email' 	 => $sub,
            'added_date' => time()
        );
        $this->db->insert('Subscribe', $insert);
    }
    public	function lookup($search)
    {

        $this->db->select('*')->from('post_title');
        $this->db->like('title',$search,'after');

        $query = $this->db->get();
        return $query->result();
    }

    public function search($search)
    {

        $sql ="select p.p_id ,p.img ,p.add_date ,t.title , c.cat_name  
		from posts p , post_title t ,post_cat c ,tags ta, tag_post tp where
		 c.cat_id = t.cat_id AND
		 t.t_id = p.t_id AND
		 p.p_id=tp.p_id AND
		 ta.tag_name  LIKE N'%$search%' AND
		 tp.tag_id=ta.tag_id AND
		 p.deleted = 0 
		 group by p.p_id ,p.img ,p.add_date ,t.title , c.cat_name  order by p.p_id";



        return $this->db->query($sql)->result();
    }
    /* sql = "SELECT n.*, CONCAT(' ', e.first_name, e.last_name) name, 1 as type FROM 
                (
                    SELECT n.*, CONCAT(' ', e.first_name, e.last_name) name, 1 as type
                      FROM news n, employees e 
                     WHERE e.emp_id=n.added_by
                       AND n.active=1
                       AND n.deleted=0
                UNION ALL
                    SELECT p.*, CONCAT(' ', e.first_name, e.last_name) name, 2
                      FROM prods p, employees e 
                     WHERE e.emp_id=p.added_by
                       AND p.active=1
                       AND p.deleted=0 
                )
                 LIMIT $start, 3"; */

}
