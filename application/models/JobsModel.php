<?php

class JobsModel extends CI_Model {

	var $store_salt;
    var $salt_length;
    var $hash_method;

    function __construct() {
        parent::__construct();
        $this->store_salt  = $this->config->item('store_salt');
        $this->salt_length = $this->config->item('salt_length');
        $this->hash_method = $this->config->item('hash_method');
    }
	
	
	  public function jobs_query($id, $page=0, $country_id='', $cat_id='', $search='', $filter='')
    {

        $where = ' ';
        $search = str_replace(' ', '%', $search);
        //$search = mysqli_real_escape_string($search, );
        $search = str_replace("'", "", $search);
        $search = str_replace('"', "", $search);
        $where .= $search ? " OR a.title LIKE '%$search%' " : '';
        $where .= $search ? " OR a.description LIKE '%$search%' " : '';

        //$where .= $search ? " AND fc.english_name LIKE '%$search%' " : '';
		
		$where .= $filter && is_numeric($filter) ? " AND job_type=$filter " : '';
		$today = date('Y-m-d');

    	$sql   	= " SELECT tp.type_name , tp.type_name_ar, c.arabic_name, a.title,a.employer,c.english_name, a.created_at, a.title, a.advertisement_id , 
    					   DATEDIFF(FROM_UNIXTIME(expiration),'$today') diff,
				  		   a.country, can.country_english_name , a.img, a.job_type,a.address,a.expiration
			  		  FROM categories c, categories fc, advertisement a, country can , job_type tp
					 WHERE fc.category_id = $id
			 		   AND a.category_id = c.category_id
			  		   AND can.country_id = a.country
			  		   AND tp.type_id = a.job_type
			 		   AND a.status = 1
			 		   ".($cat_id ? " AND a.category_id=$cat_id " : '').
                        ($country_id ? " AND a.country=$country_id " : '')."
			 		   
			 		   AND (1 $where)
			 		   AND DATEDIFF(FROM_UNIXTIME(expiration),'2017-07-12') > 0
	 				 ORDER BY a.advertisement_id DESC";
       // echo $sql; exit;
        $num_rows = $this->db->query($sql)->num_rows();
        if ($num_rows > 8) {
            $first = $page * 8;

            $sql .= " LIMIT $first, 8";
        }

        return array($this->db->query($sql), $num_rows);
    }



  public function add_job($sub_id, $title, $employer , $skills ,$description , $gender ,$country, $city,  $address ,$job_type, $expiration,$email , $phone ,$user_id, $link='')
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


	  public function apply_job($firstname, $lastname , $massage, $skills , $job_id, $user_id)
    {
    	$applicant_id = $this->db->get_where('advertisement', array('advertisement_id' => $job_id))->row()->user_id;
    	if ($applicant_id == $user_id) {
			return array(0, 'apply_my_dub');
		}
		
		$res = $this->db->get_where('users_apply', array('advertisement_id' => $job_id, 'user_id' => $user_id))->num_rows();
		if ($res) {
			return array(0, 'already_applied');
		}
        if (!$_FILES) {
            return array(0, 0);
        }
		
        $fs_images 	 = array();
        $i			 = 0;
        $logos[]	 = array();
        $errors		 = array();
        $ext		 = array();
        $config['upload_path']   = 'uploads/cv/';
        $path				     = $config['upload_path'];
        $config['allowed_types'] = 'jpg|jpeg|png|pdf|doc|docx';
        $config['max_size'] 	 = '6000';
        $config['overwrite'] 	 = FALSE;
		$config['encrypt_name'] = TRUE; $this->load->library('upload');
		


		
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
                    $fs_images[$i] = $upload_data['file_name'];
                    $i++;
                }
            }	
		}

        if ($errors) {
			//exit;
            return array(0, $errors[0]);
        }
        $this->db->trans_start();

        if (isset($fs_images[0])) {
            $insert = array(
                'cv' 			  	=> $fs_images[0],
                'advertisement_id' 	=> $job_id,
                'user_id'		  	=> $user_id,
                'massage'		  	=> $massage,
				'insert_date'		=> time(),
            );
            $this->db->insert('users_apply', $insert);
			$this->db->delete('user_skills', array('user_id' => $user_id));
       		
       		foreach ($skills as $skill) {
            
            $insert = array (
                'user_id'  => $user_id,
                'skill_id' => $skill
            );
            $this->db->insert('user_skills', $insert);
        }
        }
		
		
        $this->db->trans_complete();
		$res = $this->db->trans_status();
		$url = base_url() . "my_applicants/" . $job_id;
		if ($res) {
			$rows = $this->db->get_where('users_apply', array('advertisement_id' => $job_id, 'sent' => 0));
			$id   = $this->db->get_where('advertisement', array('advertisement_id' => $job_id))->row()->user_id;
			
			$insert = array (
								'op_id' 	=> 6,
								'user_id' 	=> $id,
								'n_text'	=> 'يوجد طلب تقدم جديد لديك',
								'n_text_en'	=> 'You have a new applicant',
								'date'		=> time(),
								'link'		=> $url
							);
			$this->db->insert('notifications', $insert);
			if ($rows->num_rows() >= 5) {
				
				$from_name = $this->config->item('from_name');
				$from_email = $this->config->item('from_email');
				$subject = 'Job apply';
				$send_id = $this->db->get_where('advertisement', array('advertisement_id'=> $job_id))->row()->user_id;
				$me = $this->db->get_where('user', array('id' => $send_id))->row();
				$email = $me->email;
				$members = $email;
				$to_name = $me->username.' '.$me->lastname;
				$message = "jobapply";
				$var1 = $url;
				
	            $sent = $this->prepare_mail($from_name, $from_email, $subject, $members, $to_name, $message, $var1, $user_id);
				$this->db->where(array('advertisement_id' => $job_id, 'sent' => 0));
				$this->db->update('users_apply', array('sent' => 1, 'sent_date' => time()));
			}
		}
        return array($res, 0);
    }
	
	
	
	public function edit_job($ad_id, $sub_id, $title, $employer , $skills ,$description , $gender ,$country, $city,  $address ,$job_type,$email , $phone ,$user_id, $link)
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
	
	  public function my_jobs($user_id ,$page=0)
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
	
	
	
    public function get_categories($cat_id)
    {
        $sql ="select * from  busi_catgo c where c.parent_id = $cat_id";
        $data  = $this->db->query($sql)->result() ;
        return $data;
    }

    private function UR_exists($url){
        $headers=get_headers($url);
        return stripos($headers[0],"200 OK") ? true : false ;
    }

    private function base64ToMyImage($data   , $filenamePath  )
    {
        // echo "$filenamePath <br/>";
        // echo "$newNameNo <br/>";
        // echo "$data";
        //die( $data  );
        if( (strpos($data,'http') !== false)  && (strpos($data,'uploads/businesses') !== false)  ) 
        // already but not edited  
        {
            $filename = $data ;
            if( ! $this->UR_exists($filename)  ) 
                die( $filename .' file not found');

            $filename2 =substr($filename, strpos($filename,'uploads/businesses') , strlen($filename) ); 
            
            if( strpos($data,'logo') !== false) 
                return $filename2;
            else if (strpos($data,'cover') !== false) 
                return $filename2;
            else
                $ext = pathinfo($filename2, PATHINFO_EXTENSION);
            $NEW = $filenamePath.".".$ext ;
            rename( $filename2   ,  $NEW);
            return  $NEW;
        }
        //1
        if (preg_match('/^data:image\/(\w+);base64,/', $data, $type)) {
            $data = substr($data, strpos($data, ',') + 1);
            $type = strtolower($type[1]); // jpg, png, gif

            if (!in_array($type, [ 'jpg', 'jpeg', 'gif', 'png' ])) {
                throw new \Exception('invalid image type');
            }
            $data = base64_decode($data);
            if ($data === false) {
                throw new \Exception('base64_decode failed');
            }
        } else {
            throw new \Exception('did not match data URI with image data');
        }
        $fileNameFullPath = $filenamePath.".{$type}";
        file_put_contents( $fileNameFullPath, $data);

        return $fileNameFullPath;
    }
    private function addUpdateLogoCoverImages($businesId , $allsections , $dir_path )
    {
        $res1 = $res2= [];
        $path =  'uploads/businesses/' . $dir_path ; 
        if (!file_exists( $path )) 
            mkdir( $path, 0755, true);
        $logo_str = $allsections['business_section3']['logo_img'];
        $cover_str = $allsections['business_section3']['cover_img'];

        if ( isset($logo_str))  
        {

            $f = $this->base64ToMyImage($logo_str , $path."/logo"   );
            $update = array ('logo'  => $f);
            $this->db->where('id', $businesId);
            $this->db->update('businesses', $update);
            $res1 = $this->db->affected_rows();
        }
        if ( isset($cover_str))   
        {
            $f = $this->base64ToMyImage($cover_str , $path."/cover"  );
            $update = array ('cover'  => $f);
            $this->db->where('id', $businesId);
            $this->db->update('businesses', $update);
            $res2 = $this->db->affected_rows();
        }
        return [$res1, $res2];
    }
    private function addUpdateImages($businesId , $allsections , $dir_path ) //private
    {

        try {
                 $files = []; $res = [];
                $path =  'uploads/businesses/' . $dir_path ; 
                if (!file_exists( $path )) 
                    mkdir( $path, 0755, true);
                /// ------- write file -----------------
                $imgs_str = $allsections['business_section3']['MyImgsData'];
                 
                if ( isset($imgs_str) &&   trim($imgs_str) != '' )  
                {
                    $imgs = explode("|", $imgs_str  ) ;
                    for ($i=0; $i < count($imgs); $i++) { 
                         if($imgs[$i] != "" ){
                            $fname =  bin2hex(openssl_random_pseudo_bytes(10)); 
                            $f = $this->base64ToMyImage($imgs[$i] , $path."/". $fname   );
                            array_push($files,$f );
                        }
                    }
                    // die('--------');
                }else{
                    die("uploaded images not found");
                    throw new \Exception('uploaded images not found');
                }
                ///------------ DB DELETE OLD  ------------
                $oldfiles = $this->db->get_where('busi_imgs', array('busi_id' => $businesId))->row();
                if(isset($oldfiles))
                {
                    foreach ($oldfiles as  $file) {
                        unlink($file->img);
                    }
                }
                $this->db->delete('busi_imgs', array('busi_id' => $businesId));
                ///------------ DB Insert------------
                //print_r($files) ; exit;
                foreach ($files as  $file_val) {
                    $insert = array (  'busi_id'  => $businesId   ,   'img'  => $file_val  );
                    $res = $this->db->insert('busi_imgs', $insert);  
                }
                return $res;
            }
             catch (Exception $e) {
            throw new \Exception(  $e .' uploaded images not found');
        }
    }



	public function bus_index()
	{
		    $sql_bus = "
               SELECT b.id , b.*, ci.* ,co.* , cat.*  FROM businesses b  
                inner join city ci on ( ci.city_id = b.cityId)
                inner join country  co on ( co.country_id = b.countryId )   
                left join busi_catgo_fks catfks on ( catfks.busi_id = b.id)
                left join categories  cat on ( cat.category_id  = catfks.cat_id)
                left join busi_gen_feat_fks genfks on ( genfks.busi_id = b.id)
                left join busi_general_features gen on ( genfks.gf_id = gen.id)
                left join busi_datetimes dtm on ( dtm.busi_id = b.id)
                left join  busi_catgo_parents catp on ( catp.id = b.category_prnt )  
                left join  busi_catgo cats on ( cats.parent_id = catp.id)
                where 
                b.status = 0 ";
//                 
                	// $t = $this->db->query($sql_bus)->result();
			// echo "<pre>";
			// print_r($t);
			// exit;	

        //prefered countries with it's id
        $countries  = array(
            'Syria'                 => '213',
            'Turkey'                => '223',
            'United Arab Emirates'  => '229',
            'Lebanon'               => '121',
            'Saudi Arabia'          => '191'
        );

        //get user country 
        $res = $this->get_user_country();
        if(!empty($res)){
            $country = $res->country_id;
            $name = $res->country_english_name;
        }else{
            $country = 213;
            $name = "Syria";
        }

        //get user's country data (ach | jobs)
        if(in_array($country, $countries))
            $i = 1;
        else{
            $sql_ash = $sql_ash." AND a.ach_country = $country LIMIT 4 ";
            $data['achs'] = $this->db->query($sql_ash)->result();
           
           
            $sql_job = $sql_job." AND a.country = $country 
                ORDER BY a.advertisement_id DESC
                LIMIT 6  ";
            $data['jobs'] = $this->db->query($sql_job)->result();
            $data['country'] = $data['country_j'] = $name;
			
			$sql_bus = $sql_bus." AND b.countryId = $country 
               GROUP BY b.id   LIMIT 8";
            $data['bus'] = $this->db->query($sql_bus)->result();
            
			
			
            $i = 2;
        }
		 $data['bus_cat']=[];
        foreach ($countries as $key => $value){
        	
		//	echo "$value";exit;
            $query_bus = $sql_bus." AND b.countryId = $value 
              GROUP BY b.id   LIMIT 8";
            $d  = 'bus'.$i;
            if($country==$value)
                $d  = 'bus';
            $$d = $this->db->query($query_bus)->result();
			// echo "<pre>";
			// print_r($$d);
			// echo "=========";
            if(empty($$d))
                continue;
            $data[$d] = $$d;
			 foreach($data[$d] as $bus){
                $bus_id =$bus->id;
                $sql = "SELECT * FROM  busi_catgo s,  busi_catgo_fks ass 
                				 WHERE ass.busi_id=$bus_id 
                				 AND ass.cat_id =s.id 
                				 LIMIT 3 ";
                $data['bus_cat'][$bus_id] = $this->db->query($sql)->result();
            }
            if($country==$value){
                $data['country']=$key;
                continue;
            }
            else
                $data['countryb'.$i]=$key;
            if($i == 3)
                break;
            $i++;
        }
		return $data;
	}

	  //get user country
    public function get_user_country(){
        $user_id = user_id();
        if($user_id){
            $this->db->select('country');
            $country = $this->db->get_where('user', array('id' => $user_id))->row()->country;
            $this->db->select('country_id, country_english_name');
            $res = $this->db->get_where('country', array('country_id' => $country))->row();
        }
        if(!isset($country) || !empty($country)){
            $this->db->select('country_id, country_english_name');
            $res = $this->db->get_where('country', array('country_arabic_name' => $this->session->userdata('logged_country')))->row();
        }
        return $res;
    }
    private function addUpdateTimes($businesId ,$allsections)
    {
        $this->db->delete('busi_datetimes', array('busi_id' => $businesId));
        ///------------
       for ($i=1; $i <=  $allsections['business_section3']['timesCount'] ; $i++) { 
            $insert = array (
            'busi_id'  => $businesId   ,
            'day'  =>  $allsections['business_section3']['day'.$i] ,
            'timefrom'  =>  $allsections['business_section3']['timeFrom'.$i] ,
            'timeto'  =>  $allsections['business_section3']['timeto'.$i] , );
             $this->db->insert('busi_datetimes', $insert); 
        }
    return;
    }
    private function addUpdateFaqs($businesId,$allsections)
    {
        $this->db->delete('busi_faq', array('busi_id' => $businesId));
        ///------------
        for ($i=1; $i <=  $allsections['business_section3']['faqsCount'] ; $i++) { 
            $insert = array (
            'busi_id'  => $businesId   ,
            'ask'  =>  $allsections['business_section3']['question'.$i] ,
            'answer'  =>  $allsections['business_section3']['answer'.$i] , );
            $this->db->insert('busi_faq', $insert);   
        }
     return ;
    }
    private function addUpdateCategory($businesId,$allsections)
    {
        $this->db->delete('busi_catgo_fks', array('busi_id' => $businesId));
        //return $allsections['business_section2']['category'] ;
        ///------------
        foreach ( $allsections['business_section2']['category_sub'] as $cat ) {
            $insert = array (  'busi_id'  => $businesId   ,   'cat_id'  => $cat  );
            $this->db->insert('busi_catgo_fks', $insert);   
        }
        return ;
    }
    private function addUpdateGeneralFeatures($businesId,$allsections)
    {
        if( isset($allsections['business_submit']['genfeat']) ) 
        {
                $this->db->delete('busi_gen_feat_fks', array('busi_id' => $businesId));
                ///------------
                foreach ($allsections['business_submit']['genfeat'] as $genfeat ) {
                    $insert = array (  'busi_id'  => $businesId   ,   'gf_id'  => $genfeat  );
                    $this->db->insert('busi_gen_feat_fks', $insert);   
                }
        }
     return ;
    }
    
    public function add_new_business( $userId,$allsections ,$isEdit ,$busi_id = null)
    {
        //print_r($allsections); return ;
        $insert = array (
        'user_id'  => $userId   ,
        'name'  =>  $allsections['business_section2']['name'],
        'countryId'  =>  $allsections['business_section2']['country'],
        'cityId'  =>  $allsections['business_section2']['city'],
        'province'  =>  $allsections['business_section2']['province'],
        'postal'  =>  $allsections['business_section2']['postal'],
        'address'  =>  $allsections['business_section2']['address'],
        'address_office'  =>  $allsections['business_section2']['addressOffice'],
        'work_phone'  =>  $allsections['business_section2']['workPhone'],
        'mobile_phone'  =>  $allsections['business_section2']['mobilePhone'],
        // 'category'  =>  $allsections['business_section2']['category'],
        'category_prnt'  =>  $allsections['business_section2']['category_prnt'],
        'webaddress'  =>  $allsections['business_section2']['webAddress'],
        'work_email'  =>  $allsections['business_section2']['emailAddress'],

        'isOwner'  =>  $allsections['business_section3']['isOwner'],
        'about'  => $allsections['business_section3']['about'],
        'facebook'  => $allsections['business_section3']['Fb'],
        'twitter'  => $allsections['business_section3']['Tw'],
        'linkedin'  => $allsections['business_section3']['lnkin'],
        'pinterest'  => $allsections['business_section3']['Pinterest'],

        'price'  => $allsections['business_submit']['Price' ],
        'parking'  => $allsections['business_submit']['Parking' ],
        'wi_fi'  => $allsections['business_submit']['WiFi' ],
        'smoking'  => $allsections['business_submit']['Smoking' ],
        'meals_served'  => $allsections['business_submit']['MealsServed' ],
        'alcohol'  => $allsections['business_submit']['Alcohol' ],
        'music'  => $allsections['business_submit']['Music' ],
        'call_action_btn'  => $allsections['business_submit']['calltype' ],
        'call_action_weblink'  => $allsections['business_submit']['weblink' ],
        );
        $res = false;
        //print_r([ 1, 2, 3, $isEdit ]); exit;
        //print_r($allsections['business_section2']);exit;
        if(  $isEdit == 0)
            {
                //array_push( $insert , [  'logo'  => null, 'cover'  => null]);
               $this->db->insert('businesses', $insert); 
                $businesId = $this->db->insert_id();  
				//
            }
        else{  //$busi_id 
        	
            $update =  $insert  ;  
            $this->db->where('id',$busi_id);
            $this->db->update('businesses', $update);   
            $businesId = $busi_id;    
			
        }
       if($businesId > 0 ){
            
            $data = $allsections;
            $this->addUpdateCategory( $businesId , $data); //$businesId
            $this->addUpdateTimes($businesId ,  $allsections ); //$businesId
            $this->addUpdateFaqs($businesId ,$data);
            $this->addUpdateGeneralFeatures($businesId ,$data);
			
            $dir_path = $userId."_".$businesId ;
            $this->addUpdateLogoCoverImages($businesId  , $data , $dir_path);
            $this->addUpdateImages( $businesId  , $data , $dir_path );  
            //echo "done ..." ; return ; 
            $res = true;
			
        }else{
           /// NOT WORKED
            throw new \Exception('business inseting failed');
         exit;
        }
        return  $res ;
    }
    public function create() /// get initially data
    {
        //-------------- Step 1 -----------------
    	$sql = "SELECT *  FROM country	 ORDER BY country_english_name";
		$data['countries'] = $this->db->query($sql);
		$u_id=$this->session->userdata('user_id');
		$u = $this->db->get_where('user', array('id' => $u_id))->row();
		$data['user_photo'] = $u->photo;
		$data['u_id'] = $u_id;
		$data['userData']=$this->session->userdata('firstSection');
        $sql = "SELECT *  FROM busi_catgo_parents   ORDER BY name";
        $data['categories'] = $this->db->query($sql);
        //-------------- Step 2 -----------------
        //-------------- Step 3 -----------------
        $sql = "SELECT *  FROM busi_general_features  ";
        $data['generalFeatures'] = $this->db->query($sql);
		return $data;
    }

    public function edit($busin_id)
    {
        //echo $busin_id; exit;
        $data = $this->create() ;
        ///--------- Busin
        $sql = "SELECT *  FROM businesses  where id =".$busin_id ;
        $data['busin_data']  = $this->db->query($sql)->result();
        //------------------busi_datetimes
        $sql = "SELECT *  FROM busi_datetimes  where busi_id =".$busin_id ;
        $data['busin_datetimes'] = $this->db->query($sql)->result();
        //------------------busi_faq
        $sql = "SELECT *  FROM busi_faq  where busi_id =".$busin_id ;
        $data['busin_faq'] = $this->db->query($sql)->result();
         //------------------busi_catgo_fks
        $sql = "SELECT *  FROM busi_catgo_fks  where busi_id =".$busin_id ;
        $arr = $this->db->query($sql)->result(); $cat_str = ''; 
        foreach ($arr as  $cat) 
            $cat_str .= $cat->cat_id . ',' ;
        $data['busin_catgo'] = $cat_str;
        //------------------gen_feat
        $sql = "SELECT *  FROM busi_gen_feat_fks  where busi_id =".$busin_id ;
        $data['busin_genfeat'] = $this->db->query($sql)->result();
        //------------------busi_imgs
        $sql = "SELECT *  FROM busi_imgs  where busi_id =".$busin_id ;
        $data['busin_imgs'] = $this->db->query($sql)->result();
        return $data;
    }
    public function get_nonvalid_errors($part_num){
        $va_current  =  $part_num - 1 ;
        switch ($va_current) {
            case '1':
            return array (
                'name' =>  form_error('name', '<b style="color: red">', '</b>'),
                'address' =>  form_error('address', '<b style="color: red">', '</b>'),
                'addressOffice' =>  form_error('addressOffice', '<b style="color: red">', '</b>'),
                'province' =>  form_error('province', '<b style="color: red">', '</b>'),
                'postal' =>  form_error('postal', '<b style="color: red">', '</b>'),
                'workPhone' =>  form_error('workPhone', '<b style="color: red">', '</b>'),
                'mobilePhone' =>  form_error('mobilePhone', '<b style="color: red">', '</b>'),
                'webAddress' =>  form_error('webAddress', '<b style="color: red">', '</b>'),
                'emailAddress' =>  form_error('emailAddress', '<b style="color: red">', '</b>')  ,
                'country' => form_error('country', '<b style="color: red">',
                                                 '</b>') ,
                'city' => form_error('city', '<b style="color: red">',
                                                 '</b>') ,    
                'category_sub' => form_error('category_sub[]', '<b style="color: red">',
                                                 '</b>') ,
                'category_prnt' => form_error('category_prnt', '<b style="color: red">',
                                                 '</b>') ) ;
            break;
            case '2':
            return array (
                'day' =>  form_error('day1', '<b style="color: red">', '</b>'),
                'timeFrom' =>  form_error('timeFrom1', '<b style="color: red">', '</b>'),
                'timeto' =>  form_error('timeto1', '<b style="color: red">', '</b>'),
                'question' =>  form_error('question1', '<b style="color: red">', '</b>'),
                'answer' =>  form_error('answer1', '<b style="color: red">', '</b>'),
                'about' =>  form_error('about', '<b style="color: red">', '</b>'),
                'MyImgsData' =>  form_error('MyImgsData', '<b style="color: red">', '</b>'),
                // no need
                // 'Fb' =>  form_error('Fb', '<b style="color: red">', '</b>'),
                // 'Tw' =>  form_error('Tw', '<b style="color: red">', '</b>'),
                // 'lnkin' =>  form_error('lnkin', '<b style="color: red">', '</b>'),
                // 'Pinterest' =>  form_error('Pinterest', '<b style="color: red">', '</b>'),
                 );
            break;
            case '3':
            return [];//array (    // no need
                // 'Price' =>  form_error('Price', '<b style="color: red">', '</b>'),
                // 'GeneralFeatures' =>  form_error('GeneralFeatures', '<b style="color: red">', '</b>'),
                // 'Parking' =>  form_error('Parking', '<b style="color: red">', '</b>'),
                // 'WiFi' =>  form_error('WiFi', '<b style="color: red">', '</b>'),
                // 'Smoking' =>  form_error('Smoking', '<b style="color: red">', '</b>'),
                // 'MealsServed' =>  form_error('MealsServed', '<b style="color: red">', '</b>'),
                // 'Alcohol' =>  form_error('Alcohol', '<b style="color: red">', '</b>'),
                // 'Music' =>  form_error('Music', '<b style="color: red">', '</b>'),
                // 'weblink' =>  form_error('weblink', '<b style="color: red">', '</b>'), );
            break;
            default:
                return array ();
            break;
        }
        return array ();
    }
   
    public function check_validation_rules($part_num  , $is_edit )
    {
        $va_current  =  $part_num - 1 ;
         switch ($va_current ) {
            case '1':
                if( $is_edit == 1)
                    $this->form_validation->set_rules('name'  , trans('business-name'),'required|trim|alpha_numeric_spaces'); 
                else
                    $this->form_validation->set_rules('name'  , trans('business-name'),'required|trim|alpha_numeric_spaces|is_unique[businesses.name]'); 
                $this->form_validation->set_rules('province', trans('business-province'),'required|trim'); 
                $this->form_validation->set_rules('postal' ,  trans('business-postal'),'required|trim'); 
                $this->form_validation->set_rules('workPhone',    trans('business-workPhone'),'required|trim'); 
                $this->form_validation->set_rules('mobilePhone',  trans('business-mobilePhone'),'trim'); 
                $this->form_validation->set_rules('emailAddress', trans('business-emailAddress'),'required|trim|valid_email');
                $this->form_validation->set_rules('addressOffice',trans('business-addressOffice'),'required|trim');  
                $this->form_validation->set_rules('address',
                     trans('business-address'),'required|trim');  

                $this->form_validation->set_rules('country',trans('business-country'),'required|trim');  
                $this->form_validation->set_rules('city',trans('business-city'),'required|trim');  
                $this->form_validation->set_rules('category_prnt',trans('business-category_prnt'),'required|trim');  
                $this->form_validation->set_rules('category_sub[]',trans('business-category'),'required');  
                 $this->form_validation->set_rules('webAddress' ,  trans('business-webAddress'),'required|trim'); 
                break;
            case '2':
                $this->form_validation->set_rules('day1' ,      trans('business-day'),'required|trim'); 
                $this->form_validation->set_rules('timeFrom1' , trans('business-timeFrom'),'required|trim');
                $this->form_validation->set_rules('timeto1' ,   trans('business-timeto'),'required|trim'); 
                $this->form_validation->set_rules('question1' , trans('business-question'),'required|trim');
                $this->form_validation->set_rules('answer1' ,   trans('business-answer'),'required|trim'); 
                $this->form_validation->set_rules('about' ,    trans('business-about'),'required|trim'); 
                $this->form_validation->set_rules('MyImgsData'  ,     trans('business-imgs'),'required|trim'); 

                //  >>>>>> JS Checked cover & logo <<<<<<

                // $this->form_validation->set_rules('cover_img'  ,     trans('business-about'),'required|trim'); 
                // $this->form_validation->set_rules('logo_img'  ,     trans('business-about'),'required|trim'); 
                /// no need to check 
                // $this->form_validation->set_rules('Fb' ,       trans('business-Fb'),'trim'); 
                // $this->form_validation->set_rules('Tw' ,       trans('business-Tw'),'trim'); 
                // $this->form_validation->set_rules('lnkin' ,    trans('business-lnkin'),'trim'); 
                // $this->form_validation->set_rules('Pinterest', trans('business-Pinterest'),'trim');
                break;
            case '3':
            return true;
                // $this->form_validation->set_rules('Price' ,      trans('business-Price'),'required|trim'); 
                // $this->form_validation->set_rules('Parking' ,    trans('business-Parking'),'required|trim'); 
                // $this->form_validation->set_rules('WiFi' ,       trans('business-WiFi'),'required|trim'); 
                // $this->form_validation->set_rules('Smoking' ,    trans('business-Smoking'),'required|trim'); 
                // $this->form_validation->set_rules('MealsServed', trans('business-MealsServed'),'required|trim'); 
                // $this->form_validation->set_rules('Alcohol' ,    trans('business-Alcohol'),'required|trim'); 
                // $this->form_validation->set_rules('Music' ,      trans('business-Music'),'required|trim'); 
                // $this->form_validation->set_rules('weblink' ,    trans('business-weblink'),'required|trim'); 
                // $this->form_validation->set_rules('GeneralFeatures' , trans('business-GeneralFeatures'),'required|trim'); 
                break;
            default:
                // do nothing
                break;
        }
        // echo "<pre>  " .  $va_current ;
        // echo $this->form_validation->run();
        // print_r( validation_errors() );
        // exit;
      return $this->form_validation->run();
    }

 /// =========================== Search PAGE ============================
    public function checkbyexactname($name)
    {
        $sql = "select * from businesses  b 
                where   Lower(REPLACE( b.name, ' '  , '')) =
                        Lower(REPLACE( '$name' , ' ', '')) limit 1 " ;
        $res = $this->db->query($sql)->result();  
        return  $res;
    }
    public function checksimilarbyname($name)
    {
        $sql = "select * from businesses  b 
                where Lower(b.name) like Lower( '%".$name."%') limit 3" ;
        $res = $this->db->query($sql)->result();  
        return $res;
    }
    /// =========================== FILTER PAGE ============================
     ///----------------- Filter Page ------------------------
    private function getGenFeats()
    {
        $sql = "  SELECT * from busi_general_features";
        return $this->db->query($sql)->result();
    }
    private function getBusinessCategories()
    {
       $sql = "select cat.* 
                from categories cat 
                inner join
                busi_catgo_fks f  on ( cat.category_id  = cat_id)
                group by cat.category_id" ;
        return $this->db->query($sql)->result();   
    }
    private function getBusinessCities($keyname)
    {
        $sql = "SELECT concat(concat(ci.city_english_name , ' - ') , co.country_english_name )
                as city
                FROM country  co  
                inner join businesses b  on ( co.country_id = b.countryId )
                inner join city ci on ( ci.city_id = b.cityId)
                WHERE  1=1 
                 and ( Lower( b.province )  like Lower('%".$keyname."%') or 
                            Lower(b.address) like Lower( '%".$keyname."%')  or 
                            Lower(b.address_office  ) like Lower( '%".$keyname."%')  or 
                            Lower(ci.city_english_name) like Lower( '".$keyname."%') or 
                            Lower(co.country_english_name) like Lower( '".$keyname."%') 
                            ) ";
        return $this->db->query($sql)->result();
    }
    private function getCategoriesBusiId($bid)
    {
        $sql = "  SELECT * from  "
               ." busi_catgo_fks 
                 inner join categories  cat on ( cat.category_id  = cat_id)
                 WHERE  busi_id = '".$bid."'  ";
        return $this->db->query($sql)->result(); 
    }
    private function getGenFeatsByBusiId($bid)
    {
        $sql = "  SELECT * from  "
               ." busi_gen_feat_fks  
                  inner join busi_general_features gen on ( gf_id = gen.id)
                WHERE busi_id = '".$bid."' "
                ; //i
        return $this->db->query($sql)->result(); 
    }
    public function get_jobs_cities($name='')
    {
       $sql  = 'select ct.city_id as id , ct.city_english_name as name , c.country_english_name as cntry
                from city ct left join country c on (ct.country_id = c.country_id)' . 
                'where city_english_name like "%'.$name.'%"  limit 7;';
        $res =  $this->db->query($sql)->result();
        echo json_encode(  $res    ); 
        return;
    }
    public function getCitySearched($cid = 673)
    {
        $sql  = 'select ct.city_id as id , ct.city_english_name as name , c.country_english_name as cntry
                 from city ct left join country c on (ct.country_id = c.country_id)' . 
                'where city_id ='.$cid;
        
        $res =  $this->db->query($sql)->result();
        return $res ; 
    }
    public function  getMainCategories()
    {
        $sql = "select * 
                from busi_catgo_parents 
                where active = 1 " ;
        return $this->db->query($sql)->result();  
    }
    public function findQuerey($name='')
    {
        $sql  =  "select * from advertisement  where title like '%".$name."%' oRDER BY created_at DESC limit 5;";
        $b  = $this->db->query($sql)->result();
        $sql2 =  "select * from categories WHERE parent_category_id = 2 and  english_name like '%".$name."%' limit 5;";
        $b2  = $this->db->query($sql2)->result();
       
        
        $res = [ 'jobs' => $b , 'cats' => $b2  ];
        echo json_encode(  $res);
        return ;
    }
    private function getNearestCities($cid)
    {
        $sql = "select city_id, city_english_name from (select co.country_id
        from country co 
        left join  city  c on (  c.country_id = co.country_id )
        where   c.city_id =".$cid." ) as Idcountry
        inner join city cc on ( cc.country_id = Idcountry.country_id )
        where   cc.city_id !=".$cid."
        limit 5" ;
        return $this->db->query($sql)->result(); 
    }
    public function getfilters( $cityId = 673 ) // 673 as test
    {   
        $arr['Categories']= $this->getBusinessCategories() ;
        $arr['Cities']= $this->getBusinessCities('') ; //??
        $arr['GenFeats'] = $this->getGenFeats();
        $arr['NearestCities'] =$this->getNearestCities($cityId);
        //  echo "<pre>";
        // print_r($arr);   die("--");
        return $arr;
    }
    public function getAllfilterdData( $filters = array(),$sortBy = array("bm" , 1) )
    {
        $one=[];$data=[];
        $businesses = $this->getdatafilterd($filters , $sortBy);
        for ($i=0; $i < count($businesses); $i++) { 
            $id = $businesses[$i]->id;
            $busi = $businesses[$i];
            $one["Busi"] = $busi;
            $gens = $this->getGenFeatsByBusiId($id);
            $one["GenFeat"] = $gens;
            $cats = $this->getCategoriesBusiId($id);
            $one["Cats"] = $cats;
            $data[$i]= $one;
        }
        return $data;
    }
    // cntyflag categories , Address , name , id
    private function getdatafilterd( $filters = array(),$sortBy = array("bm" , 1) )
    {   
            // echo "<pre>";
            // print_r($filters);
            // die("=---");
            $sql_category  = "";
            if(isset($filters['categoryFind'])) 
            {
                $key = $filters['categoryFind']; //die($key) ;
                $sql_category  =" and  ( Lower( catp.name) like Lower( '%".$key."%') or  Lower(cats.name) like Lower('%".$key."%') ) ";
            }
            $sql_near = "";
            if(isset($filters['cityNear'])) 
            {
                $sql_near=" and ci.city_id =".$filters['cityNear'];
            }
            $sql_price = "";
            if(isset($filters['price'])) 
            {
                $sql_price = " and b.price = '".$filters['price']."' ";
            }
            $sql_feat = "";
            if(isset($filters['featureId'])) 
            {
                $sql_feat  = "  and  gen.id ='". $filters['featureId'] ."' " ;
            }
            $sql_isopned = "";//$sql_isopned = "  and b.active = 0 ";
            if(isset($filters['opened'])) 
            {
                $sql_isopned = " and (dtm.day = DATE_FORMAT(  NOW() , '%a' ) and dtm.timefrom <=  CURRENT_TIMESTAMP and dtm.timeto >=  CURRENT_TIMESTAMP )" ; 
            }
            $sql_group = " group by b.id ";
            $sql_order = " order by b.id ";
            if(isset($sortBy) && $sortBy[0] !=  "bestmatch" )
            {
                $sql_order = " order by  " . $sortBy[0] ;
            }
            $sql = "
               SELECT b.* , ci.* ,co.* , cat.*  FROM businesses b  
                inner join city ci on ( ci.city_id = b.cityId)
                inner join country  co on ( co.country_id = b.countryId )   
                left join busi_catgo_fks catfks on ( catfks.busi_id = b.id)
                left join categories  cat on ( cat.category_id  = catfks.cat_id)
                left join busi_gen_feat_fks genfks on ( genfks.busi_id = b.id)
                left join busi_general_features gen on ( genfks.gf_id = gen.id)
                left join busi_datetimes dtm on ( dtm.busi_id = b.id)
                left join  busi_catgo_parents catp on ( catp.id = b.category_prnt )  
                left join  busi_catgo cats on ( cats.parent_id = catp.id)
                where 
                b.status = 0
            ";
            $sql .= $sql_category . $sql_near  .   $sql_price . $sql_feat . $sql_isopned ;
            $sql .= $sql_group;
            $sql .= $sql_order;
            //die($sql);
        return $this->db->query($sql)->result();
    }
    
    
    public function profile_data($busin_id='')
    {
    	$sql = "SELECT *  FROM businesses  where id =".$busin_id ;
        $data['busin_data'] = $c = $this->db->query($sql)->row();
        
        
     	$cityId = $c->cityId;
        
        $sql = "SELECT * FROM  country c , city ci where c.country_id = ci.country_id  
        										   AND city_id=$cityId ";
         $data['countries'] = $this->db->query($sql)->row();
       
        //------------------busi_datetimes
        $sql = "SELECT *  FROM busi_datetimes  where busi_id =".$busin_id ;
        $data['busin_datetimes'] = $this->db->query($sql)->result();
        //------------------busi_faq
        $sql = "SELECT *  FROM busi_faq  where busi_id =".$busin_id ;
        $data['busin_faq'] = $this->db->query($sql)->result();
         //------------------busi_catgo_fks
        $sql = "SELECT name  FROM busi_catgo_fks bcf , busi_catgo bc 
        					 WHERE bcf.busi_id =".$busin_id ."
        					 AND bc.id = bcf.cat_id" ;
        $arr = $this->db->query($sql)->result(); 
        $cat_str = ''; 
        foreach ($arr as  $cat) 
            $cat_str .= $cat->name . ',' ;
        $data['busin_catgo'] = $cat_str;
		
        //------------------gen_feat
        $sql = "SELECT *  FROM busi_gen_feat_fks  where busi_id =".$busin_id ;
        $data['busin_genfeat'] = $this->db->query($sql)->result();
        //------------------busi_imgs
        $sql = "SELECT *  FROM busi_imgs  where busi_id =".$busin_id ;
        $data['busin_imgs'] = $this->db->query($sql)->result();
        return $data;
    	
        
    }
    // private function getGenFeats()
    // {
    //     $sql = "  SELECT * from busi_general_features";
    //     return $this->db->query($sql)->result();
    // }
    // private function getCategoriesBusiId($bid)
    // {
    //     $sql = "  SELECT * from  "
    //            ." busi_catgo_fks 
    //              inner join categories  cat on ( cat.category_id  = cat_id)
    //              WHERE  busi_id = '".$bid."'  ";
    //     return $this->db->query($sql)->result(); 
    // }
    // private function getGenFeatsByBusiId($bid)
    // {
    //     $sql = "  SELECT * from  "
    //            ." busi_gen_feat_fks  
    //               inner join busi_general_features gen on ( gf_id = gen.id)
    //             WHERE busi_id = '".$bid."' "
    //             ; //i
    //     return $this->db->query($sql)->result(); 
    // }
    // public function getfilters( )
    // {    
    //     $arr['GenFeats'] =$this->getGenFeats();
    //     return $arr;
    // }
    // public function getAllfilterdData( $filters = array(),$sortBy = array("bestmatch" , 1) )
    // {
    //     $one=[];$data=[];
    //     $businesses = $this->getdatafilterd($filters , $sortBy);
    //     for ($i=0; $i < count($businesses); $i++) { 
    //         $id = $businesses[$i]->id;
    //         $busi = $businesses[$i];
    //         $one["Busi"] = $busi;
    //         $gens = $this->getGenFeatsByBusiId($id);
    //         $one["GenFeat"] = $gens;
    //         $cats = $this->getCategoriesBusiId($id);
    //         $one["Cats"] = $cats;
    //         $data[$i]= $one;
    //     }
    //     return $data;
    // }
    // // cntyflag categories , Address , name , id
    // private function getdatafilterd( $filters = array(),$sortBy = array("bestmatch" , 1) )
    // {
    //     $sql_category  = "";
    //     if(isset($filters['categoryFind'])) 
    //     {
    //         $sql_category  = " and Lower(cat.english_name) like Lower('%".
    //                                     $filters['categoryFind']."%') ";
    //     }
    //     $sql_near = "";
    //     if(isset($filters['cityNear'])) 
    //     {
    //         $sql_near=" and ( Lower( b.province )  like Lower('%".$filters['cityNear']."%') or 
    //                     Lower(b.address) like Lower( '%".$filters['cityNear']."%')  or 
    //                     Lower(b.address_office  ) like Lower( '%".$filters['cityNear']."%')  or 
    //                     Lower(ci.city_english_name) like Lower( '".$filters['cityNear']."%') or 
    //                     Lower(co.country_english_name) like Lower( '".$filters['cityNear']."%') 
    //                     ) ";
    //     }
    //     $sql_price = "";
    //     if(isset($filters['price'])) 
    //     {
    //         $sql_price = " b.price = '".$filters['price']."' ";
    //     }
    //     $sql_feat = "";
    //     if(isset($filters['featureId'])) 
    //     {
    //         $sql_feat  = "  and  gen.id ='". $filters['feature'] ."' " ;
    //     }
    //     $sql_isopned = "";
    //     if(isset($filters['opened'])) 
    //     {
    //         $sql_isopned = "  and b.active = 0 ";

    //     }
    //     $sql_group = " group by b.id ";
    //     $sql_order = " order by b.id ";
    //     if(isset($sortBy) && $sortBy[0] !=  "bestmatch" )
    //     {
    //         $sql_order = " order by  " . $sortBy[0] ;
    //     }
    //     $sql = "
    //        SELECT b.* , ci.* ,co.* FROM businesses b  
    //         inner join city ci on ( ci.city_id = b.cityId)
    //         inner join country  co on ( co.country_id = b.countryId )   
    //         left join busi_catgo_fks catfks on ( catfks.busi_id = b.id)
    //         left join categories  cat on ( cat.category_id  = catfks.cat_id)
    //         left join busi_gen_feat_fks genfks on ( genfks.busi_id = b.id)
    //         left join busi_general_features gen on ( genfks.gf_id = gen.id)
    //         where 
    //         b.status = 0
    //     ";
    //     $sql .= $sql_category . $sql_near  .   $sql_price . $sql_feat . $sql_isopned ;
    //     $sql .= $sql_group;
    //     $sql .= $sql_order;
    // return $this->db->query($sql)->result();
    // }
}





