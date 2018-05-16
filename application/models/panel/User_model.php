<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
     
    public function __construct() 
    {
        parent::__construct();
    }
	
    public function my_dubarahs($user_id ,$page=0)
    {

        $where = ' ';
       
        $where .= $user_id ? " AND a.user_id=$user_id AND a.status IN (1, 2) " : "AND a.status=1";
		
        $sql     	= " SELECT c.arabic_name, a.title,a.employer,c.english_name, a.created_at, a.title, a.advertisement_id , 
    				  			  a.country, can.country_english_name , a.img, a.job_type,a.address,a.expiration
				  				  FROM categories c, categories fc, advertisement a, country can
								  WHERE	
								  c.category_id = fc.category_id
								  and
								  a.category_id = c.category_id
				  				  AND can.country_id = a.country
				 				  
				 				  $where 
				 				  ORDER BY a.advertisement_id DESC";
        $num_rows = $this->db->query($sql)->num_rows();
		
        if ($num_rows > 8) {
            $first = $page * 8;

            $sql .= " LIMIT $first, 8";
        }

        return array($this->db->query($sql), $num_rows);
    }
  
		
    public function my_applicants($ad_id ,$page=0)
    {

        $where = ' ';
       
        $where .= $ad_id ? " AND ua.advertisement_id=$ad_id" : '';
		
        $sql   = " SELECT  *  FROM users_apply ua , user u
        			WHERE    	ua.user_id = u.id
        			$where
	 			   ORDER BY  u.id DESC";
        $num_rows = $this->db->query($sql)->num_rows();
		
        if ($num_rows > 8) {
            $first = $page * 8;

            $sql .= " LIMIT $first, 8";
        }

        return array($this->db->query($sql), $num_rows);
    }

    public function add_dubarah($sub_id, $title, $employer , $skills ,$description , $gender ,$country, $city,  $address ,$job_type, $expiration,$email , $phone ,$user_id, $link='')
    {
		$fs_images 	 = array();
		$i			 = 0;
		$logos[]	 = array();
		$errors		 = array();
		$ext		 = array();
		$config['upload_path']   = 'uploads/jobslogo/';
		$path				     = $config['upload_path'];
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] 	 = '1000';
		$config['max_width'] 	 = '5000';
		$config['max_height'] 	 = '5000';
		$config['overwrite'] 	 = FALSE;
		$config['encrypt_name'] = TRUE; 
		$this->load->library('upload');		
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
					//$ext[$config['file_name']] = $upload_data['file_ext'];
		            //echo $fieldname . $upload_data['file_name'].'gfdg<br>';
		            $fs_images[$i] = $upload_data['file_name'];
					$i++;
				}
			}	
		}
		//print_r($fs_images); echo "<br>"; print_r($errors);
		//exit;
		$err = 0;
		if ($errors) {
			$err = $errors[0];
			return array(0, $err);
			
		}
		
		$ex = time()+(7*24*60*60*$expiration) ;
		
		
		$this->db->trans_start();
		
		$insert = array (
							'img' 			=> isset($fs_images[0]) ? $fs_images[0] : '',
	                        'category_id'   => $sub_id,
	                        'title'     	=> $title,
	                        'employer'      => $employer,
	                        'country'     	=> $country,
	                        'city'    		=> $city,                       
				            'address'		=> $address,   
				           	'user_id'       => $user_id,
					   		'email'			=> $email,
					   		'phone'         => $phone,						   		
							'job_type'      => $job_type,
					   		'expiration'    => $ex,
					 		'description'   => $description,
					   		'gender'    	=> $gender,
					   		'link'			=> $link
						);
		$this->db->insert('advertisement', $insert);
		$id = $this->db->insert_id();
		
		foreach ($skills as $skill) {
			$insert = array (
								'adver_id' => $id,
								'skill_id' => $skill
							);
								
			$this->db->insert('adver_skills', $insert);
		}
		   	
		$this->db->trans_complete();
		return array($this->db->trans_status(), $err);
	}

	public function edit_dubarah($ad_id, $sub_id, $title, $employer , $skills ,$description , $gender ,$country, $city,  $address ,$job_type, $expiration,$email , $phone ,$user_id, $link)
    {
		$fs_images 	 = array();
		$i			 = 0;
		$logos[]	 = array();
		$errors		 = array();
		$ext		 = array();
		$config['upload_path']   = 'uploads/jobslogo/';
		$path				     = $config['upload_path'];
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] 	 = '1000';
		$config['max_width'] 	 = '5000';
		$config['max_height'] 	 = '5000';
		$config['overwrite'] 	 = FALSE;
		$config['encrypt_name'] = TRUE; 
		$this->load->library('upload');		
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
					//$ext[$config['file_name']] = $upload_data['file_ext'];
		            //echo $fieldname . $upload_data['file_name'].'gfdg<br>';
		            $fs_images[$i] = $upload_data['file_name'];
					$i++;
				}
			}	
		}
		//print_r($fs_images); echo "<br>"; print_r($errors);
		//exit;
		$err = 0;
		if ($errors) {
			$err = $errors[0];
		}
		$this->db->trans_start();
		
		$insert = array (
							'img' 			=> isset($fs_images[0]) ? $fs_images[0] : '',
	                        'category_id'   => $sub_id,
	                        'title'     	=> $title,
	                        'employer'      => $employer,
	                        'country'     	=> $country,
	                        'city'    		=> $city,                       
				            'address'		=> $address,   
				           	'user_id'       => $user_id,
					   		'email'			=> $email,
					   		'phone'         => $phone,						   		
							'job_type'      => $job_type,
					   		'expiration'    => $expiration,
					 		'description'   => $description,
					   		'gender'    	=> $gender,
					   		'link'			=> $link
						);
		$this->db->where('advertisement_id', $ad_id);
		$this->db->update('advertisement', $insert);
		$this->db->delete('adver_skills', array('adver_id' => $ad_id));
		//echo "<pre>";
		//print_r($skills); exit;
		foreach ($skills as $skill) {
			$insert = array (
								'adver_id' => $ad_id,
								'skill_id' => $skill
							);
								
			$this->db->insert('adver_skills', $insert);
		}
		   	
		$this->db->trans_complete();
		return array($this->db->trans_status(), $err);
	}
	
	public function resume_mo($user_id, $ad_id)
	{
		$sql     	= "SELECT * FROM user u ,users_apply ua , city c , country co
		 				WHERE  u.id = $user_id
		 				AND    ua.advertisement_id = $ad_id
		 				AND    ua.user_id          = $user_id
		 				AND    u.city 			   = c.city_id
		 				AND    c.country_id        = co.country_id
		 				ORDER BY  u.id";
        $num_rows = $this->db->query($sql)->num_rows();
		
       
        return $this->db->query($sql);		
	}
	
	public function complete_account($user_id, $firstname, $lastname, $country, $city, $langs, $skills, $gender, $phone, $address, $job, $about)
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
            'username'          => $firstname,
            'lastname'			=> $lastname,
            'mobile'            => $phone,
            'city'				=> $city,
            'gender'			=> $gender,
            'country'       	=> $country,
            'place'       	    => $address,
            'job'				=> $job,
            'about'				=> $about

            //'verify_token'	=> $verify_salt,
            //'verify_token_date' => time()
			
        );
        //echo "<pre>"; print_r($insert); exit;	
        //echo $user_id; exit;
        $this->db->where('id', $user_id);
        $this->db->update('user', $update);
		
  		$this->db->query("DELETE FROM user_skills WHERE user_id=$user_id");
        $this->db->delete('user_langs', array('user_id' => $user_id));
	  //print_r($langs);
	  //exit;
	 // $i = 0;
	    foreach ($langs as $lang) {
            $insert = array (
				                'user_id' => $user_id,
				                'lang_id' => $lang
           					);
            $this->db->insert('user_langs', $insert);
        }
		//$i = 0;
		//echo "DELETE FROM user_skills WHERE user_id=$user_id"; exit;
		//echo "<pre>";
		//print_r($skills); exit;
        foreach ($skills as $skill) {
            $insert = array (
                'user_id'  => $user_id,
                'skill_id' => $skill
            );
            $this->db->insert('user_skills', $insert);
        }
 			
        $this->db->trans_complete();
		$this->session->set_userdata('not_completed', 0);
        $res = $this->db->trans_status();
		
        return $res;
    }
		
		
	public function up_img($id)
    {
    	//exit;
		$fs_images 	 = array();
		$i			 = 0;
		$logos[]	 = array();
		$errors		 = array();
		$ext		 = array();
		$config['upload_path']   = 'uploads/users/';
		$path				     = $config['upload_path'];
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] 	 = '4096';
		$config['max_width'] 	 = '5000';
		$config['max_height'] 	 = '5000';
		$config['overwrite'] 	 = FALSE;
		$config['encrypt_name'] = TRUE; 
		$this->load->library('upload');		
		foreach ($_FILES as $fieldname => $fileObject)  //fieldname is the form field name
		{
		    if (!empty($fileObject['name']))
		    {
		        $this->upload->initialize($config);
				
		        if (!$this->upload->do_upload($fieldname))
		        {
		            $error = $this->upload->display_errors();
		            $errors[] = $error;
					return array(0, $error);
		        } else {
		        	
		        	$upload_data     = $this->upload->data();
		            $fs_images[$i] = $upload_data['file_name'];
					//print_r($fs_images); return;
					$i++;
				}
			}	
		}
		//print_r($fs_images); echo "<br>"; print_r($errors);
		//exit;
		
		
		$this->db->trans_start();
		 if (isset($fs_images[0])) {
		$img =  array('photo' => $fs_images[0]);
	                        			
		$this->db->where('id', $id);
		$this->db->update('user', $img);	
		}
		$this->db->trans_complete();
		return array($this->db->trans_status(), 0);
	}
	
/*-------------------------------#PE$$ Section Start---------------------------------*/
 	//get private profile data #PE$$
	public function get_profile_data(){
		$user_id = user_id();
		$sql="SELECT username, lastname, photo, job, about FROM user 
			WHERE id = $user_id ";
		$data['user'] = $this->db->query($sql)->row();
		//if user doesn't exist
		if(!$data['user']){
			redirect(base_url().'home');
		}
		//private profile
		$data['profile']	= 1;
		//get recommendation
    $recom = recommend_ach(2, $user_id);
    $data['re_achs']  = $recom['achs'];
    $data['re_achs_d']  = array(
      'follow'  => $recom['follow'],
      'followers' => $recom['followers']
    );
		//get user place data
		$sql="SELECT d.country_english_name as country, e.city_english_name as city , country_arabic_name as nm  FROM user a, country d, city e 
			WHERE a.id = $user_id 
			AND a.country = d.country_id 
			AND a.city = e.city_id ";
		$data['place'] = $this->db->query($sql)->num_rows() ? $this->db->query($sql)->row() : '' ;
		
		   $sql = "SELECT * FROM  session_log  
      WHERE type_id = $user_id 
      AND type = 1";
      $data['views'] = $this->db->query($sql)->num_rows();
		//get user skills
		$sql = "SELECT a.skill_name FROM skills a, user_skills b  
		WHERE b.user_id = $user_id 
		AND a.skill_id = b.skill_id";
		$data['skills'] = $this->db->query($sql)->result();

		$data['followers']   = '';
   		 $data['follow']      = '';

		//check if user have hero citizen service #PE$$
		$sql="SELECT * FROM user_services WHERE user_id = $user_id AND serv_id = 1";
		if($this->db->query($sql)->num_rows()){
			$sql = "SELECT hero_id, user_id, verified, hero, became_hero_date FROM hero_citizen 
			WHERE user_id = $user_id ";
			$data['hero'] = $this->db->query($sql)->row();
			$hero_id = $data['hero']->hero_id;

			//get user achievements
			$sql = "SELECT  a.ach_id, a.hero_id, a.ach_title, d.country_arabic_name  , a.ach_logo, a.ach_date, a.ach_exp, a.website, a.facebook, a.twitter, a.linkedin, a.instagram, a.youtube, a.verified, a.active, b.type_name as achType, d.country_english_name as country, e.city_english_name as city
			FROM achievements a, ach_type b, country d, city e
			WHERE hero_id = $hero_id 
			AND a.ach_type = b.ach_typeid 
			AND a.ach_country = d.country_id 
			AND a.ach_city = e.city_id 
			ORDER BY a.active DESC, a.ach_id DESC";
      $data['achs'] = $this->db->query($sql)->result();
	  
	
	  $data['have_bus']      = 0;
	  $sql = " SELECT * FROM businesses b where b.user_id = $user_id;";
	  
	 $bus =  $this->db->query($sql);
	 $have_bus = $bus->num_rows();
	 if($have_bus > 0){
	 			
	 	  $data['have_bus']      = 1;
	 	   $data['bus']      = $bus->result();
	 	  	
	 	
	 }
      //count followers
      $sql = "SELECT id FROM hero_followers 
      WHERE hero_id = $hero_id";
      $data['followers'][$hero_id] = $this->db->query($sql)->num_rows();
      
      //checking if the heros followed himself #PE$$
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
      	//check if like or dislike
        $sql = "SELECT id FROM ach_likes WHERE ach_id = $ach->ach_id AND by_user_id = $id ";
        $data['ach_data'][$ach->ach_id]['ck_like'] = $this->db->query($sql)->row();
        $sql = "SELECT id FROM ach_dislikes WHERE ach_id = $ach->ach_id AND by_user_id = $id ";
        $data['ach_data'][$ach->ach_id]['ck_dislike'] = $this->db->query($sql)->row();
				//get total likes
      	$data['t_likes'] +=$data['ach_data'][$ach->ach_id]['likes'];
      	$data['t_dislikes'] +=$data['ach_data'][$ach->ach_id]['dislikes'];
      }
    }else{
    	//if user don't have hero citizen service #PE$$
    	$data['hero'] = '';
    	$data['achs'] = '';
    	$data['ach_data'] ='';
    	$data['t_likes']='';
      $data['t_dislikes']='';
    }
		return $data;
	}
	//validate profile settings data
	public function validate_profile_data(){
		$this->form_validation->set_rules('firstname', trans('firstname'), 
			'required|trim|alpha_numeric_spaces');
    $this->form_validation->set_rules('lastname', trans('lastname'), 
    	'required|trim|alpha_numeric_spaces');
    $this->form_validation->set_rules('country', trans('country'), 'required|numeric');
    $this->form_validation->set_rules('city', trans('city'), 'required|numeric');
    $this->form_validation->set_rules('langs[]', trans('languages'), 'required');
    $this->form_validation->set_rules('skills[]', trans('skills'), 'required');
    $this->form_validation->set_rules('gender', trans('gender'), 'required');
    $this->form_validation->set_rules('job', trans('professional'), 
    	'required|trim|alpha_numeric_spaces');
    $this->form_validation->set_rules('about', trans('about'), 'required|trim|alpha_numeric_spaces');
		$this->form_validation->set_rules('phone', trans('phone'), 
			'required|numeric');
		return $this->form_validation->run();
	}
	//modify profile data
	public function modify_profile(){
		$firstname 	= $this->input->post('firstname');
    $lastname 	= $this->input->post('lastname');
    $country 		= $this->input->post('country');
    $city 			= $this->input->post('city');
    $langs			= $this->input->post('langs');
    $skills 		= $this->input->post('skills');
    $gender 		= $this->input->post('gender');
    $job 				= $this->input->post('job');
    $about 			= $this->input->post('about');
    $phone	 		= $this->input->post('phone');
    $address 		= $this->input->post('address');
    //call to the old model function #PE$$
    $res = $this->complete_account(user_id(), $firstname, $lastname ,$country, $city, $langs, $skills, $gender, $phone, $address, $job, $about);
    return $res;
	}
	//get profile settings data
	public function get_profile_setting_data(){
		$user_id = user_id();
		//get user data
		$data['user'] = $this->db->get_where('user', array('id' => $user_id))->row();

		//get user languages
		$userlangs = $this->db->get_where('user_langs', array('user_id' => $user_id))->result();
		$lans = array();
		foreach ($userlangs as $lan) {
			$lans[] = $lan->lang_id;
		}
		$data['userlangs'] = $lans;

		//get user skills
		$userskills = $this->db->get_where('user_skills', array('user_id' => $user_id))->result();
		$skill = array();
		foreach ($userskills as $lan) {
			$skill[] = $lan->skill_id;
		}
		$data['userskills'] = $skill;

		//get user place
		$sql = "select s.country_english_name , c.city_english_name, c.city_id, c.country_id   from  user us , country s , city c where us.id = $user_id and us.city = c.city_id and c.country_id=s.country_id";
		$data['place'] = $this->db->query($sql)->row();

		//get three categories 
		$sql = "select * from  categories LIMIT 3";
    $data['cats'] = $this->db->query($sql);

    //get countries
    $this->db->order_by('country_english_name');
    $data['countries'] = $this->db->get('country');

    //get skills
    $data['skills'] = $this->db->get('skills');

    //get langs
    $data['langs'] = $this->db->get('lang');

    return $data;
	}
	
/*-------------------------------#PE$$ Section End----------------------------------*/

}
   

