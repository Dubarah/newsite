<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -  
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
     
    public function __construct() {
        parent::__construct();
    }
    
    
    
    public function create_new_user($first_name, $last_name, $username, $password, $email, $gender, $birth_date, $phone, $city_id)
    {
    	
        $insert = array(
                            'first_name'    	=> $first_name, 
                            'last_name'     	=> $last_name,
                            'username'      	=> $username,
                            'password'      	=> $password, 
                            'join_date'     	=> time(), 
                            'city_id'     		=> $city_id,
                            'email'         	=> $email, 
                            'gender'        	=> $gender, 
                            'birth_date'    	=> $birth_date, 
                            'phone'         	=> $phone,
                        );
        //echo "<pre>";
        //print_r($insert); exit;
        $this->db->trans_start();
        $this->db->insert('employees', $insert);
        
        $this->db->trans_complete();
		
        return $this->db->trans_status();
    }
	
    public function employees_list($emp_id=0, $page=0, $username='', $phone='', $email='', $place='', $staff = 0)
    {
    	$where = ' ';
		$username = str_replace(' ', '%', $username);
		$where .= $username ? " AND u.username LIKE '%$username%' " : '';
		$where .= $phone ? " AND u.mobile LIKE '%$phone%' " : '';
		$where .= $email ? " AND u.email LIKE '%$email%' " : '';
		$where .= $place ? " AND u.country=$place " : '';
		$where .= $emp_id ? " AND id=$emp_id " : '';
		$user_id = $this->session->userdata('user_id');
    	$sql = "SELECT u.*, COUNT(ua.a_id) app_count, COUNT(ad.advertisement_id) jobs_count
    			  FROM user u 
    			  LEFT JOIN users_apply ua ON ua.user_id=u.id 
    			  LEFT JOIN advertisement ad ON ad.user_id=u.id 
    			 WHERE is_staff = $staff $where
    			 GROUP BY u.id";
		//echo $sql; exit;
		$num_rows = $this->db->query($sql)->num_rows();
		if ($num_rows > 200) {
			$first = $page * 200;
	        $staff = $staff ? 1 : 0;
	        $sql .= " LIMIT $first, 200";
		}
    	
        return array($this->db->query($sql), $num_rows);
    }
	
	public function restore_emp($emp_id) {
		if (!$emp_id) {
			return FALSE;
		}
		$this->db->where('emp_id', $emp_id);
		$this->db->update('employees', array('fired' => 0));
		return $this->db->affected_rows();
	}
	
	public function del_employee($emp_id) {
		if (!$emp_id) {
			return FALSE;
		}
		$this->db->where('id', $emp_id);
		$this->db->update('user', array('fired' => 2));
		return $this->db->affected_rows();
	}
	
	public function suspended_emps() {
		$sql = "SELECT emps.*, ci.city_name_ar ci_name, co.coun_name_ar co_name
                  FROM employees emps, countries co, cities ci
                 WHERE emps.city_id=ci.city_id
                   AND ci.country_id=co.country_id
                   AND fired = 1 ";
         return $this->db->query($sql);          
                   
	}
	
    public function get_username_emp($username)
    {
	 	$result = $this->db->get_where('employees', array('username' => $username , 'fired'=> 0 ))->num_rows();
        return $result;
    }
	
    public function get_email_emp($email)
    {
	 	$result = $this->db->get_where('employees', array('email' => $email , 'fired'=> 0))->num_rows();
        return $result;
    }
	
    public function get_phone_emp($phone)
    {
	 	$result = $this->db->get_where('employees', array('phone' => $phone , 'fired'=> 0))->num_rows();
        return $result;
    }
	

    public function fire_employee($emp_id, $fire_res)
    {
        if (!$this->db->get_where('user', array('id' => $emp_id))->num_rows()) {
            return FALSE;
        }
        $this->db->trans_start();
            $this->db->where('id', $emp_id);
            $this->db->update('user', array('fired' => 1, 'fire_res' => $fire_res));
            
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE)
        {
            return FALSE;
        } else {
            return TRUE;
        }
    }
    
    public function edit_basic_emp_info($emp_id="", $username='', $mobile='', $email='', $place='', $is_staff='')
    {
    	if (!$username || !$mobile || !$email || !$place || !$emp_id) {
			return FALSE;
		}
        if (!$this->db->get_where('user', array('id' => $emp_id))->num_rows()) {
            return FALSE;
        }
        //echo $max_directs.'  '.$contruct_date; exit;
        $update = array(
                            'username' 	 => $username,
                            'email'  	 => $mobile,
                            'mobile'     => $email,
                            'place'      => $mobile,
                            'is_staff'	 => $is_staff,
                            'updated_at' => time()
                        );
		//echo "<pre>";
		//print_r($update); exit;
        $this->db->where('id', $emp_id);
        $this->db->update('user', $update);
            
        if ($this->db->affected_rows() === FALSE)
        {
			return FALSE;
        } else {
            return TRUE;
        }
    }
	
    public function emp_sessions($emp_id, $from="", $to="")
    {
        if (!$emp_id) {
            return FALSE;
        }
        
        $first_day = $from ? $from : strtotime(date('Y-m-1'));
        $now       = $to ? $to : time();
        
        $sql = "SELECT sl.*, e.first_name, e.last_name, e.username 
                  from session_log sl, employees e
                 where e.emp_id=sl.user_id
                   AND start_time between $first_day AND $now
                   AND e.emp_id=$emp_id order by sl.id desc";
        
        return $this->db->query($sql);
    }
	
    public function countries_list($region_id='')
    {
        $countries = $this->db->order_by('coun_name_ar', 'ASC')->get('countries');
        return $countries;
    }
	
	public function delete_country($country_id)
	{
		$cities = $this->db->query('select city_id from cities where country_id='. $country_id)->result();
		
		$ci_ids = array();
		$br_ids = array();
		foreach ($cities as $city) {
			$ci_ids[] = $city->city_id;
		}
		$ci_ids = implode(',', $ci_ids);
		
		if ($ci_ids) {
			//echo $ci_ids; exit;
			$branches = $this->db->query("select branch_id from branches where city_id in ($ci_ids)")->result();
			//print_r($branches); exit;
			foreach ($branches as $branch) {
				$br_ids[] = $branch->branch_id;
			}
			$br_ids = implode(',', $br_ids);
		}
		
		
		//echo $br_ids; exit;
		$this->db->trans_start();
		
			
			
			$this->db->where('country_id', $country_id);
			$this->db->delete('countries');
			
			
			if ($ci_ids) {
				$this->db->query("delete from cities where city_id in ($ci_ids)");
			}
			
			if ($br_ids) {
				$this->db->query("delete from branches where branch_id in ($br_ids)");
			}
			
		$this->db->trans_complete();
		
		return $this->db->trans_status();
	}
    
    public function get_country($country_id)
    {
        return $this->db->order_by('coun_name_ar', 'ASC')->get_where('countries', array('country_id' => $country_id));
    }
    
    public function update_countname($country_id, $name_ar, $name_en)
    {
        if (!$this->db->get_where('countries', array('country_id' => $country_id))->num_rows()) {
            return FALSE;
        }
        
        $updated = array(
                            'coun_name_ar' => $name_ar,
                            'coun_name_en' => $name_en,
                            
                        );
        $this->db->where('country_id', $country_id);
        $this->db->update('countries', $updated);
        if ($this->db->affected_rows()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function add_new_country($name_ar, $name_en)
    {
        
        $inserted = array(
                             'coun_name_ar' => $name_ar,
                             'coun_name_en' => $name_en
                         );
        $this->db->insert('countries', $inserted);
        if ($this->db->insert_id()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function cities_list($country_id='')
    {
        return $this->db->order_by('city_name_ar', 'ASC')->get_where('cities', array('country_id' => $country_id));
    }
	
	public function delete_cities($city_id='')
	{
		$this->db->trans_start();
		
			$this->db->where('city_id', $city_id);
			$this->db->delete('cities');
			
			
			
		$this->db->trans_complete();
		
		return $this->db->trans_status();
	}
    
    public function get_city($city_id)
    {
        return $this->db->order_by('city_name_ar', 'ASC')->get_where('cities', array('city_id' => $city_id));
    }
    
    public function update_cityname($city_id, $name_ar, $name_en)
    {
        if (!$this->db->get_where('cities', array('city_id' => $city_id))->num_rows()) {
            return FALSE;
        }
        
        $updated = array(
                            'city_name_ar' => $name_ar,
                            'city_name_en' => $name_en
                        );
        $this->db->where('city_id', $city_id);
        $this->db->update('cities', $updated);
        if ($this->db->affected_rows()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function add_new_city($country_id, $name_ar, $name_en)
    {
        
        $inserted = array(
                            'country_id'   => $country_id,
                            'city_name_ar' => $name_ar,
                            'city_name_en' => $name_en
                        );
        $this->db->insert('cities', $inserted);
        if ($this->db->insert_id()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function get_country_id($city_id)
    {
        return $this->db->get_where('cities', array('city_id' => $city_id))->row()->country_id;
    }
    
    public function get_city_id($branch_id)
    {
        return $this->db->get_where('branches', array('branch_id' => $branch_id))->row()->city_id;
    }
	
	public function get_charts($user_id='', $my_ads='', $sons_ads='', $from_date='', $to_date='', $every)
	{
		$date   = $to_date   ? strtotime($to_date) : time();
		$mounth = $from_date ? strtotime($from_date) : time() - (30 * 24 * 60 * 60);
		$user = '';
		if ($my_ads && $sons_ads) {
			return FALSE;
		}
		if ($user_id || $my_ads) {
			$user_id = $this->session->userdata('user_id');
			$user = "AND emp_id=$user_id";
		}
		
		if ($sons_ads) {
			$user_id = $this->session->userdata('user_id');
			$user = "AND emp_id in (SELECT emp_id FROM employees WHERE father_id=$user_id)";
		}
		if (!$my_ads && !$sons_ads) {
			
			$user_id = $this->session->userdata('user_id');
			//echo $user_id; exit;
			$user = "AND (emp_id in (SELECT emp_id FROM employees WHERE father_id=$user_id) OR emp_id=$user_id)";
		}
		if ($every) {
			$user = "";
		}
		$sql = "SELECT COUNT(ad_id) num, MID(FROM_UNIXTIME(register_date), 1, 10) date 
				  FROM ads 
				 WHERE register_date BETWEEN $mounth AND $date $user
			  GROUP BY MID(FROM_UNIXTIME(register_date), 1, 10)";
		//echo $sql; exit;
		$result = $this->db->query($sql);
		//print_r($result->result()); exit;
		return $result;
		//echo $sql; exit;
	}
	
	public function edit_dubarah($ad_id, $sub_id, $title, $employer , $skills ,$description , $gender ,$country, $city,  $address ,$job_type, $expiration,$email , $phone ,$user_id)
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
					   		'gender'    	=> $gender  
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
	
}
