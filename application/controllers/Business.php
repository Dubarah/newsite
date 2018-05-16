<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Business extends CI_Controller
{

    function __construct() {
        parent::__construct();
        need_login();
        check_lang();
        $this->session->set_userdata('this_url', current_url());
        $this->load->model('BusinessModel');
    }
    public function index()
	
    {	 $mainCats = $this->getBusinessMainCategories();
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
        
        $data = array( "filters" => $filters ,
          'catg_search'=> $cat ,  'city_search'=> $city,
          "businesses" => $businesses , 'mainCats' => $mainCats);
    	
    	$this->load->view('business/index' ,$data);	
    }

  ///=================== Filter Searches ============
    public function  getBusinessMainCategories()
    {
        return $this->BusinessModel->getMainCategories();
    }
    public function get_busin_cities()
    {			$data = '';
    			if($this->input->post('val')){
    				$name = $this->input->post('val');
       				$data = $this->BusinessModel->get_busin_cities($name );
				}
       return $data ; 
    }

    public function get_busin_findedcategory()
    {
    	$data = '';
    			if($this->input->post('val')){
    				$name = $this->input->post('val');
					
				
       				$data = $this->BusinessModel->findQuerey($name );
				}
    	
         return $data;
    }
    ///=================== Search ============

    public function business_checkbyname($name = "")
    {
        // $name = $this->input->get('name');
        $name =  str_replace('%20', " ", $name );
        $res =  $this->BusinessModel->checkbyexactname( trim( $name) );
        if( count($res) == 0 ){
             echo  json_encode( [ 1 ,"Go ahead" , [] ] ); return; 
        } 
        else{
            if( count($res) == 1 ) 
            {   echo  json_encode(
                [ 0 ,"Sorry this name exist - Please change some letter" , [] ] );return; 
            }else
            {
                $res =  $this->BusinessModel->checksimilarbyname( trim( $name) );
                if(count($res) > 0) {
                    $list = [];
                    foreach ($res as $other) {
                        array_push( $list,  $other );
                    }
                    echo  json_encode( [ 1 , "Simler" , $list ] );return;
                }else{
                    echo  json_encode( [ 1 ,"Go ahead" , [] ]);return;
                }
            }
        }
    }

   

    public function business_get_categories($cat_par_id)
    {
        $catss= $this->BusinessModel->get_categories($cat_par_id);
        echo json_encode($res);
        $res = '';
        foreach ($catss as $row) {
            $res .= "<option value='$row->id'>$row->name</option>";
        }
        echo $res;
    }
    ///=================== Search  ============

   public function business_profile($id)
    {
     $data = $this->BusinessModel->profile_data(13);

	 
     $this->load->view('business/profile' ,$data);   
    }
    public function businesses_greeting()
    {
    	$this->load->view('business/index');
    }
    
    private function check_filter_inputs($inputs)
    {
        $srt=1; $filters=[];
        if($this->input->get('srt')){
            $srt = $this->input->get('srt');
            switch ($srt) {
                case 'hr':
                     $srt = 'rate_review';
                    break;
                case 'hrd':
                     $srt = 'rate_review desc';
                    break;
                case 'mv':
                     $srt = 'id';
                    break;
                case 'mvd':
                     $srt = 'id desc';
                    break;
                default:
                     $srt ='id' ;
                    break;
            }
        }
        //-----------
        if($this->input->get('findcat')){
            $filters['categoryFind']= $this->input->get('findcat') ;
        }
        if($this->input->get('cty')){
            $filters['cityNear']= $this->input->get('cty') ;
        }
        if($this->input->get('prc')){
            $filters['price']= $this->input->get('prc') ;
        }
        if($this->input->get('feat')){
            $filters['featureId']= $this->input->get('feat') ;
        }
        if($this->input->get('opn')){
            $filters['opened']= $this->input->get('opn') ;
        }
        //-------
        return ['fltr' => $filters , 'srt' =>[$srt , 1] ];
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
    
    
	public function business_submitted()
    {
    	$this->load->view('business/submitted');
    }
    public function businesses_list()
    {
    	$this->load->view('business/businesses');
    }
    public function business_page($businessId = 0 ) 
    {
    	
    	$data = $this->BusinessModel->profile_data($businessId);	
		echo "<pre>";
		print_r($data);
		exit;
	  	$this->load->view('business/profile',$data);	
    }
    public function business_editing($businessId = 0)
    {
        $data = $this->BusinessModel->edit($businessId);
        $this->load->view('business/create', $data);
    }
    public function business_create()
    {
        $data = $this->BusinessModel->create();
		
        $this->load->view('business/create',$data);
    }
	
	
	
	
	
    public function business_adding($stepNo)
    {
        if($_POST){
            switch ($stepNo) {
                case 1:
                    $section_num="business_section1"; // no need
                    $current_step = 1;
                    break;
                case 2:
                    $section_num="business_section2";
                    $current_step = 2;
                    break;
                case 3:
                    $section_num="business_section3";
                    $current_step = 3;
                    break;
                case 4:
                    $current_step =  4; //'NULL-TO SAVE';
                    $section_num="business_submit";
                   break;
                default:
                   // do nthg
                   break;
            }
            $inputs=$this->input->post() ;
           //die($inputs['is_edit']);
            $isEdit = 0 ; 
            if( isset($inputs['is_edit'])   )  $isEdit = 1 ; 
            $isValid = $this->BusinessModel->check_validation_rules($current_step ,  $isEdit );
            $errors = $this->BusinessModel->get_nonvalid_errors($current_step);
//            print_r($errors); die("---");
            if($isValid==true){
                $this->session->set_userdata($section_num,$inputs ); 
                //print_r($inputs) ; exit;
                if($current_step != 4){
                    echo json_encode( array( 1, "step$current_step" ,$errors ) );
                    return;
                }else{ // submitted 
                     $section1 = $this->session->userdata('business_section2' ) ;
                     $section2 = $this->session->userdata('business_section3' ) ;
                     $section3 = $this->session->userdata('business_submit' ) ;

                     $all_sections = array( 
                                    'business_section2'  => $section1, 
                                    'business_section3'   => $section2,
                                    'business_submit'   => $section3 );
                     $uid =  $this->session->userdata('user_id');
                     $busi_id = $section1['busi_id'];
                     $is_edit = $section1['is_edit'];
                     //SAVE SESSION INTO DB

                     $res =  $this->BusinessModel->add_new_business( $uid , $all_sections  , $is_edit ,$busi_id  );
                     //$errors = [];
                    echo json_encode(array(1,"step$current_step" ,$res ) ) ;
                    return;
                }

            }else{
            	
				$stepNum = $stepNo;
                echo json_encode(array(0, "step$stepNum", $errors ));// faild stay in
            }
        } else{   echo "NOT POST";  }
        return ;
    }
}