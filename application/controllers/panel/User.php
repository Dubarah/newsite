<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {

        //
        parent::__construct();
        need_login();
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
            $browser = $this->agent->browser().' '.$this->agent->version();
            $insert = array(

                'ip_address'   => $ip_address,
                'device'       => $device,
                'os'           => $os,
                'browser'      => $browser,
                'start_time'   => time()
            );
            $this->db->insert('session_log', $insert);
        }

        if (!LANG()) {
            $this->session->set_userdata('lang', 'en');
        }
        if (LANG() == 'ar') {
        	$this->config->set_item('language', 'arabic');
            $this->lang->load('main', 'arabic');
        } else {
            $this->lang->load('main', 'english');
        }
        $this->load->model('panel/user_model','user_model');

    }
	
	public function check_completed($value='')
	{
		if ($this->session->userdata('not_completed')) {
			$this->messages->error(trans('complete_profile'));
			redirect(base_url()."my_profile");  
		}
	}

    public function add_dubarah()
    {
		//$this->check_completed();
		
		if ($_POST) {
				//echo "<pre>"; print_r($_POST); exit;
	        $this->form_validation->set_rules('sub_id', trans('subcategories'), 'required|numeric');
			$this->form_validation->set_rules('title', trans('title'), 'required');
			//$this->form_validation->set_rules('fs_image1', trans('img'), 'required');
			$this->form_validation->set_rules('employer', trans('employer'), 'required');
	       	$this->form_validation->set_rules('skills[]', trans('skills'), 'required|numeric');
		    $this->form_validation->set_rules('description', trans('description'), 'required');
			$this->form_validation->set_rules('country', trans('country'), 'required|numeric');
	        $this->form_validation->set_rules('city', trans('city'), 'required|numeric');
			$this->form_validation->set_rules('address', trans('address'), 'required');
			$this->form_validation->set_rules('job_type', trans('job_type'), 'required|numeric');
			//$this->form_validation->set_rules('job_style', trans('job_style'), 'required|numeric');
			$this->form_validation->set_rules('gender', trans('gender'), 'required|numeric');
			$this->form_validation->set_rules('expiration', trans('expiration'), 'required|numeric');
			$how=$this->input->post('how');
			if($how==1){
				$this->form_validation->set_rules('phone', trans('mobile'), 'required');
			} elseif ($how==2) {
				$this->form_validation->set_rules('email', trans('email'), 'required');	
			} elseif ($how==3){
				$this->form_validation->set_rules('phone', trans('phone'), 'required');
				$this->form_validation->set_rules('email', trans('email'), 'required');
			} elseif ($how == 4) {
				$this->form_validation->set_rules('link', (LANG() == 'en' ? 'Link' : 'الرابط'), 'required');
			}
			if ($this->form_validation->run() == true) {
				$sub_id		    = $this->input->post('sub_id');
				$title 		    = $this->input->post('title');
				$employer 	    = $this->input->post('employer');
				$skills 		= $this->input->post('skills[]');
				$description    = $this->input->post('description');
				//$job_style 		= $this->input->post('job_style');
				$country 	    = $this->input->post('country');
				$city 		    = $this->input->post('city');
				$address 		= $this->input->post('address');
				$job_type 		= $this->input->post('job_type');
				$gender 		= $this->input->post('gender');
				$expiration 	= $this->input->post('expiration');
				$email 			= $this->input->post('email');
				$phone 			= $this->input->post('phone');
				$phone 			= $this->input->post('phone');
				$user_id	    = $this->session->userdata('user_id');
				$link			= $this->input->post('link');
	            $created = $this->user_model->add_dubarah( $sub_id, $title, $employer , $skills ,$description , $gender ,$country, $city,  $address ,$job_type, $expiration,$email , $phone ,$user_id, $link);
	            // print_r($created); exit
	            if ($created[0]) {
	            	
					
					$this->messages->success(trans('succ_dubarah'));
				}
					elseif(!$created[0] && $created[1]) {
                    $this->messages->error($created[1]);
                } 
					
	             else {
	            	$created[1];
	                $this->messages->error(trans('err_dubarah'));
	            }
	        }
		}
		
		
		$job_type = $this->db->get('job_type')->result();
		$sub =	$this->db->get_where('categories', array('parent_category_id' => 2))->result();
        $sql = "SELECT * 
				  FROM skills";
        $skills  = $this->db->query($sql);
       	
       	$sql = "SELECT * 
				 FROM country							 
				 ORDER BY country_english_name";
        $query 	 = $this->db->query($sql);
        $cats = $this->db->query("select * 	from  categories LIMIT 3");
        $data['job_type'] = $job_type;
        $data['sub'] 	  = $sub;
        $data['errors']   = validation_errors();
        $data['skills']   =	$skills;
        $data['cats'] 	  =	$cats;
		$data['countrys'] =	$query;
        $this->load->view('panel/add_dubarah',$data);
    }

	public function my_dubarah($page = 1)
	{
        		
		
		if ($page<1)
			{ redirect(base_url().'my_dubarah/1/');}
		$page -= 1;	
        $user_id = $this->session->userdata('user_id');
        $results = $this->user_model->my_dubarahs( $user_id, $page);
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
		
   		 $data['user'] = $user = $this->db->get_where('user', array('id' => $user_id))->row();
		
        $data['page'] = $page + 1;
        //echo $page; exit;
        //$data['tiltle'] = $tiltle;
        //$data['all']      =	$all;
      
       // $data['id'] = $id;
      // $this->load->view('categories_main', $data);
		
		
		
		$data['title']= trans('my_dubarah');
		$data['selected']= 'my_dubarah';
		$this->load->view('my_dubarah', $data);
		
	}
	
	public function up_img()
	{
		$id = $this->session->userdata('user_id');
		if($_FILES)
		{
			$up = $this->user_model->up_img($id);
			if ($up[0]) {
				echo json_encode(array(1, 0));
				return ;
			} elseif(!$up[0] && $up[1]) {
				echo json_encode(array(0, $up[1]));
				return;
			} else {
				echo json_encode(array(0, 0));
				return;
			}
		} 
		echo 0;
	}
	
	function unpublish_dubarah($ad_id)
    {
        $user_id = $this->session->userdata('user_id');
        $dubarah = $this->db->get_where('advertisement', array('advertisement_id' => $ad_id, 'user_id' => $user_id));
        if (!$dubarah->num_rows()) {
            redirect(base_url());
        }
		$publish = $dubarah->row()->publish;
		if (!in_array($publish, array(1, 2))) {
			$this->messages->error(trans('dubarah_status_error'));
			redirect(base_url()."my_dubarah");
		}
        $this->db->where('ad_id', $ad_id); 
        $this->db->upadate('advertisement', array('status' => $publish == 1 ? 2 : 1));
        if ($this->db->affected_rows()) {
            $this->messages->success(trans('dubarah_status_edited'));
        } else {
            $this->messages->error(trans('dubarah_status_error'));
        }
		redirect(base_url()."my_dubarah");
    }

    function delete_dubarah($ad_id)
    {
        $user_id = $this->session->userdata('user_id');
        $dubarah = $this->db->get_where('advertisement', array('advertisement_id' => $ad_id, 'user_id' => $user_id));
        if (!$dubarah->num_rows()) {
            redirect(base_url());
        }
        $this->db->where('advertisement_id', $ad_id);
        $this->db->update('advertisement', array('status' => 3));
		if ($this->db->affected_rows()) {
            $this->messages->success(trans('dubarah_deleted'));
        } else {
            $this->messages->success(trans('dubarah_not_deleted'));
        }
		redirect(base_url()."my_dubarah");
    }
	
	public function edit_dubarah($ad_id='')
	{
		$user_id = $this->session->userdata('user_id');
        $dubarah = $this->db->get_where('advertisement', array('advertisement_id' => $ad_id, 'user_id' => $user_id));
        if (!$dubarah->num_rows()) {
            redirect(base_url());
        }
		$dubarah = $dubarah->row();
		
		if ($_POST) {	
	        $this->form_validation->set_rules('sub_id', trans('subcategories'), 'required|numeric');
			$this->form_validation->set_rules('title', trans('title'), 'required');
			//$this->form_validation->set_rules('fs_image1', trans('img'), 'required');
			$this->form_validation->set_rules('employer', trans('employer'), 'required');
	       	$this->form_validation->set_rules('skills[]', trans('skills'), 'required|numeric');
		    $this->form_validation->set_rules('description', trans('description'), 'required');
			$this->form_validation->set_rules('country', trans('country'), 'required|numeric');
	        $this->form_validation->set_rules('city', trans('city'), 'required|numeric');
			$this->form_validation->set_rules('address', trans('address'), 'required');
			$this->form_validation->set_rules('job_type', trans('job_type'), 'required|numeric');
			//$this->form_validation->set_rules('job_style', trans('job_style'), 'required|numeric');
			$this->form_validation->set_rules('gender', trans('gender'), 'required|numeric');
			$this->form_validation->set_rules('expiration', trans('expiration'), 'required|numeric');
			$how=$this->input->post('how');
			if($how==1){
				$this->form_validation->set_rules('phone', trans('mobile'), 'required');
				
			} elseif ($how==2) {
				$this->form_validation->set_rules('email', trans('email'), 'required');	
			} elseif ($how==3){
				
				$this->form_validation->set_rules('phone', trans('phone'), 'required');
				$this->form_validation->set_rules('email', trans('email'), 'required');
			} elseif ($how == 4) {
				$this->form_validation->set_rules('link', (LANG() == 'en' ? 'Link' : 'الرابط'), 'required');
			}
			if ($this->form_validation->run() == true) {
				$sub_id		    = $this->input->post('sub_id');
				$title 		    = $this->input->post('title');
				$employer 	    = $this->input->post('employer');
				$skills 		= $this->input->post('skills');
				$description    = $this->input->post('description');
				//$job_style 		= $this->input->post('job_style');
				$country 	    = $this->input->post('country');
				$city 		    = $this->input->post('city');
				$address 		= $this->input->post('address');
				$job_type 		= $this->input->post('job_type');
				$gender 		= $this->input->post('gender');
				$expiration 	= $this->input->post('expiration');
				$email 			= $this->input->post('email');
				$phone 			= $this->input->post('phone');
				$link			= $this->input->post('link');
				$user_id	    = $this->session->userdata('user_id');
				
	            $created = $this->user_model->edit_dubarah($ad_id, $sub_id, $title, $employer , $skills ,$description , $gender ,$country, $city,  $address ,$job_type, $expiration,$email , $phone ,$user_id, $link);
	            // print_r($created); exit
	            if ($created[0]) {
	            	$created[1];
					$this->session->set_userdata('re', 1);
					$this->messages->success(trans('succ_dubarah'));
	            } else {
	            	$created[1];
	                $this->messages->error(trans('err_dubarah'));
	            }
	        } else {
				echo validation_errors(); exit;
			}
		}
		
		$sub =	$this->db->get_where('categories', array('parent_category_id' => 2))->result();
        $sql = "SELECT * 
				  FROM skills";
		$job_type = $this->db->get('job_type')->result();
				  
        $skills  = $this->db->query($sql);
       	
       	$sql = "SELECT * 
				  FROM country							 
				 ORDER BY country_english_name";
        $query 	 = $this->db->query($sql);
        $cats = $this->db->query("select * 	from  categories LIMIT 3");
        $data['ad_id'] 	  = $ad_id;
        $data['sub'] 	  = $sub;
		$data['job_type'] = $job_type;
        $data['errors']   = validation_errors();
        $data['skills']   =	$skills;
        $data['cats'] 	  =	$cats;
		$data['countrys'] =	$query;
		$data['ad'] 	  = $dubarah;
		$data['cities']	  = $this->db->get_where('city', array('country_id' => $dubarah->country))->result();
		$ad_skills = $this->db->query("SELECT s.* FROM adver_skills ask, skills s WHERE s.skill_id = ask.skill_id AND ask.adver_id=$ad_id")->result();
		$skills_id = array();
		foreach ($ad_skills as $skill) {
			$skills_id[] = $skill->skill_id;
		}
		$data['ad_skills']	  = $skills_id;
		//echo "<pre>"; print_r($data['ad_skills']); exit;
        $this->load->view('panel/edit_dubarah',$data);
	}
	
	public function my_applicants($ad_id , $page = 1)
	{	
		$page -= 1;
        $user_id = $this->session->userdata('user_id');
		$user	 = $this->db->get_where('advertisement' ,array('advertisement_id' => $ad_id ,'user_id' =>$user_id ))->num_rows();
		if(!$user){
			redirect(base_url());
		}
		
        $results = $this->user_model->my_applicants($ad_id, $page);
        $num_rows = $results[1];
		
		
        if ($num_rows) {
        	$result = $results[0]->result();
			//echo '<pre>';
			//print_r($result);
			//exit;
			$res_array = array();
			$i = 0;
			foreach ($result as $row) {
				$jwt = $this->load->library('JWT');
				$token = array('user_id' => $row->id, 'ad_id' => $row->advertisement_id);
	            $CONSUMER_SECRET = $this->config->item('token_secret');
	            $token = $this->jwt->encode($token, $CONSUMER_SECRET);
				$res_array[$i]['hash_id']  = $token;
				$res_array[$i]['username'] = $row->username;
				$res_array[$i]['email']    = $row->email;
				$res_array[$i]['lastname'] = $row->lastname;
				$res_array[$i]['gender']   = $row->gender;
				
				$i++;
			}
            $data['results'] = $res_array;
			
			
            $data['num_rows'] = $num_rows;
        } else {
            $data['results'] = '';
            $data['title'] = $this->lang->line('no_emp');
            $data['body'] = $this->lang->line('no_emp_ex');
            $data['num_rows'] = 0;
        }
		
   
        $data['page'] = $page + 1;
        //echo $page; exit;
        //$data['tiltle'] = $tiltle;
        //$data['all']      =	$all;
      
       // $data['id'] = $id;
      // $this->load->view('categories_main', $data);
		
		
		$data['ad_id']   = $ad_id;
		$data['title']    = trans('my_applicants');
		$data['selected'] = 'my_applicants';
		$this->load->view('my_applicants', $data);
		
	}			
	
	public function resume($user_hash='')
	{
		
		$this->load->library('JWT');
        $CONSUMER_SECRET = $this->config->item('token_secret');
        $salt 	 = $this->jwt->decode($user_hash, $CONSUMER_SECRET);
        $user_id = $salt->user_id;
		$ad_id   = $salt->ad_id;
		$resume  = $this->user_model->resume_mo($user_id, $ad_id)->row();
		$data['user_info'] = $resume;
		
		$this->load->view('resume',$data);
	}
	
	public function download($id)
	{
		$this->load->helper('download');
		$row = $this->db->get_where('users_apply',array	('a_id' => $id))->row();
		$data = file_get_contents('uploads/cv/'.$row->cv);
		$name = $row->cv;
		force_download($name, $data);	
	}			
	
	
	public function sub($id='')
	
    { 	get_ajax_request();
        $city = $this->db->get_where('categories', array('parent_category_id' => 2))->result();
        $res = '<option value="0"></option>';
        foreach ($city as $row) {
            $res .= "<option value='$row->category_id'>$row->english_name</option>";
        }
        echo $res;
    }

	

	public function newrole($id='')
	{	get_ajax_request();
		$img = $this->db->get_where('categories', array('category_id' => $id))->row()->icon;
		$res='';	
        $res .= "<img src='http://dubarah.byethost12.com/site/ass/$img' alt='Images' class='img-responsive'>";
        echo $res;
	}

	//old profile function #PE$$
	// public function my_profile($value = '')
	// {
	// 	if (!$this->session->userdata('user_id')) {
 //            redirect(base_url());
 //        }

 //        $user_id = $this->session->userdata('user_id');

 //        if ($_POST) {
 //            $this->form_validation->set_rules('firstname', trans('firstname'), 'required|trim|alpha_numeric_spaces');
 //            $this->form_validation->set_rules('lastname', trans('lastname'), 'required|trim|alpha_numeric_spaces');
 //            $this->form_validation->set_rules('country', trans('country'), 'required|numeric');
 //            $this->form_validation->set_rules('city', trans('city'), 'required|numeric');
 //            $this->form_validation->set_rules('langs[]', trans('languages'), 'required');
 //            $this->form_validation->set_rules('skills[]', trans('skills'), 'required');
 //            $this->form_validation->set_rules('gender', trans('gender'), 'required');
 //            $this->form_validation->set_rules('job', trans('professional'), 'required|trim|alpha_numeric_spaces');
 //            $this->form_validation->set_rules('about', trans('about'), 'required|trim|alpha_numeric_spaces');
 //           $this->form_validation->set_rules('phone', trans('phone'), 'required|numeric');
 //            if ($this->form_validation->run() == true) {
 //                //echo "<pre>"; print_r($_POST); exit;
 //                $firstname 	= $this->input->post('firstname');
 //                $lastname 	= $this->input->post('lastname');
				
 //                $country 	= $this->input->post('country');
 //                $city 		= $this->input->post('city');
 //                $langs		= $this->input->post('langs');
 //                $skills 	= $this->input->post('skills');
 //                $gender 	= $this->input->post('gender');
 //                $job 		= $this->input->post('job');
 //                $about 		= $this->input->post('about');
 //                $phone	 	= $this->input->post('phone');
 //                $address 	= $this->input->post('address');
 //                //$password   = $this->input->post('password');
 //                $created = $this->user_model->complete_account($user_id,$firstname, $lastname ,$country, $city, $langs, $skills, $gender, $phone, $address, $job, $about);
 //                // print_r($created); exit $email, $password, $firstname, $lastname,
 //                if ($created) {
 //                    $this->messages->success(trans('user_com'));
 //                    redirect(base_url().'profile');
 //                } else {
 //                    $this->messages->error(trans('user_not_com'));
 //                }
 //            }
 //        }
        
 //        $data['user'] = $user = $this->db->get_where('user', array('id' => $user_id))->row();
	//     $sql = "select * from  user_langs ul , lang l where ul.user_id = $user_id and ul.lang_id = l.id";
	// 	//echo $sql; exit;
	//     $userlangs = $this->db->get_where('user_langs', array('user_id' => $user_id))->result();
	// 	$lans = array();
	// 	foreach ($userlangs as $lan) {
	// 		$lans[] = $lan->lang_id;
	// 	}
	// 	$data['userlangs'] = $lans;
	// 	//echo "<pre>";
	// 	//print_r($data['userlangs']); exit;
	// 	$sql = "select * from  user_skills us , skills s where us.user_id = $user_id and us.skill_id = s.skill_id";
	// 	//echo $sql; exit;
        
	// 	$userskills = $this->db->get_where('user_skills', array('user_id' => $user_id))->result();
	// 	$skill = array();
	// 	foreach ($userskills as $lan) {
	// 		$skill[] = $lan->skill_id;
	// 	}
	// 	$data['userskills'] = $skill;
	// 	$sql = "select s.country_english_name , c.city_english_name, c.city_id, c.country_id   from  user us , country s , city c where us.id = $user_id and us.city = c.city_id and c.country_id=s.country_id";
	// 	$data['place']    = $this->db->query($sql)->row(); 
	// 	//$sql = "select s.country_english_name , c.city_english_name, c.city_id, c.country_id   from  user us , country s , city c where us.id = $user_id and us.city = c.city_id and c.country_id=s.country_id";
	// 	//$data['city']    = $this->db->query($sql)->row()->city_english_name; 
		
	//     $sql = "select * from  categories LIMIT 3";
 //        $cats = $this->db->query($sql);

 //        $sql = "SELECT * 
	// 			  FROM country							 
	// 			 ORDER BY country_english_name";
 //        $query = $this->db->query($sql);
		
 //        $sql = "SELECT * 
	// 			  FROM skills";
 //        $skills = $this->db->query($sql);
      
	//   	$data['selected']= 'my_profile';
	//     $langs  = $this->db->query("select * from  lang");
 //        $data['cats']	  = $cats;
 //        $data['langs']    = $langs;
 //        $data['skills']   = $skills;
 //        $data['countrys'] = $query;
 //        // __($data);
 //        // die();    	   
 //        $this->load->view('dubarah4/profile_setting',$data);
	//     //$this->load->view('my_profile',$data);
 //     }
/*-------------------------------#PE$$ Section Start---------------------------------*/
	
	//private profile #PE$$
	public function profile(){
		$data = $this->user_model->get_profile_data();
		
		$this->load->view('newIndex/user-profile',$data);
	}

	//profile settings 
	public function profile_settings(){
		if(!is_logged()) {
      redirect(base_url());
    }
    if ($_POST){
    	$is_valid = $this->user_model->validate_profile_data();
    	if($is_valid){
    		//$inputs = $this->input->post();
    		$res = $this->user_model->modify_profile();
    		if ($res) {
          $this->messages->success(trans('user_com'));
          redirect(base_url().'profile');
        } else {
          $this->messages->error(trans('user_not_com'));
        }
    	}
    }
    $data = $this->user_model->get_profile_setting_data();
    $this->load->view('newIndex/profile_setting',$data);
  }

/*-------------------------------#PE$$ Section End----------------------------------*/
}

