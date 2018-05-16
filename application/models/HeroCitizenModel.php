<?php 
class HeroCitizenModel extends CI_Model{

	var $store_salt;
  var $salt_length;
  var $hash_method;

  function __construct() {
      parent::__construct();
      need_login();
  }

  //validate first section
  public function firstSection_validate(){
  	$this->form_validation->set_rules('fName',trans('firstname'), 
  	'required|trim|alpha_numeric_spaces');
		$this->form_validation->set_rules('lName', trans('last_name'), 
		'required|trim|alpha_numeric_spaces');
		$this->form_validation->set_rules('prof', trans('professional'), 
		'required|trim|alpha_numeric_spaces');
		$this->form_validation->set_rules('NNL',trans('nationality'), 
		'required');
		return $this->form_validation->run();
  }

  //inserting achievement data
  public function addAchievement($data){
  	$fs_images	= array();
		$i					= 0;
		$errors 		= array();
		$config['upload_path']		= 'uploads/achievements/logos';
		$config['allowed_types']	= 'gif|jpg|jpeg|png';
		$config['max_size']				= '1000';
		$config['max_width']			= '5000';
		$config['max_height']			= '5000';
		$config['overwrite']			= FALSE;
		$config['encrypt_name']		= TRUE; 
		$this->load->library('upload');
		foreach ($_FILES as $fieldname => $fileObject)  //fieldname is the form field name
		{
			if (!empty($fileObject['name']))
		  {
	    	if(!($fieldname =='com-logo')){
	    		$config['upload_path']   = 'uploads/achievements/pictures';
	    	}
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($fieldname))
        {
          $error = $this->upload->display_errors();
          $errors[] = $error;
        } else {
        	$upload_data     = $this->upload->data();
          $fs_images[$i] = $upload_data['file_name'];
				}
			}
			$i++;
		}

		$up_err = 0;
		if ($errors) {
			$up_err = $errors[0];
			return array(0, $up_err);
		}

		$this->db->trans_start();
		$userId = user_id();

		//check if user have hero service
		$sql="SELECT * FROM user_services WHERE user_id = $userId AND serv_id = 1";
		$ex = $this->db->query($sql)->num_rows();
		if(!$ex){
			//update user data #PE$$
			$update = array (
				'username'		=> $data['firstSection']['fName'],
				'lastname'		=> $data['firstSection']['lName'],
				'job'					=> $data['firstSection']['prof'],
				'nationality'	=> $data['firstSection']['NNL']
			);
			$this->db->where('id', $userId);
			$this->db->update('user', $update);

			//create a user new service #PE$$
			$insert = array (
				'user_id'		=> $userId,
				'serv_id'		=> 1, //Hero_citizen (achievements)
				'type_id'		=> 0 //Free
			);
			$this->db->insert('user_services', $insert);

			//create Hero_citizen (achievements) service #PE$$
			$insert = array (
								'user_id'		=> $userId
							);
			$this->db->insert('hero_citizen', $insert);
			$hero_id = $this->db->insert_id();
		}else{
			$this->db->select('hero_id');
			$hero_id = $this->db->get_where('hero_citizen', array('user_id' => $userId))->row();
			$hero_id = $hero_id->hero_id;
		}

		//create achievement #PE$$
		$insert = array (
			'hero_id' 		=> $hero_id,
      'ach_type'		=> $data['secondSection']['achType'],
      'ach_title'   => $data['secondSection']['Nocker'],
      'ach_logo'    => isset($fs_images[0]) ? $fs_images[0] : '',
      'ach_date'    => strtotime($data['secondSection']['achDate']),
      'ach_country'	=> $data['secondSection']['country'],                       
      'ach_city'		=> $data['secondSection']['city'],   
     	'ach_exp'     => $data['secondSection']['achExp'],
   		'website'			=> $data['secondSection']['achWeb'],
   		'facebook'    => $data['secondSection']['achFb'],						   		
			'twitter'     => $data['secondSection']['achTw'],
			'linkedin'		=> $data['secondSection']['achLnk'],
   		'instagram'   => $data['secondSection']['achIns'],						   		
			'youtube'     => $data['secondSection']['achYou']
		);
		$this->db->insert('achievements', $insert);
		$ach_id = $this->db->insert_id();

		// inserting user achievement pictures #PE$$
		$fs_images[0] = '';
		foreach($fs_images as $image ){
			if(!empty($image)){
				$insert = array (
									'achiv_id'	=> $ach_id,
									'img'				=> $image
								);
				$this->db->insert('ach_imgs', $insert);
			}
		}
		$this->db->trans_complete();
		if(!$this->db->trans_status()){
			$up_err = $this->db->error();
		}
		return array($this->db->trans_status(), $up_err);
  }

  //updating achievement data
  public function editAchievemet($data, $hero_id, $ach_id){
  	$fs_images	= array();
		$i 					= 0;
		$errors		 	= array();
		$config['upload_path']		= 'uploads/achievements/logos';
		$config['allowed_types']	= 'gif|jpg|jpeg|png';
		$config['max_size']				= '1000';
		$config['max_width']			= '5000';
		$config['max_height']			= '5000';
		$config['overwrite']			= FALSE;
		$config['encrypt_name']		= TRUE; 
		$this->load->library('upload');
		foreach ($_FILES as $fieldname => $fileObject)  //fieldname is the form field name
		{
			if (!empty($fileObject['name']))
		  {
	    	if(!($fieldname =='com-logo')){
	    		$config['upload_path']   = 'uploads/achievements/pictures';
	    	}
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($fieldname))
        {
            $error = $this->upload->display_errors();
            $errors[] = $error;
        } else {
        	$upload_data   = $this->upload->data();
          $fs_images[$i] = $upload_data['file_name'];
				}
			}
			$i++;
		}
		$up_err = 0;
		if ($errors) {
			$up_err = $errors[0];
			return array(0, $up_err);
		}
		$this->db->trans_start();

		/* checkin logo state */
		//new logo uploaded
		if(isset($fs_images[0])){
			$newlogo = $fs_images[0];
			if($data['oldlogo']){
				$path ='uploads/achievements/logos/'.$data['oldlogo'];
	    	unlink($path);
			}
    }else{ //logo deleted
    	if($data['dellogo']){
    		$newlogo= '';
    		$path ='uploads/achievements/logos/'.$data['oldlogo'];
    		unlink($path);
    	}else{ //noting changed
    		$newlogo = $data['oldlogo'];
    	}
    }
		//update achievement #PE$$
    $update_date 	= date("Y-m-d H:i:s");
		$update 			= array (
      'ach_type'		=> $data['achType'],
      'ach_title'   => $data['Nocker'],
      'ach_logo'    => $newlogo,
      'ach_date'    => strtotime($data['achDate']),
      'ach_country'	=> $data['country'],                       
      'ach_city'		=> $data['city'],   
     	'ach_exp'     => $data['achExp'],
   		'website'			=> $data['achWeb'],
   		'facebook'    => $data['achFb'],						   		
			'twitter'     => $data['achTw'],
			'linkedin'		=> $data['achLnk'],
   		'instagram'   => $data['achIns'],						   		
			'youtube'     => $data['achYou'],
			'updated_date'=> $update_date
						);
		$this->db->where('hero_id', $hero_id);
		$this->db->where('ach_id', $ach_id);
		$this->db->update('achievements', $update);

		// inserting user achievement pictures #PE$$
		$oldimgs 	= array(
			$data['oldimg-1'],
			$data['oldimg-2'],
			$data['oldimg-3'],
			$data['oldimg-4'],
			$data['oldimg-5'],
			$data['oldimg-6']
		 );
		$delimgs 	= array(
			$data['delimg-1'],
			$data['delimg-2'],
			$data['delimg-3'],
			$data['delimg-4'],
			$data['delimg-5'],
			$data['delimg-6']
		 );
		$fs_images[0] = '';
		for($i=0;$i<6;$i++){
			//if user upload new image
			if(isset($fs_images[$i+1])&&!empty($fs_images[$i+1])){
				if($oldimgs[$i]){ //if there is an old image
					$update = array (
						'img'			=> $fs_images[$i+1],
						'updated_date'	=> $update_date
					);
					$this->db->where('achiv_id',$ach_id);
					$this->db->where('img',$oldimgs[$i]);
					$this->db->update('ach_imgs', $update);
					$path ='uploads/achievements/pictures/'.$oldimgs[$i];
	    		unlink($path);
				}else{ //if there is no old image
					$insert = array (
						'achiv_id'	=> $ach_id,
						'img'		=> $fs_images[$i+1]
					);
					$this->db->insert('ach_imgs', $insert);
				}
			}else{ //if user didn't upload new images
				if($delimgs[$i]){ //if delete old image
					$this->db->where('achiv_id',$ach_id);
					$this->db->where('img',$oldimgs[$i]);
					$this->db->delete('ach_imgs');
					$path ='uploads/achievements/pictures/'.$oldimgs[$i];
	    		unlink($path);
				}else{ //nothing changed
				$update = array (
					'img'		=> $oldimgs[$i]
				);
				$this->db->where('achiv_id',$ach_id);
				$this->db->where('img',$oldimgs[$i]);
				$this->db->update('ach_imgs', $update);
				}
			}
		}
		$this->db->trans_complete();
		return array($this->db->trans_status(), $up_err);
  }

  //validate steps
  public function steps_validation($inputs){
  	$this->form_validation->set_rules('achType', trans('ach_type'), 
  	'required');
	  $this->form_validation->set_rules('Nocker', trans('nocker'), 
	  'required|trim|alpha_numeric_spaces');
	  $this->form_validation->set_rules('achDate', trans('ach_date'), 
	  'required');
	  $this->form_validation->set_rules('country', trans('country_of_ach'), 
	  'required');
	  $this->form_validation->set_rules('city', trans('city_of_ach'), 
	  'required');
	  $this->form_validation->set_rules('achExp', trans('ach_ex'), 
	  'required|trim');
	  $inputs['achWeb'] = isset($inputs['achWeb']) ? $inputs['achWeb']:'';
	  $inputs['achFb'] 	= isset($inputs['achFb']) ? $inputs['achFb']:'';
	  $inputs['achTw'] 	= isset($inputs['achTw']) ? $inputs['achTw']:'';
	  $inputs['achLnk'] = isset($inputs['achLnk']) ? $inputs['achLnk']:'';
	  $inputs['achIns'] = isset($inputs['achIns']) ? $inputs['achIns']:'';
	  $inputs['achYou'] = isset($inputs['achYou']) ? $inputs['achYou']:'';
	  //checking if any this entered
	  $achWeb = str_replace(' ', '', $inputs['achWeb']);
	  $achFb 	= str_replace(' ', '', $inputs['achFb']);
	  $achTw 	= str_replace(' ', '', $inputs['achTw']);
	  $achLnk = str_replace(' ', '', $inputs['achLnk']);
	  $achIns = str_replace(' ', '', $inputs['achIns']);
	  $achYou = str_replace(' ', '', $inputs['achYou']);
	  if(!$achWeb && !$achFb && !$achTw && !$achLnk && !$achIns && !$achYou){
	  	$this->form_validation->set_rules('achTw',trans('socials'), 
	  	'required', array('required' => trans('socials')));
	  }
	  return $this->form_validation->run();
  }

  //check if user adding another achievement and haven't subscribed in dubarah plus
  public function check_existhero($check_type = true, $type_id=''){
  	$userId = user_id();
  	if($check_type == true){
  		$type = ' AND type_id = '.$type_id;
  	}else{
  		$type = '';
  	}
  	$sql="SELECT * FROM user_services WHERE user_id = $userId AND serv_id = 1 ".$type;
		$ex = $this->db->query($sql)->num_rows();
		if($ex){
			if($ex && $type_id==0)
				$this->messages->warning(trans('exist_hero'));
			$this->db->select('username, lastname, job, nationality');
			$first = $this->db->get_where('user', array('id' => $userId))->row();
			$firstSection = array(
				'fName' => $first->username,
				'lName' => $first->lastname,
				'prof'	=> $first->job,
				'NNL'		=> $first->nationality
			);
			$this->session->set_userdata('firstSection', $firstSection);
			return true;
		}
		return false;
  }

  /*
		Data Getters
  */

	//getting data for the first section
	public function serviceProfileGetter($user_id)
	{
		$data = recommend_ach(2,$user_id);
		$data['nations'] = $this->getNationalities();
		return $data;
	}

	//getting data for add achievement
	public function addAchiDataGetter(){
		$user_id = user_id();
		$data['ach_type'] = $this->db->get('ach_type')->result();
		$this->db->order_by('country_english_name');
		$data['countries'] = $this->db->get('country')->result();
		$this->db->select('photo');
		$data['user_photo'] = $this->db->get_where('user', array('id' => $user_id))->row();
		$data['userData']=$this->session->userdata('firstSection');
		return $data;
	}

	//getting data for achievement editing 
	public function editAchiDataGetter($hero_id, $ach_id){
		//checking if the hero service belong to the user 
		$this->db->select('user_id');
		$user_id = $this->db->get_where('hero_citizen', array('hero_id' => $hero_id))->row();
		$user_id = $user_id->user_id;
		if(user_id() != $user_id){
			redirect(base_url().'profile');
		}
		//getting data
		$sql=" SELECT a.*, b.*, d.username, d.lastname, d.photo, d.job FROM hero_citizen a, achievements b, user d
		WHERE a.hero_id = $hero_id 
		AND b.hero_id = $hero_id 
		AND b.ach_id = $ach_id 
		AND a.user_id = d.id ";
		$data['ach'] = $this->db->query($sql)->row();
		$this->db->select('img');
		$data['imgs'] = $this->db->get_where('ach_imgs', array('achiv_id' => $ach_id))->result();
		$data['ach_type'] = $this->db->get('ach_type')->result();
		$this->db->order_by('country_english_name');
		$data['countries'] = $this->db->get('country')->result();
		// __($data);
		// die();
		return $data;
	}

	//getting errors
	public function setErrors(){
		$errors = array (
      'achType'	=> form_error('achType', '<b style="color: red">', '</b>'),
      'Nocker'	=> form_error('Nocker', '<b style="color: red">', '</b>'),
      'achDate'	=> form_error('achDate', '<b style="color: red">', '</b>'),
      'country'	=> form_error('country', '<b style="color: red">', '</b>'),
      'city'		=> form_error('city', '<b style="color: red">', '</b>'),
      'achExp'	=> form_error('achExp', '<b style="color: red">', '</b>'),
      'achTw'		=> form_error('achTw', '<b style="color: red">', '</b>'),
      'error'		=> 0
    );
		return $errors;
	}

	//nationality getter
	public function getNationalities(){
		return $this->db->query('SELECT * FROM nationalities');
	}

	//follow hero section #PE$$
	public function follow($id='',$hero_id=''){
		$this->db->trans_start();
		$insert = array(
			'hero_id'	=>$hero_id,
			'by_user_id'=>$id);
		$this->db->insert('hero_followers',$insert);
		$this->db->trans_complete();
		return $this->db->trans_status();
	}

	//unfollow hero section #PE$$
	public function unfollow($id='',$hero_id=''){
		$this->db->trans_start();
		$delete = array(
			'hero_id'	=>$hero_id,
			'by_user_id'=>$id);
		$this->db->delete('hero_followers',$delete);
		$this->db->trans_complete();
		return $this->db->trans_status();
	}

	//like achievement section #PE$$
	public function like($id='',$ach_id=''){
		$this->db->trans_start();
		$insert = array(
			'ach_id'	=>$ach_id,
			'by_user_id'=>$id);
		$this->db->insert('ach_likes',$insert);
		$this->db->trans_complete();
		return $this->db->trans_status();
	}

	//cancel like achievement section #PE$$
	public function c_like($id='',$ach_id=''){
		$this->db->trans_start();
		$delete = array(
			'ach_id'	=>$ach_id,
			'by_user_id'=>$id);
		$this->db->delete('ach_likes',$delete);
		$this->db->trans_complete();
		return $this->db->trans_status();
	}

	//dislike achievement section #PE$$
	public function dislike($id='',$ach_id=''){
		$this->db->trans_start();
		$insert = array(
			'ach_id'	=>$ach_id,
			'by_user_id'=>$id);
		$this->db->insert('ach_dislikes',$insert);
		$this->db->trans_complete();
		return $this->db->trans_status();
	}

	//cancel dislike achievement section #PE$$
	public function c_dislike($id='',$ach_id=''){
		$this->db->trans_start();
		$delete = array(
			'ach_id'	=>$ach_id,
			'by_user_id'=>$id);
		$this->db->delete('ach_dislikes',$delete);
		$this->db->trans_complete();
		return $this->db->trans_status();
	}

	//activate achievement #PE$$
	public function make_primary($id='', $hero=''){
		$user_id = $this->session->userdata('user_id');
		$this->db->trans_start();
		$this->db->set('active', 0);
		$this->db->where('hero_id', $hero);
		$this->db->where('active', 1);
		$this->db->update('achievements');
		$this->db->set('active', 1);
		$this->db->where('ach_id', $id);
		$this->db->update('achievements');
		$this->db->trans_complete();
		return $this->db->trans_status();
	}
}