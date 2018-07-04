<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Jobs extends CI_Controller{
	function __construct(){
		parent::__construct();
		check_lang();
		//need_login();

		$this->session->set_userdata('this_url', current_url());
    $this->load->model('JobsModel', 'model');
	}

	public function  getBusinessMainCategories()
    {
        return $this->BusinessModel->getMainCategories();
    }
    public function get_jobs_cities()
    {			$data = '';
    			if($this->input->post('val')){
    				$name = $this->input->post('val');
       				$data = $this->model->get_jobs_cities($name );
				}
       return $data ; 
    }

    public function get_jobs_findedcategory()
    {
    	$data = '';
    			if($this->input->post('val')){
    				$name = $this->input->post('val');
					
				
       				$data = $this->model->findQuerey($name );
				}
    	
         return $data;
    }
   
   public function job_view($value='')
   {
       
   }
   
     public function jobs($page = 1)
    {
    	$id = 2;
      $page -= 1;
			// $res= $this->main_model->home_data();
			$id = $this->input->get('id') ? $this->input->get('id') : $id;
      $country_id = $this->input->get('country_id');
      $cat_id = $this->input->get('cat_id');
      $search = $this->input->get('search');
      $filter = $this->input->get('filter');
      $results = $this->model->jobs_query($id, $page, $country_id, $cat_id, $search, $filter);
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

                $created = $this->model->apply_job($firstname, $lastname , $massage, $skills , $job_id, $user_id);
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
		
		$sql = "SELECT tp.type_name , a.link , tp.type_name_ar	, a.title, a.user_id, a.employer, a.created_at, a.description, a.job_style, a.gender, a.verified , 
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
		 $data['selected'] = 'job-view';
        $data['job_id'] = $job_id;
        $data['skils_num'] = $skils_num;
        $data['skills'] = $skils;
        $data['job'] = $dubarah->row();
		// echo "<pre>";
		// print_r($dubarah->result());
		// exit;
        $data['cats'] = $cats;
        $this->load->view('jobs/job_view', $data);
    }
    
    
	public function check_completed($value='')
	{
		if ($this->session->userdata('not_completed')) {
			$this->messages->error(trans('complete_profile'));
			redirect(base_url()."my_profile");  
		}
	}
  
    public function add_job()
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
	            $created = $this->model->add_job( $sub_id, $title, $employer , $skills ,$description , $gender ,$country, $city,  $address ,$job_type, $expiration,$email , $phone ,$user_id, $link);
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
		$data['selected'] = 'add-job';
        $data['cats'] 	  =	$cats;
		$data['countrys'] =	$query;
        $this->load->view('jobs/add_job',$data);
    }

	public function edit_job($ad_id='')
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
			//$this->form_validation->set_rules('expiration', trans('expiration'), 'required|numeric');
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
			//	$expiration 	= $this->input->post('expiration');
				$email 			= $this->input->post('email');
				$phone 			= $this->input->post('phone');
				$link			= $this->input->post('link');
				$user_id	    = $this->session->userdata('user_id');
				
	            $created = $this->model->edit_job($ad_id, $sub_id, $title, $employer , $skills ,$description , $gender ,$country, $city,  $address ,$job_type,$email , $phone ,$user_id, $link);
	            // print_r($created); exit
	            if ($created[0]) {
	            	$created[1];
					$this->session->set_userdata('re', 1);
					$this->messages->success(trans('edit_succ_dubarah'));
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
        $this->load->view('jobs/edit_job',$data);
	}

	public function my_applicants($ad_id , $page = 1)
	{	
		$page -= 1;
        $user_id = $this->session->userdata('user_id');
		$user	 = $this->db->get_where('advertisement' ,array('advertisement_id' => $ad_id ,'user_id' =>$user_id ))->num_rows();
		if(!$user){
			redirect(base_url());
		}
		
        $results = $this->model->my_applicants($ad_id, $page);
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
				$res_array[$i]['photo']   = $row->photo;
				
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
		$data['selected'] = 'edit';
		$this->load->view('jobs/job_applicants', $data);
		
	}	

	function unpublish_job($ad_id)
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

    function delete_job($ad_id)
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
	
	public function my_jobs($page = 1)
	{
        		
		
		if ($page<1)
			{ redirect(base_url().'my_jobs/1/');}
		$page -= 1;	
        $user_id = $this->session->userdata('user_id');
        $results = $this->model->my_jobs( $user_id, $page);
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
		$data['selected']= 'edit';
		$this->load->view('jobs/my_jobs', $data);
		
	}		
	
	public function resume($user_hash='')
	{
		
		$this->load->library('JWT');
        $CONSUMER_SECRET = $this->config->item('token_secret');
        $salt 	 = $this->jwt->decode($user_hash, $CONSUMER_SECRET);
        $user_id = $salt->user_id;
		$ad_id   = $salt->ad_id;
		$resume  = $this->model->resume_mo($user_id, $ad_id)->row();
		$data['user_info'] = $resume;
		$data['selected'] = 'edit';
		$this->load->view('jobs/resume',$data);
	}
	
	public function download($id)
	{
		$this->load->helper('download');
		$row = $this->db->get_where('users_apply',array	('a_id' => $id))->row();
		$data = file_get_contents('uploads/cv/'.$row->cv);
		$name = $row->cv;
		force_download($name, $data);	
	}			
	

	
   

    
    ///=================== Search  ============

   public function business_profile($id)
    {
     $data = $this->BusinessModel->profile_data(13);

	 
     $this->load->view('business/profile' ,$data);   
    }
 
  
	
    public function businesses_filter()
   {
    	
		
        $mainCats = $this->getBusinessMainCategories();
       // $ctyId = $this->input->get('city');
        $res=$this->check_filter_inputs($this->input);
        $businesses = $this->BusinessModel->getAllfilterdData($res['fltr'],$res['srt']);
        if( ! isset($res['fltr']['cityNear']))
            $ctyId = 0;
        else
             $ctyId = $res['fltr']['cityNear'];
        $filters = $this->BusinessModel->getfilters($ctyId);
        $city = $this->BusinessModel->getCitySearched($ctyId);
        $cat ="";
        if( isset( $res['fltr']['categoryFind'] ) ) 
        $cat =  $res['fltr']['categoryFind'] ;
        
		//die($cat);
		
        $data = array( "filters" => $filters ,
          'catg_search'=> $cat ,  'city_search'=> $city,
          "businesses" => $businesses , 'mainCats' => $mainCats);
        $this->load->view('business/filters-list' ,$data );
    }
}