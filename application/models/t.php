<?php

class BusinessModel extends CI_Model {

	var $store_salt;
    var $salt_length;
    var $hash_method;

    function __construct() {
        parent::__construct();
        $this->store_salt  = $this->config->item('store_salt');
        $this->salt_length = $this->config->item('salt_length');
        $this->hash_method = $this->config->item('hash_method');
    }
   
    private function base64ToMyImage($data   , $filenamePath)
    {
        if (preg_match('/^data:image\/(\w+);base64,/', $data, $type)) {
            $data = substr($data, strpos($data, ',') + 1);
            $type = strtolower($type[1]); // jpg, png, gif
            if (!in_array($type, [ 'jpg', 'jpeg', 'gif', 'png' ])) {
                //echo 'invalid image type';
                throw new \Exception('invalid image type');
            }
            $data = base64_decode($data);
            if ($data === false) {
                ///echo "'base64_decode failed'";
                throw new \Exception('base64_decode failed');
            }
        } else {
            ////echo "did not match data URI with image data";
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
            $f = $this->base64ToMyImage($logo_str , $path."/logo"  );
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
        $files = []; $res = [];
        $path =  'uploads/businesses/' . $dir_path ; 
        if (!file_exists( $path )) 
            mkdir( $path, 0755, true);
        /// ------- write file -----------------
        $imgs_str = $allsections['business_section3']['MyImgsData'];
        if ( isset($imgs_str)) ///['business_section3']
        {
            $imgs = explode("|", $imgs_str  ) ;
            for ($i=0; $i < count($imgs); $i++) { 
                 if($imgs[$i] != "" ){
                    $f = $this->base64ToMyImage($imgs[$i] , $path."/". ($i+1)  );
                    //echo $f;
                    array_push($files,$f );
                }
            }
            ///print_r($files);
        }else{
            ///echo "No img";
        }
        ///------------ DB DELETE OLD  ------------
        $this->db->delete('busi_imgs', array('busi_id' => $businesId));
        ///------------ DB Insert------------
        for ($i=0; $i <= count($files); $i++) { 
             $insert = array (  'busi_id'  => $businesId   ,   'img'  => $files[$i]  );
             $res = $this->db->insert('busi_imgs', $insert);   
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
        foreach ( $allsections['business_section2']['category'] as $cat ) {
            $insert = array (  'busi_id'  => $businesId   ,   'cat_id'  => $cat  );
            $this->db->insert('busi_catgo_fks', $insert);   
        }
        return ;
    }
    private function addUpdateGeneralFeatures($businesId,$allsections)
    {
        $this->db->delete('busi_gen_feat_fks', array('busi_id' => $businesId));
        ///------------
        foreach ($allsections['business_submit']['genfeat'] as $genfeat ) {
            $insert = array (  'busi_id'  => $businesId   ,   'gf_id'  => $genfeat  );
            $this->db->insert('busi_gen_feat_fks', $insert);   
        }
     return ;
    }
    
    public function add_new_business( $userId,$allsections)
    {
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
        'webaddress'  =>  $allsections['business_section2']['webAddress'],
        'work_email'  =>  $allsections['business_section2']['emailAddress'],

        'isOwner'  =>  $allsections['business_section3']['isOwner'],
        'about'  => $allsections['business_section3']['about'],
        'facebook'  => $allsections['business_section3']['Fb'],
        'twitter'  => $allsections['business_section3']['Tw'],
        'linkedin'  => $allsections['business_section3']['lnkin'],
        'pinterest'  => $allsections['business_section3']['Pinterest'],
        'review'  => $allsections['business_section3']['review' ],

        'price'  => $allsections['business_submit']['Price' ],
        'parking'  => $allsections['business_submit']['Parking' ],
        'wi_fi'  => $allsections['business_submit']['WiFi' ],
        'smoking'  => $allsections['business_submit']['Smoking' ],
        'meals_served'  => $allsections['business_submit']['MealsServed' ],
        'alcohol'  => $allsections['business_submit']['Alcohol' ],
        'music'  => $allsections['business_submit']['Music' ],
        'call_action_btn'  => $allsections['business_submit']['calltype' ],
        'call_action_weblink'  => $allsections['business_submit']['weblink' ],
        'logo'  => null,
        'cover'  => null,
        'rate_review'  => '5',
        );
        $res = false;
        $this->db->insert('businesses', $insert);   
        $businesId = $this->db->insert_id();
       if($businesId > 0 )
        {
            $data = $allsections;
            $this->addUpdateCategory( $businesId , $data); //$businesId
            $this->addUpdateTimes($businesId ,  $allsections ); //$businesId
            $this->addUpdateFaqs($businesId ,$data);
            $this->addUpdateGeneralFeatures($businesId ,$data);
            $dir_path = "$uid_$businesId" ;
            $this->addUpdateLogoCoverImages($businesId  , $data , $dir_path);
            $this->addUpdateImages( $businesId  , $data , $dir_path );   
            $res = true;
        }else{
           /// NOT WORKED
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
        $sql = "SELECT *  FROM categories   ORDER BY english_name";
        $data['categories'] = $this->db->query($sql);
        //-------------- Step 2 -----------------
        //-------------- Step 3 -----------------
        $sql = "SELECT *  FROM busi_general_features  ";
        $data['generalFeatures'] = $this->db->query($sql);
		return $data;
    }

    public function edit($busin_id)
    {
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
        $data['busin_catgo'] = $this->db->query($sql)->result();
        //------------------gen_feat
        $sql = "SELECT *  FROM busi_gen_feat_fks  where busi_id =".$busin_id ;
        $data['busin_genfeat'] = $this->db->query($sql)->result();
        //------------------busi_imgs
        $sql = "SELECT *  FROM busi_imgs  where busi_id =".$busin_id ;
        $data['busin_imgs'] = $this->db->query($sql)->result();
        return $data;
    }
    public function get_nonvalid_errors($part_num){

        switch ($part_num) {
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
                'emailAddress' =>  form_error('emailAddress', '<b style="color: red">', '</b>') ) ;
            break;
            case '2':
            return array (
                // 'day' =>  form_error('day', '<b style="color: red">', '</b>'),
                // 'timeFrom' =>  form_error('timeFrom', '<b style="color: red">', '</b>'),
                // 'timeto' =>  form_error('timeto', '<b style="color: red">', '</b>'),
                // 'question' =>  form_error('question', '<b style="color: red">', '</b>'),
                // 'Answer' =>  form_error('Answer', '<b style="color: red">', '</b>'),
                'about' =>  form_error('about', '<b style="color: red">', '</b>'),
                'Fb' =>  form_error('Fb', '<b style="color: red">', '</b>'),
                'Tw' =>  form_error('Tw', '<b style="color: red">', '</b>'),
                'lnkin' =>  form_error('lnkin', '<b style="color: red">', '</b>'),
                'Pinterest' =>  form_error('Pinterest', '<b style="color: red">', '</b>'),
                // 'review' =>  form_error('about', '<b style="color: red">', '</b>')
                 );
            break;
            case '3':
            return array (   
                'Price' =>  form_error('Price', '<b style="color: red">', '</b>'),
                'GeneralFeatures' =>  form_error('GeneralFeatures', '<b style="color: red">', '</b>'),
                'Parking' =>  form_error('Parking', '<b style="color: red">', '</b>'),
                'WiFi' =>  form_error('WiFi', '<b style="color: red">', '</b>'),
                'Smoking' =>  form_error('Smoking', '<b style="color: red">', '</b>'),
                'MealsServed' =>  form_error('MealsServed', '<b style="color: red">', '</b>'),
                'Alcohol' =>  form_error('Alcohol', '<b style="color: red">', '</b>'),
                'Music' =>  form_error('Music', '<b style="color: red">', '</b>'),
                'weblink' =>  form_error('weblink', '<b style="color: red">', '</b>'), );
            break;
            default:
                return array ();
            break;
        }
        return array ();
    }
    // |numeric
    // valid_email|strtolower|is_unique[user.email]
    // alpha_numeric_spaces
    public function check_validation_rules($part_num)
    {
        return true;
         switch ($part_num) {
            case '1':
                $this->form_validation->set_rules('name'  ,  trans('business-name'),'required|trim|alpha_numeric_spaces'); 
                $this->form_validation->set_rules('province', trans('business-province'),'required|trim'); 
                $this->form_validation->set_rules('postal' ,  trans('business-postal'),'required|trim'); 
                $this->form_validation->set_rules('workPhone',    trans('business-workPhone'),'required|trim'); 
                $this->form_validation->set_rules('mobilePhone',  trans('business-mobilePhone'),'trim'); 
                $this->form_validation->set_rules('webAddress' ,  trans('business-webAddress'),'required|trim'); 
                $this->form_validation->set_rules('emailAddress', trans('business-emailAddress'),'required|trim');
                $this->form_validation->set_rules('addressOffice',trans('business-addressOffice'),'required|trim');  
                break;
            case '2':
                $this->form_validation->set_rules('day' ,      trans('business-day'),'required|trim'); 
                $this->form_validation->set_rules('timeFrom' , trans('business-timeFrom'),'required|trim');
                $this->form_validation->set_rules('timeto' ,   trans('business-timeto'),'required|trim'); 
                $this->form_validation->set_rules('question' , trans('business-question'),'required|trim');
                $this->form_validation->set_rules('Answer' ,   trans('business-Answer'),'required|trim'); 
                $this->form_validation->set_rules('about' ,    trans('business-about'),'required|trim'); 
                $this->form_validation->set_rules('Fb' ,       trans('business-Fb'),'required|trim'); 
                $this->form_validation->set_rules('Tw' ,       trans('business-Tw'),'required|trim'); 
                $this->form_validation->set_rules('lnkin' ,    trans('business-lnkin'),'required|trim'); 
                $this->form_validation->set_rules('Pinterest', trans('business-Pinterest'),'required|trim');
                $this->form_validation->set_rules('review'  ,     trans('business-about'),'required|trim'); 
                break;
            case '3':
                $this->form_validation->set_rules('Price' ,      trans('business-Price'),'required|trim'); 
                $this->form_validation->set_rules('Parking' ,    trans('business-Parking'),'required|trim'); 
                $this->form_validation->set_rules('WiFi' ,       trans('business-WiFi'),'required|trim'); 
                $this->form_validation->set_rules('Smoking' ,    trans('business-Smoking'),'required|trim'); 
                $this->form_validation->set_rules('MealsServed', trans('business-MealsServed'),'required|trim'); 
                $this->form_validation->set_rules('Alcohol' ,    trans('business-Alcohol'),'required|trim'); 
                $this->form_validation->set_rules('Music' ,      trans('business-Music'),'required|trim'); 
                $this->form_validation->set_rules('weblink' ,    trans('business-weblink'),'required|trim'); 
                $this->form_validation->set_rules('GeneralFeatures' , trans('business-GeneralFeatures'),'required|trim'); 
                break;
            default:
                // do nothing
                break;
        }
      return $this->form_validation->run();
    }

    /// =========================== FILTER PAGE ============================
    private function getGenFeats()
    {
        $sql = "  SELECT * from busi_general_features";
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
    public function getfilters( )
    {    
        $arr['GenFeats'] =$this->getGenFeats();
        return $arr;
    }
    public function getAllfilterdData( $filters = array(),$sortBy = array("bestmatch" , 1) )
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
    private function getdatafilterd( $filters = array(),$sortBy = array("bestmatch" , 1) )
    {
            $sql_category  = "";
            if(isset($filters['categoryFind'])) 
            {
                $sql_category  = " and Lower(cat.english_name) like Lower('%".
                                            $filters['categoryFind']."%') ";
            }
            $sql_near = "";
            if(isset($filters['cityNear'])) 
            {
                $sql_near=" and ( Lower( b.province )  like Lower('%".$filters['cityNear']."%') or 
                            Lower(b.address) like Lower( '%".$filters['cityNear']."%')  or 
                            Lower(b.address_office  ) like Lower( '%".$filters['cityNear']."%')  or 
                            Lower(ci.city_english_name) like Lower( '".$filters['cityNear']."%') or 
                            Lower(co.country_english_name) like Lower( '".$filters['cityNear']."%') 
                            ) ";
            }
            $sql_price = "";
            if(isset($filters['price'])) 
            {
                $sql_price = " b.price = '".$filters['price']."' ";
            }
            $sql_feat = "";
            if(isset($filters['featureId'])) 
            {
                $sql_feat  = "  and  gen.id ='". $filters['feature'] ."' " ;
            }
            $sql_isopned = "";
            if(isset($filters['opened'])) 
            {
                $sql_isopned = "  and b.active = 0 ";

            }
            $sql_group = " group by b.id ";
            $sql_order = " order by b.id ";
            if(isset($sortBy) && $sortBy[0] !=  "bestmatch" )
            {
                $sql_order = " order by  " . $sortBy[0] ;
            }
            $sql = "
               SELECT b.* , ci.* ,co.* FROM businesses b  
                inner join city ci on ( ci.city_id = b.cityId)
                inner join country  co on ( co.country_id = b.countryId )   
                left join busi_catgo_fks catfks on ( catfks.busi_id = b.id)
                left join categories  cat on ( cat.category_id  = catfks.cat_id)
                left join busi_gen_feat_fks genfks on ( genfks.busi_id = b.id)
                left join busi_general_features gen on ( genfks.gf_id = gen.id)
                where 
                b.status = 0
            ";
            $sql .= $sql_category . $sql_near  .   $sql_price . $sql_feat . $sql_isopned ;
            $sql .= $sql_group;
            $sql .= $sql_order;
        return $this->db->query($sql)->result();
    }
}





