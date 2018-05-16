<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

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
    	//echo "strfring"; exit;
        parent::__construct();
		if (!have_access(20, TRUE)) {
			//$this->logout();
		}
        //echo "dfasda"; exit;
        $this->session->set_userdata('this_url', current_url());
		need_unlock();
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
        //$this->form_validation->set_message('required', "%s ".$this->lang->line('required_validation'));
        //$this->form_validation->set_message('numeric', "%s ".$this->lang->line('numeric_validation'));
		//$this->form_validation->set_message('is_unique', "%s ".$this->lang->line('is_unique_validation'));
        $this->load->model('panel/user_model', 'user_model');
		//echo "string"; exit;
    }

	public function logout($value='')
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
    
    public function index()
    {
    	$data['title'] = trans('home');
		$data['selected'] = "create_user";
        $this->load->view('home_view', $data);
    }

    
	public function home($value='')
	{
		
		$data['title'] = trans('home');
		$data['selected'] = "create_user";
        $this->load->view('home_view', $data);
	}
    
    public function create_new_emp() {
    	//echo $this->session->userdata('user_id'); exit;
        need_login();
        have_access(6);
        $data['div_error'] = '';
        
        $this->form_validation->set_rules('first_name', $this->lang->line('first_name'), 'required');
        $this->form_validation->set_rules('last_name', $this->lang->line('last_name'), 'required');
        $this->form_validation->set_rules('username', $this->lang->line('username'), 'required|alpha_numeric|min_length[3]|callback_check_user|callback_check_prusername');
        $this->form_validation->set_rules('password', $this->lang->line('password'), 'required|min_length[8]');
        $this->form_validation->set_rules('email', $this->lang->line('email'), 'valid_email');
        $this->form_validation->set_rules('gender', $this->lang->line('gender'), 'required');
        $this->form_validation->set_rules('city_id', $this->lang->line('city'), 'required|numeric');
        $this->form_validation->set_rules('country_id', $this->lang->line('country'), 'required|numeric');
        $this->form_validation->set_rules('phone', $this->lang->line('phone'), 'required|numeric');
        $this->form_validation->set_rules('birth_date', $this->lang->line('birth_date'), 'required');
        if ($_POST) {
            if ($this->form_validation->run() == true) {
                $first_name 	= $this->input->post('first_name');
                $last_name  	= $this->input->post('last_name');
                $username   	= $this->input->post('username');
				$city_id		= $this->input->post('city_id');
                $password   	= sha1($this->input->post('password'));
                $email      	= $this->input->post('email');
                $gender     	= $this->input->post('gender');
                $birth_date     = $this->input->post('birth_date');
                $phone       	= $this->input->post('phone');
                
                $created = $this->user_model->create_new_user($first_name, $last_name, $username, $password, $email, $gender, strtotime($birth_date), $phone, $city_id);
                
                if ($created) {
                    $this->messages->success($this->lang->line('user_created'));
                } else {
                    $this->messages->error($this->lang->line('user_not_created'));
                }
                
            } else {
                $data['div_error'] = ' has-error';
            }
        }
		$data['title']	  = $this->lang->line('create_user');
        
        $data['cities'] = $this->db->get('cities')->result();
        $data['countries'] = $this->db->get('countries')->result();
        $data['selected'] = "create_user";
        $this->load->view('users/create_user_view', $data);
    }
    
    
	public function check_prusername($username='')
	{
		
		if (!preg_match('/^[A-Za-z0-9_]+$/', $username)) // '/[^a-z\d]/i' should also work.
		{
			$this->form_validation->set_message('check_clusername', $this->lang->line('error_chars'));
			return FALSE;
		} else {
			return TRUE;
		}
	}

    public function employees_list($page=1)
    {
        need_login();
        have_access(7);
		$page -= 1;
		$staff = $this->input->get('staff') ? $this->input->get('staff') : 0;
		
		$username = $this->input->get('username');
		$phone = $this->input->get('phone');
		$email = $this->input->get('email');
		$place = $this->input->get('place');
		
        $results = $this->user_model->employees_list(0, $page, $username, $phone, $email, $place, $staff);
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
		
		$data['countries'] = $this->db->get('country')->result();
		$data['page'] = $page + 1;
		$data['title']	  = $this->lang->line('employees');
        $data['selected'] = 'employees';
        $this->load->view('users/employees_view', $data);
    }
	
	public function delete_user($user_id='')
	{
		$this->db->delete('user', array('id' => $user_id));
		echo 1;
	}
	
	public function staff($user_id='')
	{
		$staff = $this->db->get_where('user', array('id' => $user_id))->row()->is_staff;
		$new_staff = $staff ? 0 : 1;
		$this->db->where('id', $user_id);
		$this->db->update('user', array('is_staff' => $new_staff));
		echo $new_staff == 1 ? 1 : 2;
	}

	public function suspended_employees()
	{
		need_login();
        have_access(9);
		$results = $this->user_model->suspended_emps();
		if ($results->num_rows()) {
            $data['results'] = $results->result();
        } else {
            $data['results'] = '';
            $data['title'] = $this->lang->line('no_emp');
            $data['body'] = $this->lang->line('no_emp_ex');
        }
		$data['title']    = $this->lang->line('sus_emps');
		$data['selected'] = 'sus_emps';
        $this->load->view('users/sus_employees_view', $data);
	}
	
	public function restore_employee($emp_id='')
	{
		have_access(10);
		$restored = $this->user_model->restore_emp($emp_id);
		if ($restored) {
            $this->messages->success($this->lang->line('emp_restored'));
        } else {
            $this->messages->error($this->lang->line('emp_not_restored'));
        }
        redirect(base_url().'sus_emps');
	}
	

    public function fire_employee($emp_id='')
    {
        need_login();
        have_access(8);
        
        if (!$emp_id) {
            $this->messages->error($this->lang->line('no_emp'));
            redirect(base_url());
        }
        $this->form_validation->set_rules('fire_res', $this->lang->line('fire_res'), 'required|trim');
        if ($_POST) {
            if ($this->form_validation->run()) {
                $fire_res = $this->input->post('fire_res');
                $fired = $this->user_model->fire_employee($emp_id, $fire_res);
                if ($fired) {
                    $this->messages->success($this->lang->line('emp_fired'));
                } else {
                    $this->messages->error($this->lang->line('emp_not_fired'));
                }
                redirect(base_url().'users/1');
            } else {
                $data['div_error'] = ' has-error';
            }
        }
		$data['employees']    = $this->db->query("SELECT * FROM user WHERE fired=0 AND id!=$emp_id")->result();
        $data['title']  = $this->lang->line('fire_emp');
        $data['emp_id'] = $emp_id;
        $data['selected'] = 'employees';
        $this->load->view('users/fire_emp_view', $data);
        
    }
	
    public function edit_basic_emp_info($emp_id='')
    {
        need_login();
        have_access(11);
        
        if (!$emp_id) {
            $this->messages->error($this->lang->line('no_emp'));
            redirect(base_url());
        }
        $emp = $this->user_model->employees_list($emp_id);
        $this->form_validation->set_rules('username', $this->lang->line('username'), 'required|trim');
        $this->form_validation->set_rules('mobile', $this->lang->line('phone'), 'required|numeric|trim');
        $this->form_validation->set_rules('email', $this->lang->line('email'), 'required|valid_email|trim');
        $this->form_validation->set_rules('place', $this->lang->line('place'), 'required|trim');
        if ($_POST) {
            if ($this->form_validation->run()) {
                $username 	= $this->input->post('username');
                $mobile		= $this->input->post('mobile');
                $email		= $this->input->post('email');
                $place		= $this->input->post('place');
				$is_staff	= $this->input->post('is_staff');
				$is_staff	= $is_staff ? 1 : 0;
				
                $updated = $this->user_model->edit_basic_emp_info($emp_id, $username, $mobile, $email, $place, $is_staff);
                if ($updated) {
                    $this->messages->success($this->lang->line('emp_updated'));
                } else {
                    $this->messages->error($this->lang->line('emp_not_updated'));
                }
                redirect(base_url().'users/1');
            } else {
                $data['div_error'] = ' has-error';
            }
        }
        $data['title']	  = $this->lang->line('edit_basic_info');
        $data['employee'] = $emp[0]->row();
        $data['emp_id'] = $emp_id;
        $data['selected'] = 'employees';
        $this->load->view('users/edit_basic_emp_info_view', $data);
    }

    public function emp_sessions($emp_id='')
    {
        if (!$emp_id) {
            $this->messages->error($this->lang->line('no_emp'));
            redirect(base_url());
        }
        return $this->user_model->emp_sessions($emp_id)->num_rows() ?
               $this->user_model->emp_sessions($emp_id)->result() : '';
        
    }

	public function check_date($str='')
	{
		if (!$str) {
			return TRUE;
		}
		$date_arr  = explode('-', $str);
		if (count($date_arr) != 3) {
			$this->form_validation->set_message('check_date', "%s ".$this->lang->line('check_date_validation'));
			return FALSE;
		}
		if (checkdate($date_arr[0], $date_arr[1], $date_arr[2])) {
		    return TRUE;
		} else {
			$this->form_validation->set_message('check_date', "%s ".$this->lang->line('check_date_validation'));
			return FALSE;
		}
	}
    
    
	
    public function get_username_emp($username)
    {
		$result= $this->user_model->get_username_emp($username);
		if (!preg_match('/^[A-Za-z0-9_]+$/', $username)) // '/[^a-z\d]/i' should also work.
		{
		    echo 2; return;
		}
		if ($result) echo 1;
			else echo 0 ;
    }
	
	public function get_email_emp($email)
	{
		$result= $this->user_model->get_email_emp($email);
		if ($result) echo 1;
		else echo 0 ;
    }
	
    public function get_phone_emp($phone)
    {
		$result= $this->user_model->get_phone_emp($phone);
		if ($result) echo 1;
		else echo 0 ;
    }
    
    public function countries()
    {
        need_login();
        have_access(12);
        $countries = $this->user_model->countries_list();
        
        if ($countries->num_rows()) {
            $data['results'] = $countries->result();
        } else {
            $data['results'] = '';
            $data['title'] = $this->lang->line('no_regions');
            $data['body'] = $this->lang->line('no_regions_ex');
            $data['submit'] = '<form method="post" action="'.base_url().'add_country/'.$region_id.'">';
            $data['submit'] .= '<input type="submit" value="'.$this->lang->line('add').'" class="btn btn-primary">';
            $data['submit'] .= '</form>';
        }
		$data['title']	  = $this->lang->line('edit_basic_info');
        $data['selected'] = 'regions';
        $this->load->view('users/countries_view', $data);
    }
    
	public function delete_country($country_id='')
	{
		need_login();
        have_access(16);
		if (!$country_id) {
			//echo $region_id
			$this->messages->error($this->lang->line('no_countries'));
			redirect(base_url());
		}
		$region_id = $this->user_model->get_region_id($country_id);
		$deleted = $this->user_model->delete_country($country_id);
		if ($deleted) {
			$this->messages->success($this->lang->line('delete_success'));
		} else {
            $this->messages->error($this->lang->line('delete_not_success'));
        }
        
        redirect(base_url()."countries");
	}
	
    public function edit_country_name($country_id='')
    {
        need_login();
        have_access(14);
        $this->form_validation->set_rules('count_name_ar', $this->lang->line('count_name_ar'), 'required');
        $this->form_validation->set_rules('count_name_en', $this->lang->line('count_name_en'), 'required');
        if ($_POST) {
            if ($this->form_validation->run()) {
                $name_ar = $this->input->post('count_name_ar');
                $name_en = $this->input->post('count_name_en');
                $updated = $this->user_model->update_countname($country_id, $name_ar, $name_en);
                if ($updated) {
                    $this->messages->success($this->lang->line('update_success'));
                } else {
                    $this->messages->error($this->lang->line('update_not_success'));
                }
                $region_id = $this->user_model->get_region_id($country_id);
                redirect(base_url()."countries");
            }
        }
        $country = $this->user_model->get_country($country_id);
        
        if ($country->num_rows()) {
            $data['country'] = $country->row();
        } else {
            $data['results'] = '';
            $data['title'] = $this->lang->line('no_regions');
            $data['body'] = $this->lang->line('no_regions_ex');
        }
		$data['title']	  = $this->lang->line('edit_countname');
        $data['country_id'] = $country_id;
        $data['selected'] = 'regions';
        $this->load->view('users/edit_countname_view', $data);
    }

    public function add_new_country()
    {
        need_login();
        have_access(15);
        $this->form_validation->set_rules('count_name_ar', $this->lang->line('count_name_ar'), 'required');
        $this->form_validation->set_rules('count_name_en', $this->lang->line('count_name_en'), 'required');
        if ($_POST) {
            if ($this->form_validation->run()) {
                $name_ar = $this->input->post('count_name_ar');
                $name_en = $this->input->post('count_name_en');
                $updated = $this->user_model->add_new_country( $name_ar, $name_en);
                if ($updated) {
                    $this->messages->success($this->lang->line('insert_success'));
                } else {
                    $this->messages->error($this->lang->line('insert_not_success'));
                }
                redirect(base_url()."countries");
            }
        }
        $data['title']     = $this->lang->line('add_countname');
        $data['selected'] = 'regions';
        $this->load->view('users/add_country_view', $data);
    }

    public function edit_country_data($country_id='')
    {
        need_login();
        have_access(13);
        $cities = $this->user_model->cities_list($country_id);
        //print_r($cities->result()); exit;
        if ($cities->num_rows()) {
            $data['results'] = $cities->result();
			
        } else {
            $data['results'] = '';
			
            $data['title'] = $this->lang->line('no_cities');
            $data['body'] = $this->lang->line('no_cities_ex');
            $data['submit'] = '<form method="post" action="'.base_url().'add_city/'.$country_id.'">';
            $data['submit'] .= '<input type="submit" value="'.$this->lang->line('add').'" class="btn btn-primary">';
            $data['submit'] .= '</form>';
        }
		$data['title']	  = $this->lang->line('cities_manage');
        $data['country_id'] = $country_id;
        $data['selected'] = 'regions';
        $this->load->view('users/cities_view', $data);
    }

	public function delete_city($city_id='')
	{
		//echo 1; return;
		need_login();
        have_access(18);
		if (!$city_id) {
			//echo $region_id
			$this->messages->error($this->lang->line('no_cities'));
			redirect(base_url());
		}
		$country_id = $this->user_model->get_country_id($city_id);
		
		$deleted = $this->user_model->delete_cities($city_id);
		if ($deleted) {
			$this->messages->success($this->lang->line('delete_success'));
		} else {
            	$this->messages->error($this->lang->line('delete_not_success'));
        }
        
        redirect(base_url()."edit_country/$country_id");
	}
	
    public function edit_city_name($city_id='')
    {
        need_login();
        have_access(17);
        $this->form_validation->set_rules('city_name_ar', $this->lang->line('city_name_ar'), 'required');
        $this->form_validation->set_rules('city_name_en', $this->lang->line('city_name_en'), 'required');
        if ($_POST) {
            if ($this->form_validation->run()) {
                $name_ar = $this->input->post('city_name_ar');
                $name_en = $this->input->post('city_name_en');
                $updated = $this->user_model->update_cityname($city_id, $name_ar, $name_en);
                if ($updated) {
                    $this->messages->success($this->lang->line('update_success'));
                } else {
                    $this->messages->error($this->lang->line('update_not_success'));
                }
				
                $country_id = $this->user_model->get_country_id($city_id);
                redirect(base_url()."edit_country/$country_id");
            }
        }
        $city = $this->user_model->get_city($city_id);
        
        if ($city->num_rows()) {
            $data['city'] = $city->row();
        } else {
            $data['results'] = '';
            $data['title'] = $this->lang->line('no_regions');
            $data['body'] = $this->lang->line('no_regions_ex');
        }
		$data['title'] = $this->lang->line('edit_cityname');
        $data['city_id'] = $city_id;
        $data['selected'] = 'regions';
        $this->load->view('users/edit_cityname_view', $data);
    }

    public function add_new_city($country_id)
    {
        need_login();
        have_access(19);
        $this->form_validation->set_rules('city_name_ar', $this->lang->line('city_name_ar'), 'required');
        $this->form_validation->set_rules('city_name_en', $this->lang->line('city_name_en'), 'required');
        if ($_POST) {
            if ($this->form_validation->run()) {
                $name_ar = $this->input->post('city_name_ar');
                $name_en = $this->input->post('city_name_en');
                $updated = $this->user_model->add_new_city($country_id, $name_ar, $name_en);
                if ($updated) {
                    $this->messages->success($this->lang->line('insert_success'));
                } else {
                    $this->messages->error($this->lang->line('insert_not_success'));
                }
                redirect(base_url()."edit_country/$country_id");
            }
        }
        $data['title'] = $this->lang->line('add_city');
        $data['country_id'] = $country_id;
        $data['selected'] = 'regions';
        $this->load->view('users/add_city_view', $data);
    }
    
    function check_user($str='')
    {
        if ($str) {
            if ($this->db->query("select * from employees where username='$str' and fired<2")->num_rows()) {
                $this->form_validation->set_message('check_user', "%s ".$this->lang->line('unique_validation'));
                return FALSE;
            }
            return TRUE;
        }
    } 
    
    function check_username($str='')
    {
        if ($str) {
            if ($this->db->get_where('clients', array('username' => $str))->num_rows()) {
                $this->form_validation->set_message('check_username', "%s ".$this->lang->line('unique_validation'));
                return FALSE;
            }
            return TRUE;
        }
    } 
    
    public function get_ajax_countries($reg_id='')
    {
        $countries = $this->user_model->countries_list($reg_id)->result();
        $result = '';
        foreach ($countries as $country) {
            if (!$this->session->userdata('lang') || $this->session->userdata('lang') == 'ar') {
                $result .= "<option value='$country->country_id'>".$country->coun_name_ar."</option>";
            } else {
                $result .= "<option value='$country->country_id'>".$country->coun_name_en ."</option>";
            }
            
        }
        echo $result;
    }
    
    public function get_ajax_cities($country_id='')
    {
        $cities = $this->user_model->cities_list($country_id)->result();
        $result = '';
        foreach ($cities as $city) {
            if (!$this->session->userdata('lang') || $this->session->userdata('lang') == 'ar') {
                $result .= "<option value='$city->city_id'>".$city->city_name_ar."</option>";       
            } else {
                $result .= "<option value='$city->city_id'>".$city->city_name_en."</option>"; 
            }
            
        }
        echo $result;
    }
    
	public function check_code($str='')
	{
		$my_id = $this->session->userdata('user_id');
		$result = $this->user_model->checkcode($my_id, $str);
		if ($result) {
			return TRUE;
		} else {
			$this->form_validation->set_message('check_code', '%s '.$this->lang->line('code_validation'));
			return FALSE;
		}
	}
	
	public function recover_password()
	{
		$data['no_email'] = '';
		$data['sent'] 	  = '';
		$this->form_validation->set_rules('email', $this->lang->line('email'), 'required|valid_email');
		if ($this->form_validation->run()) {
			$email = $this->input->post('email');
			$data['sent'] = $this->user_model->send_code($email);
			$this->session->set_userdata('sent_code', 1);
			redirect(base_url());
		} else {
			$data['no_email'] = TRUE;
		}
		
		$this->load->view('login_view', $data);
	}
	
	public function check_mycode($str='')
	{
		$id = $this->session->userdata('user_id');
		$res = $this->user_model->check_mycode($str, $id);
		if ($res) {
			return TRUE;
		} else {
			$this->form_validation->set_message('check_mycode', '%s '.$this->lang->line('check_code_res'));
			return FALSE;
		}
	}
	
	
	public function charts($user_id='')
	{
		need_login();
		if (!have_access(81, TRUE)) {
			$user_id = $this->session->userdata('user_id');
		}
		
		$my_ads    = '';
		$sons_ads  = '';
		$from_date = '';
		$to_date   = '';
		$every	   = '';
		
		if ($_POST) {
			$my_ads    = $this->input->post('my_ids');
			$sons_ads  = $this->input->post('sons_ids');
			$from_date = $this->input->post('from');
			$to_date   = $this->input->post('to');
			if (have_access(81, TRUE)) {
				//exit;
				$every = $this->input->post('every');
			}
		}

		$result = $this->user_model->get_charts($user_id, $my_ads, $sons_ads, $from_date, $to_date, $every);
		$data['result'] = $result->result();
		$data['title']	= $this->lang->line('chart');
		$data['pie']	= $this->user_model->get_slider_ads($user_id, $my_ads, $sons_ads, $from_date, $to_date, $every);
		$data['selected'] = 'statistics';
		$this->load->view('users/charts_view', $data);
	}
	
}
 
 /* setInterval( "refresh();", 60000 ); 

refresh = function(){
       var URL = "file.php";
       $.ajax({ type: "GET", 
                url: URL, 
                succes: function(data){ 
                  if(data){
                      //change stuff 
                  }
                }
       });
    } */
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
