<?php 
class HeroCitizenPubModel extends CI_Model{

  function __construct() {
      parent::__construct();
  }
  public function get_achievements($filters, $page){
  	$where =' ';
  	$data['url_ext'] ='';
  	if($filters){
  		$search		= isset($filters['search']) ? $filters['search'] : '';
  		$sort			= isset($filters['sort']) ? $filters['sort'] : '';
  		$achType 	= isset($filters['achType']) ? $filters['achType'] : '';
  		$country 	= isset($filters['country']) ? $filters['country'] : '';
		  $data['url_ext'] = "?achType=".$achType."&country=".$country."&search=".$search;
	  	if($search){
		    $search = str_replace(' ', '%', $search);
		    $search = str_replace("'", "", $search);
		    $search = str_replace('"', "", $search);
		    $where .=" AND (a.ach_title LIKE '%$search%' OR a.ach_exp LIKE '%$search%') ";
		  }
		  $where .= $sort=='heros' ? " AND b.hero = 1 " : "";
		  $where .= $achType ? " AND a.ach_type = ".$achType : "";
		  $where .= $country ? " AND a.ach_country = ".$country : "";
		}
		$data['page'] = $page;
		$data['ach_type'] = $this->db->get('ach_type')->result();
		$this->db->order_by('country_english_name');
		$data['countries'] = $this->db->get('country')->result();
		$data['cities'] = $this->db->get('city')->result();

	  $sql =" SELECT b.hero_id, b.user_id, b.hero, a.ach_title, a.ach_logo, a.ach_date,co.country_arabic_name , a.ach_country, a.ach_city, a.verified, c.username, c.lastname, c.photo, c.job, 
	  (SELECT count(*) FROM ach_likes d WHERE d.ach_id = a.ach_id) as likes, 
	  (SELECT count(*) FROM ach_dislikes e WHERE e.ach_id = a.ach_id) as dislikes 
    FROM hero_citizen b, achievements a, user c ,  country co
    WHERE a.hero_id = b.hero_id 
    AND a.ach_country = co.country_id
    AND c.id = b.user_id 
    AND b.status = 1 
    AND a.status = 1 
    AND a.active = 1 
  
    $where";
    $data['num_rows'] = $this->db->query($sql)->num_rows();
    if ($data['num_rows'] > 8){
	    $first = --$page * 8;
	    $sql .= " LIMIT $first, 8";
    }
	
	
    $data['achs'] = $this->db->query($sql)->result();
	// echo "<pre>";
	// print_r( $data['achs']);
	// exit;
    //check if any achievement returned
    if($data['num_rows']){
	    //checking if the heros was followed by the user #PE$$
	    $follow = '';
	    if(is_logged()){
	      foreach ($data['achs'] as $ach) {
	        $sub_sql = "SELECT by_user_id From hero_followers 
	        WHERE hero_id = $ach->hero_id 
	        AND by_user_id = ".user_id();
	        $data['follow'][$ach->hero_id] = $this->db->query($sub_sql)->num_rows();
	      }
	    }
	    //count followers & rate calculation for each hero ach
	    $i = 0;
	    foreach ($data['achs'] as $ach) {
	    	//count followers
	      $sub_sql = "SELECT id From hero_followers 
	      WHERE hero_id = $ach->hero_id";
	      $data['followers'][$ach->hero_id] = $this->db->query($sub_sql)->num_rows();
	      //rate calculation
	      if($ach->likes){
		      $per =((int) $ach->likes * 100/(int)((int)$ach->likes + (int)$ach->dislikes));
					$per = round($per);
				}else{
					$per = 0;
				}
				$data['achs'][$i]->rate = (int)$per;
				$i++;
	    }
	  }
    return $data;
  }
	public function getNationalities(){
		return $this->db->query('SELECT * FROM nationalities');
	}


  public function achievements_pages(){

	

	  $sql =" SELECT b.hero_id, b.user_id, b.hero, a.ach_title, a.ach_logo, a.ach_date,co.country_arabic_name , a.ach_country, a.ach_city, a.verified, c.username, c.lastname, c.photo, c.job, 
	  (SELECT count(*) FROM ach_likes d WHERE d.ach_id = a.ach_id) as likes, 
	  (SELECT count(*) FROM ach_dislikes e WHERE e.ach_id = a.ach_id) as dislikes 
    FROM hero_citizen b, achievements a, user c ,  country co
    WHERE a.hero_id = b.hero_id 
    AND a.ach_country = co.country_id
    AND c.id = b.user_id 
    AND b.status = 1 
    AND a.status = 1 
    AND a.active = 1 
    AND a.verified = 1
    LIMIT 1, 4";
    $data['num_rows'] = $this->db->query($sql)->num_rows();

	
    $data['achs'] = $this->db->query($sql)->result();
	// echo "<pre>";
	// print_r( $data['achs']);
	// exit;
    //check if any achievement returned
    if($data['num_rows']){
	    //checking if the heros was followed by the user #PE$$
	    $follow = '';
	    if(is_logged()){
	      foreach ($data['achs'] as $ach) {
	        $sub_sql = "SELECT by_user_id From hero_followers 
	        WHERE hero_id = $ach->hero_id 
	        AND by_user_id = ".user_id();
	        $data['follow'][$ach->hero_id] = $this->db->query($sub_sql)->num_rows();
	      }
	    }
	    //count followers & rate calculation for each hero ach
	    $i = 0;
	    foreach ($data['achs'] as $ach) {
	    	//count followers
	      $sub_sql = "SELECT id From hero_followers 
	      WHERE hero_id = $ach->hero_id";
	      $data['followers'][$ach->hero_id] = $this->db->query($sub_sql)->num_rows();
	      //rate calculation
	      if($ach->likes){
		      $per =((int) $ach->likes * 100/(int)((int)$ach->likes + (int)$ach->dislikes));
					$per = round($per);
				}else{
					$per = 0;
				}
				$data['achs'][$i]->rate = (int)$per;
				$i++;
	    }
	  }
	$data['nations'] = $this->getNationalities();
    return $data;
  }




}


