<?php
/**
 * 
 */
class Content_mng extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		if (!$this->session->userdata('lang') || $this->session->userdata('lang') == 'ar') {
            $this->lang->load("user","arabic");
            $this->lang->load("sidebar","arabic");
            $this->lang->load("header","arabic");
			$this->lang->load("form_validation","arabic");
        } else {
            $this->lang->load("user","english");
            $this->lang->load("sidebar","english");
            $this->lang->load("header","english");
        } 
		need_login();
		if (!have_access(20, TRUE)) {
			//$this->logout();
		}
	}
	
	public function logout($value='')
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
	
	public function social_media()
	{
		have_access(21);
		if ($_POST) {
			foreach ($_POST as $key => $value) {
				$this->form_validation->set_rules($key, $key, 'required|trim|strtolower');
			}
			if ($this->form_validation->run()) {
				$this->db->trans_start();
				foreach ($_POST as $key => $value) {
					$id = substr($key, strpos($key, '_') + 1);
					$id = (int) $id;
					
					$update = array('social_media_link' => $value);
					$this->db->where('social_media_id', $id);
					$this->db->update('social_media', $update);
				}
				$this->db->trans_complete();
				if ($this->db->trans_status()) {
					$this->messages->success(trans('data_updated'));
				} else {
                    $this->messages->error(trans('data_not_updated'));
                }
			}
		}
		
		$data['results'] = $this->db->get('social_media');
		$data['title'] = trans('social_media');
		$data['selected'] = "social_media";
        $this->load->view('mng/cms/social_media_view', $data);
	}
	
	public function categories($page=1)
	{
		have_access(22);
		$page -= 1;
		//$lang = LANG() == 'en' ? 'english' : 'arabic';
		$sql = "SELECT ca.*, pc.arabic_name pc_arabic, pc.english_name pc_english 
				  FROM categories ca
				  LEFT JOIN categories pc ON ca.parent_category_id=pc.category_id
				 ORDER BY ca.category_id";
		$num_rows = $this->db->query($sql)->num_rows();
		if ($num_rows > 200) {
			$first = $page * 200;
	        $staff = $staff ? 1 : 0;
	        $sql .= " LIMIT $first, 200";
		}
		$data['website']  = $this->config->item('website');
		$data['page']	  = $page + 1;
		$data['main_cat'] = $this->db->get_where('categories', array('parent_category_id' => 0))->result();
		$data['num_rows'] = $num_rows;
		$data['results']  = $this->db->query($sql);
		$data['title'] 	  = trans('categories');
		$data['selected'] = "categories";
        $this->load->view('mng/categories_view', $data);
	}
	
	public function add_cat($value='')
	{
		if ($_POST) {
			$this->form_validation->set_rules('arabic_name', 'arabic_name', 'required|trim|strtolower');
			$this->form_validation->set_rules('english_name', 'english_name', 'required|trim|strtolower');
			$this->form_validation->set_rules('parent_cat', 'parent_cat', 'trim|strtolower');
			$this->form_validation->set_rules('arabic_description', 'arabic_description', 'required|trim|strtolower');
			$this->form_validation->set_rules('english_description', 'english_description', 'required|trim|strtolower');
			$this->form_validation->set_rules('is_staff', 'staff', 'trim|strtolower');
			if ($this->form_validation->run()) {
				$arabic_name 		 = $this->input->post('arabic_name');
				$english_name 		 = $this->input->post('english_name');
				$parent_cat 		 = $this->input->post('parent_cat');
				$arabic_description  = $this->input->post('arabic_description');
				$english_description = $this->input->post('english_description');
				$is_staff 			 = $this->input->post('is_staff');
				
				$insert = array (
									'arabic_name' 			=> $arabic_name,
									'english_name'			=> $english_name,
									'parent_category_id' 	=> $parent_cat,
									'arabic_description' 	=> $arabic_description,
									'english_description' 	=> $english_description,
									'is_staff' 				=> $is_staff ? 1 : 0
								);
				//echo "<pre>"; print_r($update); exit;
				
				$this->db->insert('categories', $insert);
				if ($this->db->insert_id()) {
					$this->messages->success(trans('data_updated'));
				} else {
                    $this->messages->error(trans('data_not_updated'));
                }
			}
		}
		redirect(base_url()."categories");
	}
	
	public function edit_cat($cat_id='')
	{
		
		if ($_POST) {
			$this->form_validation->set_rules('arabic_name', 'arabic_name', 'required|trim|strtolower');
			$this->form_validation->set_rules('english_name', 'english_name', 'required|trim|strtolower');
			$this->form_validation->set_rules('parent_cat', 'parent_cat', 'trim|strtolower');
			$this->form_validation->set_rules('arabic_description', 'arabic_description', 'required|trim|strtolower');
			$this->form_validation->set_rules('english_description', 'english_description', 'required|trim|strtolower');
			$this->form_validation->set_rules('is_staff', 'staff', 'trim|strtolower');
			if ($this->form_validation->run()) {
				$arabic_name 		 = $this->input->post('arabic_name');
				$english_name 		 = $this->input->post('english_name');
				$parent_cat 		 = $this->input->post('parent_cat');
				$arabic_description  = $this->input->post('arabic_description');
				$english_description = $this->input->post('english_description');
				$is_staff 			 = $this->input->post('is_staff');
				
				$update = array (
									'arabic_name' 			=> $arabic_name,
									'english_name'			=> $english_name,
									'parent_category_id' 	=> $parent_cat,
									'arabic_description' 	=> $arabic_description,
									'english_description' 	=> $english_description,
									'is_staff' 				=> $is_staff ? 1 : 0
								);
				//echo "<pre>"; print_r($update); exit;
				$this->db->where('category_id', $cat_id);
				$this->db->update('categories', $update);
				if ($this->db->affected_rows()) {
					$this->messages->success(trans('data_updated'));
				} else {
                    $this->messages->error(trans('data_not_updated'));
                }
			}
		}
		
		$data['cat_id']		= $cat_id; 
		$data['main_cat'] 	= $this->db->get_where('categories', array('parent_category_id' => 0))->result();
		$data['result'] 	= $this->db->get_where('categories', array('category_id' => $cat_id))->row();
		$data['title'] 		= trans('categories');
		$data['selected'] 	= "categories";
        $this->load->view('mng/edit_cat_view', $data);
	}
	
	public function fire_cat($cat_id='')
	{
		have_access(24);
		$this->db->query("DELETE FROM categories WHERE category_id=$cat_id");
		if ($this->db->affected_rows()) {
			$this->messages->success(trans('data_updated'));
		} else {
            $this->messages->error(trans('data_not_updated'));
        }
		redirect(base_url()."categories");
	}
	
	public function advertisments($page=1)
	{
		have_access(22);
		$page -= 1;
		//$lang = LANG() == 'en' ? 'english' : 'arabic';
		$cond = ' AND a.status = 0 ';
		if ($_GET) {
			/*all - id - comp - post*/
			$search_by = $this->input->get('search_by');
			$string = $this->input->get('search_str');
			
			switch ($search_by) {
				case 'all':
					$cond = '';
					break;
				case 'id':
					$cond = " AND a.advertisement_id='$string' ";
					break;
				case 'comp':
					$string = str_replace(' ', '%', $string);
					$cond = " AND a.employer LIKE '%$string%' ";
					break;	
				case 'post':
					$string = urldecode($string);
					$cond = " AND a.user_id = (SELECT id from user WHERE email='$string') ";
					break;	
				case 'pemding':
					$string = urldecode($string);
					$cond = " AND a.status = 0 ";
					break;	
				case 'Deleted':
					$string = urldecode($string);
					$cond = " AND a.status = 3 ";
					break;	
				default:
					
					break;
			}
		}
		$today  = date('Y-m-d'); 
		$sql = "SELECT ca.arabic_name parent_cat, pc.arabic_name pc_arabic, a.*, ci.city_english_name, co.country_english_name,
						DATEDIFF(FROM_UNIXTIME(a.expiration),'$today') diff, tp.type_name
				  FROM categories ca, categories pc, advertisement a, city ci, country co, job_type tp 
				 WHERE ca.category_id=a.category_id
				   AND pc.category_id=ca.parent_category_id
				   AND co.country_id=ci.country_id
				   AND tp.type_id = a.job_type
				   AND ci.city_id=a.city
				   $cond
				 ORDER BY status";
		//echo $sql; exit;
		$num_rows = $this->db->query($sql)->num_rows();
		//echo "<pre>";
		//print_r($this->db->query($sql)->row()); exit;
		if ($num_rows > 200) {
			$first = $page * 200;
	       // $staff = $staff ? 1 : 0;
	        $sql .= " LIMIT $first, 200";
		}
		$data['website']  = $this->config->item('website');
		$data['page']	  = $page + 1;
		$data['num_rows'] = $num_rows;
		$data['results']  = $this->db->query($sql);
		$data['title'] 	  = trans('advertisments');
		$data['selected'] = "advertisments";
        $this->load->view('mng/advs_view', $data);
	}
	// achievement manage #PE$$
	public function achievements($page=1){

		$page -= 1;
		$cond = ' AND a.status = 0 ';
		if ($_GET) {
			/*all - id - comp - post*/
			$search_by = $this->input->get('search_by');
			$string = $this->input->get('search_str');
			
			switch ($search_by) {
				case 'all':
					$cond = '';
					break;
			
				case 'comp':
					$string = str_replace(' ', '%', $string);
					$cond = " AND a.ach_title LIKE '%$string%' ";
					break;	
				case 'post':
					$string = urldecode($string);
					$cond = " AND a.user_id = (SELECT id from user WHERE email='$string') ";
					break;	
				case 'pemding':
					$string = urldecode($string);
					$cond = " AND a.status = 0 ";
					break;	
				case 'Deleted':
					$string = urldecode($string);
					$cond = " AND a.status = 3 ";
					break;	
					case 'verified':
					$string = urldecode($string);
					$cond = " AND a.verified = 1 ";
					break;	
				default:
					
					break;
			}
		}
		$today  = date('Y-m-d'); 
		$sql = "SELECT a.created_date, c.username, c.lastname, d.title, a.ach_title, b.country_english_name, a.status, a.ach_id, a.verified  
				FROM achievements a, country b, hero_citizen d, user c
				WHERE b.country_id=a.ach_country 
				AND d.hero_id = a.hero_id 
				AND c.id = d.user_id 
				$cond 
				ORDER BY a.status ";
		//echo $sql; exit;
		//var_dump($this->db->query($sql)->result()); die('he');
		$num_rows = $this->db->query($sql)->num_rows();
		//echo "<pre>";
		//print_r($this->db->query($sql)->row()); exit;
		if ($num_rows > 200) {
			$first = $page * 200;
	        $staff = $staff ? 1 : 0;
	        $sql .= " LIMIT $first, 200";
		}
		$data['website']  = $this->config->item('website');
		$data['page']	  = $page + 1;
		$data['num_rows'] = $num_rows;
		$data['results']  = $this->db->query($sql);
		$data['title'] 	  = trans('achievements');
		$data['selected'] = "achievements";
        $this->load->view('mng/ach_view', $data);
	}

	public function business($page=1)
	{
		have_access(22);
		$page -= 1;
		//$lang = LANG() == 'en' ? 'english' : 'arabic';
		$cond = ' AND a.status = 0 ';
		if ($_GET) {
			/*all - id - comp - post*/
			$search_by = $this->input->get('search_by');
			$string = $this->input->get('search_str');
			
			switch ($search_by) {
				case 'all':
					$cond = '';
					break;
			
				case 'comp':
					$string = str_replace(' ', '%', $string);
					$cond = " AND a.title LIKE '%$string%' ";
					break;	
				case 'post':
					$string = urldecode($string);
					$cond = " AND a.user_id = (SELECT id from user WHERE email='$string') ";
					break;	
				case 'pemding':
					$string = urldecode($string);
					$cond = " AND a.status = 0 ";
					break;	
				case 'Deleted':
					$string = urldecode($string);
					$cond = " AND a.status = 3 ";
					break;	
					case 'verified':
					$string = urldecode($string);
					$cond = " AND a.verified = 1 ";
					break;	
				default:
					
					break;
			}
		}
		$today  = date('Y-m-d'); 
		$sql = "SELECT ca.arabic_name parent_cat, pc.arabic_name pc_arabic, a.*, ci.city_english_name, co.country_english_name
				FROM categories ca, categories pc, business a, city ci, country co 
				 WHERE ca.category_id=a.field
				   AND pc.category_id=ca.parent_category_id
				   AND co.country_id=ci.country_id
				   AND ci.city_id=a.city
				   $cond
				 ORDER BY status";
		//echo $sql; exit;
		$num_rows = $this->db->query($sql)->num_rows();
		//echo "<pre>";
		//print_r($this->db->query($sql)->row()); exit;
		if ($num_rows > 200) {
			$first = $page * 200;
	        $staff = $staff ? 1 : 0;
	        $sql .= " LIMIT $first, 200";
		}
		$data['website']  = $this->config->item('website');
		$data['page']	  = $page + 1;
		$data['num_rows'] = $num_rows;
		$data['results']  = $this->db->query($sql);
		$data['title'] 	  = trans('business');
		$data['selected'] = "all";
        $this->load->view('mng/business_view', $data);
	}
	
	
	public function askus($page=1)
	{
		have_access(22);
		$page -= 1;
		//$lang = LANG() == 'en' ? 'english' : 'arabic';
		
		$today  = date('Y-m-d'); 
		$sql = "SELECT *
				FROM askdubarji";
		//echo $sql; exit;
		$num_rows = $this->db->query($sql)->num_rows();
		//echo "<pre>";
		//print_r($this->db->query($sql)->row()); exit;
		if ($num_rows > 200) {
			$first = $page * 200;
	        $staff = $staff ? 1 : 0;
	        $sql .= " LIMIT $first, 200";
		}
		$data['website']  = $this->config->item('website');
		$data['page']	  = $page + 1;
		$data['num_rows'] = $num_rows;
		$data['results']  = $this->db->query($sql);
		$data['title'] 	  = trans('business');
		$data['selected'] = "all";
        $this->load->view('mng/askus', $data);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function show_applics($ad_id='')
	{
		$sql = "SELECT * FROM users_apply ua, user u WHERE ua.user_id=u.id AND ua.advertisement_id=$ad_id";
		$res = $this->db->query($sql);
		if (!$res->num_rows()) {
			echo "<h3>No Appliers to show</h3>";
			return;
		} 
		
		$result = '';
		$result .= '<table id="example3" class="display table" style="width: 100%; cellspacing: 0;">';
		$result .= 	'<thead>';
		$result .= 		'<tr>';
		$result .=			'<th style="width: 40px"><center>#</center></th>';
		$result .=			'<th><center>Name</center></th>';
		$result .=			'<th><center>Email</center></th>';
		$result .=			'<th><center>Phone</center></th>';
		$result .=			'<th><center>Message</center></th>';
		$result .= 		'</tr>';
		$result .= 	'</thead>';
		$result .= 	'<tfoot>';
		$result .= 		'<tr>';
		$result .=			'<th style="width: 40px"><center>#</center></th>';
		$result .=			'<th><center>Name</center></th>';
		$result .=			'<th><center>Email</center></th>';
		$result .=			'<th><center>Phone</center></th>';
		$result .=			'<th><center>Message</center></th>';
		$result .= 		'</tr>';
		$result .= 	'</tfoot>';
		$result .= 	'<tbody>';
		$i = 1;
		foreach ($res->result() as $row) {
			$result .= 		'<tr>';
			$result .= 			'<td style="text-align: center">'. $i.'</td>';
			$result .= 			'<td style="text-align: center">'. $row->username.' '. $row->lastname .'</td>';
			$result .= 			'<td style="text-align: center">'. $row->email.'</td>';
			$result .= 			'<td style="text-align: center">'. $row->mobile .'</td>';
			$result .= 			'<td style="text-align: center">'. $row->massage .'</td>';
			$result .= 		'</tr>';
		}
		$result .= 	'</tbody>';
		$result .= '</table>';
		
		echo $result;
	}
	
	public function getskills($ad_id='')
	{
		$sql = "SELECT * 
				  FROM skills sk
				 WHERE skill_id IN (SELECT skill_id FROM adver_skills WHERE adver_id=$ad_id)";
		$res = $this->db->query($sql);
		if (!$res->num_rows()) {
			echo "<h3>No Skills to show</h3>";
			return;
		} 
		
		$result = '';
		$result .= '<table id="example3" class="display table" style="width: 100%; cellspacing: 0;">';
		$result .= 	'<thead>';
		$result .= 		'<tr>';
		$result .=			'<th style="width: 40px"><center>#</center></th>';
		$result .=			'<th style="width: 40px"><center>'.trans('skill').'</center></th>';
		$result .= 		'</tr>';
		$result .= 	'</thead>';
		$result .= 	'<tfoot>';
		$result .= 		'<tr>';
		$result .=			'<th style="width: 40px"><center>#</center></th>';
		$result .=			'<th style="width: 40px"><center>'.trans('skill').'</center></th>';
		$result .= 		'</tr>';
		$result .= 	'</tfoot>';
		$result .= 	'<tbody>';
		$i = 1;
		foreach ($res->result() as $row) {
			$result .= 		'<tr>';
			$result .= 			'<td style="text-align: center">'. $i.'</td>';
			$result .= 			'<td style="text-align: center">'. $row->skill_name .'</td>';
			$result .= 		'</tr>';
		}
		$result .= 	'</tbody>';
		$result .= '</table>';
		
		echo $result;
	}
	
	public function delete_ad($ad_id='', $from=0)
	{
		if (!$ad_id) {
			redirect(base_url());
		}
		$this->db->where('advertisement_id', $ad_id);
		$this->db->update('advertisement', array('status' => 3));
		/*if ($this->db->affected_rows()) {
			$this->messages->success(trans('data_updated'));
		} else {
            $this->messages->error(trans('data_not_updated'));
        }*/
        if ($from) {
        	$this->messages->success(trans('data_updated'));
			redirect(base_url()."advertisments");
		}
		echo 1;
	}
	
	public function approve_ad($ad_id='')
	{
		if (!$ad_id) {
			redirect(base_url());
		}
		$this->db->where('advertisement_id', $ad_id);
		$this->db->update('advertisement', array('status' => 1));
		/*if ($this->db->affected_rows()) {
			$this->messages->success(trans('data_updated'));
		} else {
            $this->messages->error(trans('data_not_updated'));
        }*/
		echo 1;
	}
	public function delete_bus($ad_id='', $from=0)
	{
		if (!$ad_id) {
			redirect(base_url());
		}
		$this->db->where('bus_id', $ad_id);
		$this->db->update('business', array('status' => 3));
		/*if ($this->db->affected_rows()) {
			$this->messages->success(trans('data_updated'));
		} else {
            $this->messages->error(trans('data_not_updated'));
        }*/
        if ($from) {
        	$this->messages->success(trans('data_updated'));
			redirect(base_url()."business");
		}
		echo 1;
	}

	public function verified_bus($ad_id='', $from=0)
	{
		if (!$ad_id) {
			redirect(base_url());
		}
		$this->db->where('bus_id', $ad_id);
		$this->db->update('business', array('verified' => 1));
		/*if ($this->db->affected_rows()) {
			$this->messages->success(trans('data_updated'));
		} else {
            $this->messages->error(trans('data_not_updated'));
        }*/
        if ($from) {
        	$this->messages->success(trans('data_updated'));
			redirect(base_url()."business");
		}
		echo 1;
	}
	public function notverified_bus($ad_id='', $from=0)
	{
		if (!$ad_id) {
			redirect(base_url());
		}
		
		$this->db->where('bus_id', $ad_id);
		$this->db->update('business', array('verified' => 0));
		
		/*if ($this->db->affected_rows()) {
			$this->messages->success(trans('data_updated'));
		} else {
            $this->messages->error(trans('data_not_updated'));
        }*/
        if ($from) {
        	$this->messages->success(trans('data_updated'));
			redirect(base_url()."business");
		}
		echo 1;
	}
	public function approve_bus($ad_id='')
	{
		if (!$ad_id) {
			redirect(base_url());
		}
		$this->db->where('bus_id', $ad_id);
		$this->db->update('business', array('status' => 1));
		/*if ($this->db->affected_rows()) {
			$this->messages->success(trans('data_updated'));
		} else {
            $this->messages->error(trans('data_not_updated'));
        }*/
		echo 1;
	}

	//achievement action by #PE$$
	public function approve_ach($ad_id='')
	{
		if (!$ad_id) {
			redirect(base_url());
		}
		$this->db->where('ach_id', $ad_id);
		$this->db->update('achievements', array('status' => 1));
		/*if ($this->db->affected_rows()) {
			$this->messages->success(trans('data_updated'));
		} else {
            $this->messages->error(trans('data_not_updated'));
        }*/
		echo 1;
	}
	//achievement action by #PE$$
	public function delete_ach($ad_id='', $from=0)
	{
		if (!$ad_id) {
			redirect(base_url());
		}
		$this->db->where('ach_id', $ad_id);
		$this->db->update('achievements', array('status' => 3));
		/*if ($this->db->affected_rows()) {
			$this->messages->success(trans('data_updated'));
		} else {
            $this->messages->error(trans('data_not_updated'));
        }*/
        if ($from) {
        	$this->messages->success(trans('data_updated'));
			redirect(base_url()."business");
		}
		echo 1;
	}
	//achievement action by #PE$$
	public function verified_ach($ad_id='', $from=0)
	{
		if (!$ad_id) {
			redirect(base_url());
		}
		$this->db->where('ach_id', $ad_id);
		$this->db->update('achievements', array('verified' => 1));
		/*if ($this->db->affected_rows()) {
			$this->messages->success(trans('data_updated'));
		} else {
            $this->messages->error(trans('data_not_updated'));
        }*/
        if ($from) {
        	$this->messages->success(trans('data_updated'));
			redirect(base_url()."achievements");
		}
		echo 1;
	}
	//achievement action by #PE$$
	public function notverified_ach($ad_id='', $from=0)
	{
		if (!$ad_id) {
			redirect(base_url());
		}
		
		$this->db->where('ach_id', $ad_id);
		$this->db->update('achievements', array('verified' => 0));
		
		/*if ($this->db->affected_rows()) {
			$this->messages->success(trans('data_updated'));
		} else {
            $this->messages->error(trans('data_not_updated'));
        }*/
        if ($from) {
        	$this->messages->success(trans('data_updated'));
			redirect(base_url()."achievements");
		}
		echo 1;
	}

	public function edit_dubarah($ad_id='')
	{
		$user_id = $this->session->userdata('user_id');
        $dubarah = $this->db->get_where('advertisement', array('advertisement_id' => $ad_id));
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
				
				$user_id	    = $this->session->userdata('user_id');
				//echo $job_type; exit;
	            $created = $this->user_model->edit_dubarah($ad_id, $sub_id, $title, $employer , $skills ,$description , $gender ,$country, $city,  $address ,$job_type, $expiration,$email , $phone ,$user_id);
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
	        	echo $this->input->post('job_type'); exit;
				//echo validation_errors(); exit;
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
		$data['title'] 	  = trans('advertisments');
		$data['selected'] = "advertisments";
        $this->load->view('mng/edit_dubarah',$data);
	}
	
	public function add_ads($value='')
	{
		
		if ($_POST) {
			$this->form_validation->set_rules('country', 'Country', 'required');
			$this->form_validation->set_rules('page', 'Page', 'required');
			$this->form_validation->set_rules('from', 'From date', 'required');
			$this->form_validation->set_rules('to', 'To date', 'required');
			
			if ($this->form_validation->run()) {
				$country = $this->input->post('country');
				$page  = $this->input->post('page');
				$from  = strtotime($this->input->post('from'));
				$to    = strtotime($this->input->post('to'));
				$main1logo 	 = '';
				$main2logo 	 = '';
				$main3logo 	 = '';
				$logos[]	 = array();
				$errors		 = array();
				$ext		 = array();
				$config['upload_path']   = '../site/uploads/ads';
				$path				     = $config['upload_path'];
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				
				$config['overwrite'] 	 = TRUE;
				$this->load->library('upload');
				foreach ($_FILES as $fieldname => $fileObject)  //fieldname is the form field name
				{
				    if (!empty($fileObject['name']))
				    {
				    	$config['file_name'] = '';
						if ($fieldname == 'mainlogo1') {
							$config['max_size'] 	 = '1024';
							$config['max_width'] 	 = '11170';
							$config['max_height'] 	 = '611138';
							$config['file_name'] = $main1logo = date('Y_m_d_H_i_s');
						} elseif($fieldname == 'mainlogo2') {
							$config['max_size'] 	 = '512';
							$config['max_width'] 	 = '72911';
							$config['max_height'] 	 = '9011';
							$config['file_name'] = $main2logo = date('Y_m_d_H_i_s_1');
						} elseif($fieldname == 'mainlogo3') {
							$config['max_size'] 	 = '512';
							$config['max_width'] 	 = '7129';
							$config['max_height'] 	 = '9011';
							$config['file_name'] = $main3logo = date('Y_m_d_H_i_s_2');
						} 
						
				        $this->upload->initialize($config);
				        if (!$this->upload->do_upload($fieldname))
				        {
				            $error = $this->upload->display_errors();
				            $errors[] = $error;
							//echo $error; exit;
				        } else {
				        	$upload_data     = $this->upload->data();
							$ext[$config['file_name']] = $upload_data['file_ext'];
				           // echo $fieldname . $upload_data['file_name'].'<br>';
				        }
						//print_r($ext); exit;
				    }
				}
				if ($errors) {
					$inserted =  array(0, $errors[0]);
				}
				//echo "$film1logo $film2logo $film3logo"; exit;
				if ($main1logo && !$errors) {
					$info = array(
									'photo_type' => 3,
									'country' 	 => $country,
									'from_date'  => $from,
									'to_date' 	 => $to,
									'page_id'  	 => $page,
									'photo'		 => $main1logo.$ext[$main1logo]
								  );
					
					$this->db->insert('ads_photos', $info);
					$inserted = array($this->db->affected_rows(), 0);
				}
				
				if ($main2logo && !$errors) {
					$info = array(
									'photo_type' => 2,
									'country' 	 => $country,
									'from_date'  => $from,
									'to_date' 	 => $to,
									'page_id'  	 => $page,
									'photo'		 => $main2logo.$ext[$main2logo]
								  );
					
					$this->db->insert('ads_photos', $info);
					$inserted = array($this->db->affected_rows(), 0);
				}
				
				if ($main3logo && !$errors) {
					$info = array(
									'photo_type' => 2,
									'country' 	 => $country,
									'from_date'  => $from,
									'to_date' 	 => $to,
									'page_id'  	 => $page,
									'photo'		 => $main3logo.$ext[$main3logo]
								  );
					
					$this->db->insert('ads_photos', $info);
					$inserted = array($this->db->affected_rows(), 0);
				}
				
				
				if ($inserted[0]) {
					$this->messages->success('Informaion updated');
				} elseif ($inserted[1]) {
					$this->messages->error($inserted[1]);
				} else {
					$this->messages->error('Information was not updated');
				}
				//redirect(base_url()."stream/sport");
			}
			
		}
		
		$data['pages']	   = $this->db->get('ads_pages')->result();
		$data['countries'] = $this->db->get('country')->result();
		$data['title']	  = 'Ads';
		$data['selected'] = 'ads';
		$data['header']   = 'Advertising';
        $this->load->view('mng/add_advs',$data);
	}
}
