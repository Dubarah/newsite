<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller
{

    function __construct()
    { 
        parent::__construct();
        $this->session->set_userdata('this_url', current_url());
        $this->load->library('user_agent');
        $ip_address = $this->input->ip_address();
        $row = $this->db->get_where('session_log', array('ip_address' => $ip_address));
        if (!$row->num_rows()) {
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
                'start_time' => time()
            );
            $this->db->insert('session_log', $insert);

        }			
				// $url = "http://freegeoip.net/json/$ip_address";
		    // $data = file_get_contents($url);
		    // $data = json_decode($data);
		    $this->session->set_userdata('logged_country', 2);
			$data = 't';
		    if (!LANG()) {
			 switch ($data)  {
			  // switch ((string)$data->country_code) {
            case 'SY': //Syria
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'AE': //United Arab Emirates
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'LY': //Libya
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'LB': //Lebanon
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'YE': //Yemen
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'SD': //Sudan
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'KW': //Kuwait
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'SS': //South Sudan
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'MA': //Morocco
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'SA': //Saudi Arabia
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'QA': //Qatar
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'EG': //Egypt
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'IQ': //Iraq
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'JO': //Jordan
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'TN': //Tunisia
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'OM': //Oman
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'DZ': //Algeria
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'BH': //Bahrain
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'MR': //Mauritania
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'SO': //Somalia
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'PS': //Palestine
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'DJ': //Djibouti
                $this->session->set_userdata('lang', 'ar');
                break;
            case 'KM': //Comoros
                $this->session->set_userdata('lang', 'ar');
                break;
            default:
                $this->session->set_userdata('lang', 'en');
                break;
	        }
        }
        if (LANG() == 'ar') {
        	$this->config->set_item('language', 'arabic');
          $this->lang->load('main', 'arabic');
					$this->lang->load('form_validation', 'arabic');
        } else {
          $this->lang->load('main', 'english');
        }
        $this->load->model('main_model');    //	$basics = $this->main_model->set_basics();	//	$this->session->set_userdata('basics', $basics);


    }
	
	public function error_500($value='')
	{
		
	}
	
	public function dele($value='')
	
	{
		//$this->db->delete('advertisement', array('user_id' => $user_id));
		$this->db->delete('advertisement', array('advertisement_id' => 234));
		
	}
	
	public function blog($value='')
	{
		$this->load->view('blog');
		
	}
	
	
	public function facebook($value='')
	{
		//print_r($_POST); exit;
		$user = $this->input->post('userData');
		$user = json_decode($user);
		$email = $user->email;
		$first_name = $user->first_name;
		$last_name = $user->last_name;
		$gender = $user->gender == 'male' ? '1' : '2';
		$photo  = $user->picture->data->url;
		$verified = $user->verified;
		$face_id = $user->id;
		if (!$verified || !$email) {
			echo 0;
			return;
		}
		
		
		$res = $this->main_model->face_register($face_id, $first_name, $last_name, $email, $gender, $photo);
		echo $res;
	}
	
	
	public function views($type , $id)
	{
		
	
		$res = $this->main_model->add_view($type , $id);
		
	}
	
	
	public function check_completed($value='')
	{
		if ($this->session->userdata('not_completed')) {
			$this->messages->error(trans('complete_profile'));
			redirect(base_url()."my_profile");  
		}
	}
	
    public function apply_job($job_id = '')
    {
        
        if ($_POST && $_FILES['fs_images1']['name']) {
			$this->form_validation->set_rules('firstname', trans('firstname'), 'required|trim|alpha_numeric_spaces');
            $this->form_validation->set_rules('lastname', trans('lastname'), 'required|trim|alpha_numeric_spaces');
           
            $this->form_validation->set_rules('skills[]', trans('skills'), 'required');
            $this->form_validation->set_rules('massage', trans('your_note'), 'required');
            //$this->form_validation->set_rules('cv1', trans('upload_cv'), 'required');

            need_login(); 
			$this->check_completed();
			
            if ($this->form_validation->run() == true) {
                $massage = $this->input->post('massage');
                $user_id = $this->session->userdata('user_id');
				$firstname 	= $this->input->post('firstname');
                $lastname 	= $this->input->post('lastname');
				$skills 	= $this->input->post('skills[]');

                $created = $this->main_model->apply_job($firstname, $lastname , $massage, $skills , $job_id, $user_id);
                // print_r($created); exit

                if ($created[0]) {
                    $this->messages->success(trans('apply_scss'));
                } elseif(!$created[0] && $created[1]) {
                    $this->messages->error($created[1]);
                } else {
                    $this->messages->error($this->lang->line('err_dubarah'));
                }
            }
        }
		
		if ($_POST && !$_FILES['fs_images1']['name']) {
			$this->messages->error($this->lang->line('err_dubarah'));
			//exit;
		}
		$today  = date('Y-m-d');
		
		$sql = "SELECT tp.type_name , tp.type_name_ar	, a.title, a.user_id, a.employer, a.created_at, a.description, a.job_style, a.gender, a.verified , 
					   DATEDIFF(FROM_UNIXTIME(expiration),'2015-01-01') diff,
					   a.advertisement_id, u.username, u.lastname, co.country_english_name, cat.arabic_name,
		 			   cat.english_name ,u.username ,a.phone , a.email,a.img, a.job_type,a.address,a.expiration 
	 	 		  FROM advertisement a , categories cat ,   city ci, country co, user u , job_type tp
				 WHERE a.advertisement_id = $job_id
				   AND a.user_id		  = u.id
				   AND a.status = 1
				   AND tp.type_id = a.job_type
				   AND a.category_id = cat.category_id 
				   AND co.country_id = a.country
				   AND ci.city_id    = a.city 
				   AND DATEDIFF(FROM_UNIXTIME(expiration),'2017-07-12') > 0
				 GROUP BY a.advertisement_id";
				 
        $dubarah = $this->db->query($sql);
		
		$sql = "SELECT * FROM  skills s, adver_skills ass WHERE	ass.adver_id=$job_id AND ass.skill_id =s.skill_id";
        $skils_num = $this->db->query($sql)->num_rows();
		
		$sql = "SELECT * FROM  skills s, adver_skills ass WHERE	ass.adver_id=$job_id AND ass.skill_id =s.skill_id";
        $skils = $this->db->query($sql);
		$in = $skils->result_array();
		$ad_skills = array();
		foreach ($in as $row) {
			$ad_skills[] = $row['skill_id'];
			
		}
		$in_skills = $ad_skills;
		$job_skills = implode(',', $in_skills);
		$sql = "SELECT * FROM  skills";
		$data['allskils']  = $this->db->query($sql);
		$sql = "SELECT * FROM  categories LIMIT 3";
        $cats = $this->db->query($sql);
        $userr = $this->session->userdata('user_id');
        if($userr){
	        $userr = $this->session->userdata('user_id');
			$data['user'] = $this->db->get_where('user', array('id' =>$userr))->row();
			$sql = "select * from  user_skills us , skills s where us.user_id = $userr and us.skill_id = s.skill_id";		
	        $userskills  = 	 $this->db->query($sql)->result_array();
	        $data['userskills'] = $userskills;
			$u_skills = array();
			foreach ($userskills as $row) {
				$u_skills[] = $row['skill_id'];
				
			}
			$not = implode(',' , $u_skills) ? implode(',' , $u_skills) : 0;
			
	       	$sql = "select * from skills where skill_id IN($job_skills) AND skill_id  NOT IN($not)";
	        $not_skill= $this->db->query($sql);
			 $data['n'] =		$not_skill->num_rows();
			if ($not_skill->num_rows()){
			    $data['not_num'] =	count($not_skill->result());
				
			    $data['not'] =	$not_skill->result();
			}
        }
        $data['job_id'] = $job_id;
        $data['skils_num'] = $skils_num;
        $data['skills'] = $skils;
        $data['dubarah'] = $dubarah;
		echo "<pre>";
		print_r($dubarah->result());
		exit;
        $data['cats'] = $cats;
        $this->load->view('dubarah', $data);
    }



	public function admin_view($job_id='')
	{
		
		have_access(22);
        
      	if ($_POST && $_FILES['fs_images1']['name']) {
			$this->form_validation->set_rules('firstname', trans('firstname'), 'required|trim|alpha_numeric_spaces');
            $this->form_validation->set_rules('lastname', trans('lastname'), 'required|trim|alpha_numeric_spaces');
           
            $this->form_validation->set_rules('skills[]', trans('skills'), 'required');
            $this->form_validation->set_rules('massage', trans('your_note'), 'required');
            //$this->form_validation->set_rules('cv1', trans('upload_cv'), 'required');

            need_login(); 
			$this->check_completed();
			
            if ($this->form_validation->run() == true) {
                $massage = $this->input->post('massage');
                $user_id = $this->session->userdata('user_id');
				$firstname 	= $this->input->post('firstname');
                $lastname 	= $this->input->post('lastname');
				$skills 	= $this->input->post('skills[]');

                $created = $this->main_model->apply_job($firstname, $lastname , $massage, $skills , $job_id, $user_id);
                // print_r($created); exit

                if ($created[0]) {
                    $this->messages->success(trans('apply_scss'));
                } elseif(!$created[0] && $created[1]) {
                    $this->messages->error($created[1]);
                } else {
                    $this->messages->error($this->lang->line('err_dubarah'));
                }
            }
        }
		
		if ($_POST && !$_FILES['fs_images1']['name']) {
			$this->messages->error($this->lang->line('err_dubarah'));
			//exit;
		}
		$today  = date('Y-m-d');
		
		$sql = "SELECT tp.type_name , tp.type_name_ar	, a.title, a.user_id, a.employer, a.created_at, a.description, a.job_style, a.gender, a.verified ,
				   	   DATEDIFF(FROM_UNIXTIME(expiration),'$today') diff,
					   a.advertisement_id, u.username, u.lastname, co.country_english_name, cat.arabic_name,
		 			   cat.english_name ,u.username ,a.phone , a.email,a.img, a.job_type,a.address,a.expiration 
	 	 		  FROM advertisement a , categories cat ,   city ci, country co, user u , job_type tp
				 WHERE a.advertisement_id = $job_id
				   AND a.user_id		  = u.id
				   AND tp.type_id = a.job_type
				   AND a.category_id = cat.category_id 
				   AND co.country_id = a.country
				   AND ci.city_id    = a.city 
				   AND DATEDIFF(FROM_UNIXTIME(expiration),'2017-07-12') > 0
				 GROUP BY a.advertisement_id";
				 
        $dubarah = $this->db->query($sql);
		//exit;
		$sql = "SELECT * FROM  skills s, adver_skills ass WHERE	ass.adver_id=$job_id AND ass.skill_id =s.skill_id";
		//echo $sql; exit;
        $skils_num = $this->db->query($sql)->num_rows();
		
		$sql = "SELECT * FROM  skills s, adver_skills ass WHERE	ass.adver_id=$job_id AND ass.skill_id =s.skill_id";
        $skils = $this->db->query($sql);
		$in = $skils->result_array();
		$ad_skills = array();
		foreach ($in as $row) {
			$ad_skills[] = $row['skill_id'];
			
		}
		$in_skills = $ad_skills;
		$job_skills = implode(',', $in_skills);
		$sql = "SELECT * FROM  skills";
		$data['allskils']  = $this->db->query($sql);
		$sql = "SELECT * FROM  categories LIMIT 3";
        $cats = $this->db->query($sql);
        $userr = $this->session->userdata('user_id');
        if($userr){
	        $userr = $this->session->userdata('user_id');
			$data['user'] = $this->db->get_where('user', array('id' =>$userr))->row();
			$sql = "select * from  user_skills us , skills s where us.user_id = $userr and us.skill_id = s.skill_id";		
	        $userskills  = 	 $this->db->query($sql)->result_array();
	        $data['userskills'] = $userskills;
			$u_skills = array();
			foreach ($userskills as $row) {
				$u_skills[] = $row['skill_id'];
				
			}
			$not = implode(',' , $u_skills) ? implode(',' , $u_skills) : 0;
			
	       	$sql = "select * from skills where skill_id IN($job_skills) AND skill_id  NOT IN($not)";
	        $not_skill= $this->db->query($sql);
			 $data['n'] =		$not_skill->num_rows();
			if ($not_skill->num_rows()){
			    $data['not_num'] =	count($not_skill->result());
				
			    $data['not'] =	$not_skill->result();
			}
        }
        $data['job_id'] = $job_id;
        $data['skils_num'] = $skils_num;
        $data['skills'] = $skils;
        $data['dubarah'] = $dubarah;
        $data['cats'] = $cats;
        $this->load->view('dubarah', $data);
    
	}

    public function index()
    {
    	$today  = date('Y-m-d');
    	$sql = "SELECT tp.type_name , tp.type_name_ar, c.arabic_name, a.title,a.employer,c.english_name, a.created_at, a.title, a.advertisement_id , 
    					DATEDIFF(FROM_UNIXTIME(expiration),'$today') diff,
    				   a.country, can.country_english_name , a.img, a.job_type,a.address,a.expiration
				  FROM categories c, categories fc, advertisement a, country can , job_type tp
				 WHERE fc.category_id = c.parent_category_id
				   AND a.category_id = c.category_id
				   AND can.country_id = a.country
				   AND a.status = 1
				   AND tp.type_id = a.job_type
				 ORDER BY a.advertisement_id DESC
				 LIMIT 4 ";
        $resent = $this->db->query($sql);

		$sql = "select * 	from  categories LIMIT 3";
        $cats = $this->db->query($sql);
        $data['resent'] = $resent;
		$sql = "select * 	from  social_media";
        $social = $this->db->query($sql);
        $data['social'] = $social->result();
		
		
        $data['cats'] = $cats;
        $this->load->view('common/home', $data);

    }


    public function login($value = '')
    {
        if ($this->session->userdata('user_id')) {
            $message = trans("already_logged");
            $this->messages->error($message);
            redirect(base_url() . "home");
        }
        $data['message'] = '';
        $data = array();

        $this->form_validation->set_rules('username', $this->lang->line("email"), 'required');
        $this->form_validation->set_rules('password', $this->lang->line('password'), 'required');
        if ($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            //echo $password; exit;
            $logged = $this->main_model->login($username, $password);
            if ($logged == 'passed') {
                $message = trans("logged_in");
                $this->messages->success($message);
				
				 
				      $old_url = $this->session->userdata('old_url');
				      if($old_url){  
				       
				       redirect($old_url); 
				       
				       }else{ 
				       
				     redirect(base_url() . 'home');      
				        } 
                
            } elseif ($logged == 'pass_error') {
                $this->messages->error(trans('pass_error'));  
            } else {
                $this->messages->error(trans('email_error'));
            }
        }
		
		$sql = "SELECT * FROM categories LIMIT 3";
        $cats = $this->db->query($sql);
		
		
        $data['cats'] = $cats;
        $data['username'] = $this->input->post('username');
        $this->load->view('newIndex/login', $data);
    }





	
	public function forgot_password($value='')
	{
		if ($_POST) {
			if ($this->input->post('_csrf-frontend') != $this->session->userdata('resalt')) {
				redirect(base_url());
			}
			$this->form_validation->set_rules('email', trans('email'), 'required|valid_email|strtolower|trim');
			if ($this->form_validation->run()) {
				
				$email = $this->input->post('email');
				$this->session->set_userdata('reset_email', $email);
				$sent = $this->main_model->reset_pass($email);
				if ($sent === 'err_user') {
					$this->messages->error(trans('err_user'));
				} elseif ($sent) {
					$this->messages->success(trans('code_sent_email'));
				} else {
					$this->messages->error(trans('code_not_sent_email'));
				}
				//echo trans('err_user'); exit;
			}
		}
		$resalt = $this->main_model->salt();
		$this->session->set_userdata('resalt', $resalt);
		$data['resalt'] = $resalt;
		$this->load->view('newindex/forget_pass_view', $data);
	}
	
	public function resend_code($type='')
	{
		if ($type == 'resend_code') {
			$email = $this->session->userdata('reset_email');
			if (!$email) {
				$this->messages->error('no_reset_mail');
				redirect(base_url()."forgot_password");
			}
			$sent = $this->main_model->resend_code($email, $type);
			if ($sent) {
				$this->messages->success(trans('code_resent'));
			} else {
				$this->messages->error(trans('code_not_resent'));
			}
		}
		redirect(base_url());
	}
	
	public function reset_pass($code='')
	{
		if (!$code) {
			redirect(base_url());
		}
		$this->load->library('JWT');
        $CONSUMER_SECRET = $this->config->item('token_secret');
        $salt = $this->jwt->decode($code, $CONSUMER_SECRET);
		if (!isset($salt->user_id) || !isset($salt->salt)) {
			$this->messages->error(trans('token_error'));
			redirect(base_url()); 
		}
        $user_id = $salt->user_id;
        $token = $salt->salt;
        if (!is_numeric($user_id)) {
            $this->messages->error(trans('token_error'));
            redirect(base_url());
        }

        $verified = $this->main_model->verify_pass_token($user_id, $token);
        if ($verified) {
        	if ($_POST) {
				$this->form_validation->set_rules('password', trans('password'), 'required|alpha_dash');
				$this->form_validation->set_rules('password_con', trans('password_con'), 'matches[password]');
				if ($this->form_validation->run()) {
					$password = $this->input->post('password'); 
					$changed = $this->main_model->update_pass($user_id, $password);
					if ($changed) {
						$this->messages->success(trans('pass_changed'));
					} else {
						$this->messages->error(trans('pass_not_changed'));
					}
					redirect(base_url()."login");  
				} else {
					$this->messages->error(validation_errors());
				}
			}
        	$data['resalt'] = $this->main_model->salt();
        	$data['code'] = $code;
			$this->load->view('reset_pass_view', $data);
        } else {
            redirect(base_url());
        }
	}

    public function captcha_check($str = '')
    {   
        $secret = $this->config->item('secret');
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $post = array(
            'secret' => $secret,
            'response' => $str
        );
        $postdata = http_build_query($post);
        $result = $this->post_data($url, $postdata);
        return $result->success;
    }

    public function post_data($url = '', $postdata)
    {
        //echo $postdata; exit;
        $opts = array('http' =>
            array(
                'method' => 'POST',
                'header' => 'Content-type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );

        $context = stream_context_create($opts);
        $result = json_decode(file_get_contents($url, false, $context));
        return $result;
    }

    public function signup($value = '')
    {
        if ($_POST) {
        	if ($this->input->post('_csrf-frontend') != $this->session->userdata('resalt')) {
        		$this->messages->error($this->lang->line('user_not_created'));
				redirect(current_url());
			}
            ///echo "<pre>"; print_r($_POST); exit;
            $this->form_validation->set_rules('email', trans('email'), 'required|valid_email|strtolower|is_unique[user.email]|trim');
            $this->form_validation->set_rules('password', trans('password'), 'required|alpha_dash');
            $this->form_validation->set_rules('g-recaptcha-response', trans('captcha'), 'required|callback_captcha_check');
            $this->form_validation->set_rules('firstname', trans('firstname'), 'required|trim|alpha_numeric_spaces');
            $this->form_validation->set_rules('lastname', trans('lastname'), 'required|trim|alpha_numeric_spaces');
         
            $this->form_validation->set_rules('gender', trans('gender'), 'required');
            if ($this->form_validation->run() == true) {
            	
                //echo "<pre>"; print_r($_POST); exit;
                $firstname 	= $this->input->post('firstname');
                $lastname 	= $this->input->post('lastname');
                $gender 	= $this->input->post('gender');
                $email 		= $this->input->post('email');
                $password 	= $this->input->post('password');
                $created 	= $this->main_model->signup($email, $password, $firstname, $lastname, $gender);
                //, $country, $city, $langs, $skills, $gender, $mobile
                // print_r($created); exit
                if ($created) {
                	$this->messages->success($this->lang->line('user_created'));
                    redirect(base_url() . "done");
                } else {
                    $this->messages->error($this->lang->line('user_not_created'));
                }
            } 
        }


        $sql = "select * from  categories LIMIT 3";
        $cats = $this->db->query($sql);

        $sql = "SELECT * FROM country ORDER BY country_english_name";
        $query = $this->db->query($sql);

        $sql = "SELECT * FROM skills";
        $skills = $this->db->query($sql);
        $langs = $this->db->query("select * from  lang");
        $data['cats'] = $cats;
        $data['langs'] = $langs;
        $data['skills'] = $skills;
        $data['countrys'] = $query;
		$resalt = $this->main_model->salt();
		$this->session->set_userdata('resalt', $resalt);
		$data['resalt'] = $resalt;
		$data['site_key'] = $this->config->item('site_key');
        $this->load->view('newindex/signup', $data);
    }
	public function tte($value='')
	{
		$this->load->library('ch_mail');
		$this->ch_mail->new_list('Dubarah', 'website@dubarah.com', 'Activation');
	}
    public function send_activation($value = '')
    {
        /*$check = $this->session->userdata('was_here');
        if ($check) {
            redirect(base_url());
        }*/

        $user_id = $this->session->userdata('not_verified');
        if (!$user_id) {
            redirect(base_url());
        }

        $generated = $this->main_model->send_activation($user_id);
        //echo $generated; exit;
        if ($generated) {
            //$this->message->success(trans('code_sent'));

            $this->load->view('need_activ');

        }
        else
        {

            $this->load->view('need_activ');

        }
		
    }

    public function need_activ($value = '')
    {
        $this->load->view('need_activ');
    }
  
    public function done($value = '')
    {
        $this->load->view('done');
    }
	public function done_virfed($value = '')
    {    
    	$user_id =  $this->session->userdata('v_id');
	    if (!$user_id) {
	    	redirect(base_url());
   		}	
		$user 	 =  $this->db->get_where('user',array('id' => $user_id,'fired' =>0,'verified'=>1));
        $this->session->set_userdata('user_id', $user->row()->id);
        $this->session->set_userdata('username', $user->row()->username);	
    		
        $this->load->view('done_virfed');
    }
		
	public function done_dubarah($value = '')
    {
        $this->load->view('done_duba');
    }
			
	public function team($value='')
	{	$sql = 'select * from advertisement';
		$data['all']= $this->db->query($sql)->num_rows();
		$data['title']= trans('team');
		$data['selected']= 'team';
		$this->load->view('team', $data);
		
	}	
	
	public function test($value='')
	{
		$this->load->library('ch_mail');
		$this->ch_mail->test();
	}
	
   	public function terms($value='')
	{	$sql = 'select * from advertisement';
		$data['all']= $this->db->query($sql)->num_rows();
		$data['title']= trans('team');
		$data['selected']= 'team';
		$this->load->view('terms', $data);
		
	}	
	public function privacy($value='')
	{	$sql = 'select * from advertisement';
		$data['all']= $this->db->query($sql)->num_rows();
		$data['title']= trans('team');
		$data['selected']= 'team';
		$this->load->view('privacy', $data);
		
	}			
	

		
	public function vision($value='')
	{	$sql = 'select * from advertisement';
		$data['all']= $this->db->query($sql)->num_rows();
		$data['title']= trans('vision');
		$data['selected']= 'vision';
		$this->load->view('vision', $data);
		
	}		
	public function aboutus($value='')
	{	$sql = 'select * from advertisement';
		$data['all']= $this->db->query($sql)->num_rows();
		$data['title']= trans('aboutus');
		$data['selected']= 'aboutus';
		$this->load->view('aboutus', $data);
		
	}
	
	public function aboutdubarah($value='')
	{
		
		
		$data['title']= trans('aboutus');
		$data['selected']= 'aboutus';
		$this->load->view('about_dubarah', $data);
		
		
	}	
	
/*
    public function complete_account($value = '')
    {
        //echo $this->session->userdata('user_id'); exit;
        if (!$this->session->userdata('user_id')) {
            redirect(base_url());
        }

        $user_id = $this->session->userdata('user_id');

        if ($_POST) {
            //echo "<pre>"; print_r($_POST); exit;
            //$this->form_validation->set_rules('email', trans('email'), 'required|valid_email|strtolower|is_unique[user.email]|trim');
            //$this->form_validation->set_rules('password', trans('password'), 'required|alpha_dash');
            $this->form_validation->set_rules('g-recaptcha-response', trans('captcha'), 'required|callback_captcha_check');
            //$this->form_validation->set_rules('firstname', trans('firstname'), 'required|trim|alpha_numeric_spaces');
            // $this->form_validation->set_rules('lastname', trans('lastname'), 'required|trim|alpha_numeric_spaces');
            $this->form_validation->set_rules('country', trans('country'), 'required|numeric');
            $this->form_validation->set_rules('city', trans('city'), 'required|numeric');
            $this->form_validation->set_rules('langs[]', trans('langs'), 'required');
            $this->form_validation->set_rules('skills[]', trans('skills'), 'required');
            $this->form_validation->set_rules('gender', trans('gender'), 'required');
            $this->form_validation->set_rules('mobile', trans('mobile'), 'required|numeric');
            if ($this->form_validation->run() == true) {
                //echo "<pre>"; print_r($_POST); exit;
                //$firstname 	= $this->input->post('firstname');
                //$lastname 	= $this->input->post('lastname');
                $country = $this->input->post('country');
                $city = $this->input->post('city');
                $langs = $this->input->post('langs');
                $skills = $this->input->post('skills');
                $gender = $this->input->post('gender');
                $mobile = $this->input->post('mobile');
                // $email 		= $this->input->post('email');
                //  $password   = $this->input->post('password');
                $created = $this->main_model->complete_account($user_id, $country, $city, $langs, $skills, $gender, $mobile);
                // print_r($created); exit $email, $password, $firstname, $lastname,
                if ($created) {
                    $this->session->set_userdata('re', 1);

                    $this->messages->success(trans('user_com'));

                } else {
                    $this->messages->error(trans('user_not_com'));
                }
            } else {
                //echo validation_errors(); exit;
            }
        }
        $data['user'] = $user = $this->db->get_where('user', array('id' => $user_id))->row();
        $data['userlangs'] = $this->db->get_where('user_langs', array('user_id' => $user_id))->result_array();
        $data['userskills'] = $this->db->get_where('user_skills', array('user_id' => $user_id))->result_array();
        $sql = "select * from  categories LIMIT 3";
        $cats = $this->db->query($sql);

        $sql = "SELECT * 
				  FROM country							 
				 ORDER BY country_english_name";
        $query = $this->db->query($sql);
		
        $sql = "SELECT * 
				  FROM skills";
        $skills = $this->db->query($sql);
        $langs = $this->db->query("select * from  lang");
        $data['cats'] = $cats;
        $data['langs'] = $langs;
        $data['skills'] = $skills;
        $data['countrys'] = $query;
        $this->load->view('complete_account_view', $data);
    }*/

    public function reregister()
    {
		$id = $this->session->userdata('old_user');
		if(!$id){
			redirect(base_url());
		}
		
        if ($_POST) {
            //$this->form_validation->set_rules('email', trans('email'), 'required|valid_email|strtolower|trim');
            $this->form_validation->set_rules('password', trans('password'), 'required');
            $this->form_validation->set_rules('g-recaptcha-response', trans('captcha'), 'required|callback_captcha_check');
            $this->form_validation->set_rules('firstname', trans('firstname'), 'required|trim|alpha_numeric_spaces');
            $this->form_validation->set_rules('lastname', trans('lastname'), 'required|trim|alpha_numeric_spaces');
		    $this->form_validation->set_rules('gender', trans('gender'), 'required');
			
            if ($this->form_validation->run() == true) {
            	if ($this->main_model->check_old($id)) {
					$this->messages->success($this->lang->line('reg_updated'));
					redirect(base_url()."done");
				}
                //echo "<pre>"; print_r($_POST); exit;
                $firstname = $this->input->post('firstname');
                $lastname = $this->input->post('lastname');
                $email = $this->input->post('email');
                $password = $this->input->post('password');
				$gender 	= $this->input->post('gender');
                $created = $this->main_model->oldregister($id, $password, $firstname, $lastname ,$gender);
                if ($created) {
                    $this->messages->success($this->lang->line('reg_updated'));
					redirect(base_url()."done");
                } else {
                    $this->messages->error($this->lang->line('not_reg_updated'));
                }
			}       
		}

        $data['user'] = $user = $this->db->get_where('user', array('id' => $id))->row();
        $sql = "SELECT * FROM categories LIMIT 3";
        $cats = $this->db->query($sql);

        $sql = "SELECT * FROM country ORDER BY country_english_name";
        $query = $this->db->query($sql);

        $sql = "SELECT * FROM skills";
        $skills = $this->db->query($sql);
		
		$sql = "SELECT * FROM  lang";
        $langs = $this->db->query($sql);
        $data['cats'] = $cats;
        $data['id'] = $id;

        $data['langs'] = $langs;
        $data['skills'] = $skills;
        $data['countrys'] = $query;
		$data['site_key'] = $this->config->item('site_key');
        $this->load->view('reregister', $data);
    }

    public function verify_account($code = '')
    {
    	$this->load->library('JWT');
        $CONSUMER_SECRET = $this->config->item('token_secret');
        $salt = $this->jwt->decode($code, $CONSUMER_SECRET);
        $user_id = $salt->user_id;
        $token = $salt->salt;
        if (!is_numeric($user_id)) {
            $this->messages->error(trans('verify_error'));
            redirect(base_url());
        }

        $verified = $this->main_model->verify_account($user_id, $token);
        if ($this->session->userdata('ip_address') == '90.153.153.253') {
            echo  $verified; exit;
        }
        if ($verified) {
            $this->session->set_userdata('v_id',$user_id );
            $this->session->set_userdata('user_id',$user_id );
			$this->session->set_userdata('not_completed', 1);
			$this->messages->success(trans('verify_complet'));

        	redirect(base_url() . "done_virfed");
        } else {
            $this->messages->error(trans('wrong_token_30'));
        }
        redirect(base_url() . "my_profile");
    }

    public function get_city($id = '')
    {
		get_ajax_request();
		
        $city = $this->db->get_where('city', array('country_id' => $id))->result();
        //$res = '<option value="0"></option>'; //selecting an empty choice bug #PE$$
        $res = '';
        foreach ($city as $row) {
            $res .= "<option value='$row->city_id'>$row->city_english_name</option>";
        }
        echo $res;
    }

    function check_user($str = '')
    {
        if ($str) {
        	$sql = "SELECT * FROM user WHERE email='$str'";
            if ($this->db->query($sql)->num_rows()) {
                $this->form_validation->set_message('check_user', "%s " . $this->lang->line('unique_validation'));
                return FALSE;
            }
            return TRUE;
        }
    }


    public function logout($value = '')
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function categories_main($page = 1)
    {
    	$id = 2;
      $page -= 1;
			// $res= $this->main_model->home_data();
			$id = $this->input->get('id') ? $this->input->get('id') : $id;
      $country_id = $this->input->get('country_id');
      $cat_id = $this->input->get('cat_id');
      $search = $this->input->get('search');
      $filter = $this->input->get('filter');
      $results = $this->main_model->categories_main($id, $page, $country_id, $cat_id, $search, $filter);
      $num_rows = $results[1];
      if ($num_rows) {
          $data['results'] = $results[0]->result();
          $data['num_rows'] = $num_rows;
      } else {
          $data['results'] = '';
          $data['title'] = $this->lang->line('no_emp');
          $data['body'] = $this->lang->line('no_emp_ex');
          $data['num_rows'] = 0;
      }
		
		$sql = "SELECT * FROM  country ORDER BY country_english_name";
        $query = $this->db->query($sql);
		
		$sql = "SELECT * FROM  categories LIMIT 3";
        $cats = $this->db->query($sql);
		
		$sql = "SELECT * FROM  categories WHERE parent_category_id= $id";
        $subcats = $this->db->query($sql);
		
		$sql = "SELECT * FROM lang";
        $langs = $this->db->query($sql);
		
		$sql = "SELECT * FROM categories WHERE category_id = $id";
        $tiltle = $this->db->query($sql)->row()->arabic_name;
		$job_types = $this->db->get('job_type');
        $url_ext = '';
        if ($this->input->get()) { 
            $url_ext = "?id=$id&country_id=$country_id&cat_id=$cat_id&search=$search";
        }
        $data['url_ext'] = $url_ext;
        $data['page'] = $page + 1;
        //echo $page; exit;
        $data['tiltle'] = $tiltle;
        //$data['all']      =	$all;
        //$data['jobs'] = $res['jobs'];
		// $data['jobSkills'] =$res['jobSkills'];
        $data['cats'] = $cats;
        $data['sub'] = $subcats;
        $data['countrys'] = $query;
        $data['id'] = $id;
        $data['job_types'] = $job_types->result();
		/*echo "<pre>";
        print_r($job_types); exit;*/
      //  $this->load->view('categories_main', $data);
        $this->load->view('jobs/jobs', $data);
    }
/*-------------------------------#PE$$ Section Start---------------------------------*/

	//New Homepage #PE$$
	public function indexx(){
		$data = $this->main_model->home_data();
		$data['selected'] = 'home';
		$this->load->view('newIndex/index', $data);
	}

	//public new profile #PE$$
	public function profile($user_id = ''){
		$data = $this->main_model->get_profile_data($user_id);
		$this->views(1,$user_id);
		$this->load->view('newIndex/user-profile', $data);
	}

	public function show_service($service_id){
		$sql = "SELECT * FROM services WHERE serv_id = $service_id";
		
		$data['service'] = $this->db->query($sql)->row();
		$data['ser_id']  =  $service_id;
		$this->load->view('newIndex/service-profile',$data);
	}

	public function help_request(){
		$this->load->view('newIndex/help-request');
	}
	public function hub_form(){
		$this->load->view('newIndex/hub-form');
	}
/*-------------------------------#PE$$ Section End----------------------------------*/
    
}

