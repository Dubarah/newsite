<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function swich_lang($lang='')
    {	
    	//added to support the hero_citizen design #PE$$
    	if(!empty($lang)){
    		if($lang=='ar'){
    			$this->session->unset_userdata('lang');
            	$this->session->set_userdata('lang', 'ar');
    		}else{
    			 $this->session->unset_userdata('lang');
            	$this->session->set_userdata('lang', 'en');
    		}
    		redirect($this->session->userdata('this_url'));
    	}

        if (!$this->session->userdata('lang') || $this->session->userdata('lang') == 'ar') {
            $this->session->unset_userdata('lang');
            $this->session->set_userdata('lang', 'en');
            
        } else {
            $this->session->unset_userdata('lang');
            $this->session->set_userdata('lang', 'ar');
        } 
        redirect($this->session->userdata('this_url'));
    }
}
