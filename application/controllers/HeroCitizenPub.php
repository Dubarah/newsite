<?php defined('BASEPATH') OR exit('No direct script access allowed');

class HeroCitizenPub extends CI_Controller{
	function __construct(){
		parent::__construct();
		check_lang();
		$this->session->set_userdata('this_url', current_url());
   	 	$this->load->model('HeroCitizenPubModel', 'model');
		//$this->load->model('HeroCitizenModel', 'Pmodel');
	
	
	}

	//showing achievements
	public function index($page = 1){
		$filters = $this->input->get();
		$data = $this->model->get_achievements($filters, $page);
		$this->load->view('heroCitizen/showAchi', $data);
	}

		//service profile with beginning
	public function herohome(){
		
		$log = $this->session->userdata('user_id');
	
		if($log){
			redirect(base_url().'add-achit');
		$ex_res = $this->Pmodel->check_existhero(false); //(check service type, service type) 
		if($ex_res){
			redirect(base_url().'addAchievement');
		}
		
		}
		if($_POST){
			redirect(base_url().'add-achit');
			
			$is_valid = $this->Pmodel->firstSection_validate();
			if($is_valid){
				$inputs = $this->input->post();
				$this->model->check_existhero(true, 0); //(check service type, service type)
				$this->session->set_userdata('firstSection', $inputs);
				redirect(base_url().'addAchievement');
			}
		}
		//$data = $this->Pmodel->serviceProfileGetter(user_id());
		
		$data = $this->model->achievements_pages();
		
		$this->load->view('heroCitizen/starting',$data);
	}

}
