<?php
class Auth {
    var $CI;
    public function __construct() {
        $this->CI = & get_instance();
        //$this->CI->load->model('general/auth_model', 'auth');
        
        //$this->CI->load->model('reports/reports_model', 'reports');
    }
    
    public function need_login()
    {
        if(!$this->CI->session->userdata('user_id')){
            redirect(base_url()."login");
        }
    }
	
	public function need_unlock()
    {
        if($this->CI->session->userdata('screen_locked')){
            redirect(base_url()."lock_screen");
        }
    }
	
	public function need_pay_login()
    {
        if(!$this->CI->session->userdata('payment_logged')){
            redirect(base_url()."pay_login");
        }
    }
    
    public function get_permissions() {
        $user_id = $this->CI->session->userdata('user_id');
        $query = "SELECT * FROM pers_roles WHERE role_id in (SELECT role_id FROM roles_emps WHERE emp_id = '{$user_id}');";
        $result = $this->CI->db->query($query)->result();
        
        $permissions = array();
        foreach($result as $permission) {
            $permissions [] = $permission->per_id;
        }
        return $permissions;    
    }
    
    public function is_logged()
    {
        return $this->CI->session->userdata('user_id') ? 1 : 0;
    }
    
    public function have_access($sub_object_id, $no_redirect = FALSE) { 
        if(!$this->is_logged()) {
            return FALSE;
        }

        $has_access = FALSE;

        $permissions = $this->get_permissions();
        if(in_array($sub_object_id, $permissions)) {
            $has_access = TRUE;
        }

        if(!$has_access) {
            if(!$no_redirect) {
                $this->CI->messages->error($this->CI->lang->line('no_access'));
                redirect('/');
            }
            return FALSE;   
        }
        return TRUE;
    }
	
	public function check_end_date($user_id='')
	{
		$end_date = $this->CI->db->get_where('user', array('id' => $_id))->row()->contract_end_date;
		if ($end_date && $end_date < time()) {
			return TRUE;
		}
		return FALSE;
	}
	
	public function translate($key='')
	{
		echo $this->CI->lang->line($key);
	}
	
	public function trans($key='')
	{
		return $this->CI->lang->line($key);
	}
	
	public function LANG()
	{
		return $this->CI->session->userdata('lang');
	}
	
	public function sendmail($sender='', $reciver='', $subject='', $message='')
	{
		return True;
		$sender = $sender ? $sender : 'noreply@dalilacom.com';
		$config = Array( 
							'protocol'  => 'smtp', 
							'smtp_host' => 'smtpout', 
							'smtp_port' => '3535', 
							'smtp_user' => 'noreply@ex.com', 
							'smtp_pass' => ''
						); 
		
		$this->CI->load->library('email', $config); 
		$this->CI->email->set_newline("\r\n");
		$this->CI->email->from($sender, 'Farma | Support');
		$this->CI->email->to($reciver);
		$this->CI->email->subject($subject); 
		$this->CI->email->message($message);
		if (!$this->CI->email->send()) {
			return FALSE;
		} else {
		    return TRUE;
		}
   
	}
	
	public function send_sms($to='', $msg)
	{
		return TRUE;
		$msg = urlencode($msg);
		$url = "https://bms.syriatel.sy/API/SendSMS.aspx?user_name=&password=&msg=$msg&sender=Dalilacom&to=963$to";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
		$result = curl_exec($ch);
		if (!$result) {
			return "Curl error: " . curl_error($ch);
		} 
		curl_close($ch);
	}
	
	public function ftp_trans($filename='')
	{
		return TRUE;
		if (!$filename) {
			return FALSE;
		}
		$ftp_server = "ftp.hybridware.co";
		$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
		$login = ftp_login($ftp_conn, 'ads@hybridware.co', 'aZ06chLwxZsL');
		
		$file = base_url()."uploads/$filename";
		error_reporting(0);
		// upload file
		if (ftp_put($ftp_conn, "/website/uploads/$filename", $file, FTP_ASCII)) {
			//echo "string";
			ftp_close($ftp_conn);
			//exit;
			return TRUE;
		} else {
			//echo "no";
			ftp_close($ftp_conn);
			//exit;
			return FALSE;
		}
	}
}
