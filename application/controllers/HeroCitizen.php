<?php defined('BASEPATH') OR exit('No direct script access allowed');

class HeroCitizen extends CI_Controller{
	function __construct(){
		parent::__construct();
		check_lang();
		need_login();

		$this->session->set_userdata('this_url', current_url());
    $this->load->model('HeroCitizenModel', 'model');
	}

	//service profile with beginning
	public function index(){
		$ex_res = $this->model->check_existhero(false); //(check service type, service type) 
		if($ex_res)
		
		
			$this->messages->error(trans('you_have_achi'));
			redirect(base_url().'profile');
		if($_POST){
			$is_valid = $this->model->firstSection_validate();
			if($is_valid){
				$inputs = $this->input->post();
				$this->model->check_existhero(true, 0); //(check service type, service type)
				$this->session->set_userdata('firstSection', $inputs);
				redirect(base_url().'addAchievement');
			}
		}
		$data = $this->model->serviceProfileGetter(user_id());
		$this->load->view('heroCitizen/starting',$data);
	}

	//adding achievement
	public function addAchievement(){
		//check if user did the first section
		if(!$this->session->userdata('firstSection'))
			redirect(base_url().'add-achi');
		$data = $this->model->addAchiDataGetter();
		$this->load->view('heroCitizen/createAchi',$data);
	}

	//editing achievement
	public function editAchievement($hero_id, $ach_id){
		$data = $this->model->editAchiDataGetter($hero_id, $ach_id);
		$this->load->view('heroCitizen/editAchi',$data);
	}

	//create achievement steps processing
	public function stepsHandler($stepNo){
  	$inputs = $this->input->post();
  	$is_valid = $this->model->steps_validation($inputs);
  	if($is_valid){
  		if($stepNo != 2){
  			// step 1 #PE$$
  			// (fine, last step, errors)
		  	echo json_encode(array(1, 0, 0));
        return;
  		}else{
  			// step 2 #PE$$
  			$data = array(
					'firstSection'	=> $this->session->userdata('firstSection'),
					'secondSection'	=> $inputs
  			);
  			$res = $this->model->addAchievement($data);

  			if($res[0]){
  				// (fine, last step, errors)
  				echo json_encode(array(1, 1, 0));
	        return;
  			}else {
  				// (fine, last step, errors)
          echo json_encode(array(1, 1, $res[1]));
      		return;
        }
  		}
  	}else{
  		//validation error action #PE$$
  		$errors =$this->model->setErrors();
      echo json_encode(array(0, $errors));
      return;
  	}
	}

	//edit achievement processing
	public function editHandler($hero_id, $ach_id){
		$inputs = $this->input->post();
  	$is_valid = $this->model->steps_validation($inputs);
  	if($is_valid){
  		$res = $this->model->editAchievemet($inputs, $hero_id, $ach_id);
  		if($res[0]){
  			//success
  			$this->messages->success(trans('suc_edit_ach'));
				echo json_encode(array(1, 0)); //(status, errors)
        return;
  		}else{
  			//fail
  			echo json_encode(array(2, $res[1])); //(status, errors)
        return;
  		}
  	}else{
  		$errors =$this->model->setErrors();
  		echo json_encode(array(0, $errors));
	    return;
  	}
	}

	//follow hero section #PE$$
	public function follow($hero_id=''){
		get_ajax_request();
		$res = $this->model->follow(user_id(), $hero_id);
		echo $res;
		return;
	}

	//unfollow hero section #PE$$
	public function unfollow($hero_id=''){
		get_ajax_request();
		$res = $this->model->unfollow(user_id(), $hero_id);
		echo $res;
		return;

	}

	//like achievement #PE$$
	public function like($ach_id=''){
		get_ajax_request();
		$res = $this->model->like(user_id(), $ach_id);
		echo $res;
		return;
	}

	//cancel like achievement
	public function c_like($ach_id=''){
		get_ajax_request();
		$res = $this->model->c_like(user_id(), $ach_id);
		echo $res;
		return;
	}

	//dislike achievement #PE$$
	public function dislike($ach_id=''){
		get_ajax_request();
		$res = $this->model->dislike(user_id(), $ach_id);
		echo $res;
		return;
	}

	//cancel dislike achievement #PE$$
	public function c_dislike($ach_id=''){
		get_ajax_request();
		$res = $this->model->c_dislike(user_id(), $ach_id);
		echo $res;
		return;
	}

	//activate achievement #PE$$
	public function make_primary($id='', $hero=''){
		$res =$this->model->make_primary($id, $hero);
		echo $res;
		return;
	}
}