<?php 

class Mail {
	
	var $CI;
	
	function __construct() {
		$this->CI = & get_instance();
	}
	
	
	//test
	//.ghffftessssssssssssssssssssssst
	
	
	public function send_mail($from_name, $sender, $subject, $email, $to_name, $message, $var1, $user_id = '')
		{
			// echo $from_name, $sender, $subject, $email, $to_name, $message, $var1, $user_id;
		// exit;
		$sender = 'noreply@dubarah.com';
		$mes = '';
		$this->CI->load->library('templates');
		//echo $message ;
		switch ($message) {
			case 'verify':
				$mes = $this->CI->templates->active_mail('Activate Account', $to_name, $var1);
				break;
			case 'resetpass':
				
				$mes = $this->CI->templates->reset_pass('Reset Password', $to_name, $var1);
				break;
			case 'jobapply':
		
				$mes = 	$this->CI->templates->job_apply('New Applicants', $to_name, $var1);
				break;
			case 'privacy':
		
				$mes = 	$this->CI->templates->privacy('Privacy Policy Updates' , $to_name, $var1 );
				break;
		    default:
				$mes = "Dear $to_name Welcome at Dubarah network";
				break;
		}
		
		
			
				$this->CI->load->library('email');
		
		$config = Array(
		    'protocol'  => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		 	'smtp_user' => 'noreply@dubarah.com',
		    'smtp_pass' => 'WEB@mc909**',
		    'mailtype'  => 'html',
		    'charset'   => 'utf-8'
		
		);
		
		
		
		
		
		//$email = 'maher.kalsh@gmail.com';
		
		//$sender = $sender ? $sender : 'noreply@dubarah.com';
		// $config = Array( 
							// 'protocol'  => 'smtp', 
							// 'smtp_host' => 'smtp.gmail.com', 
							// 'smtp_port' => '587', 
							// 'smtp_user' => 'noreply@dubarah.com', 
							// 'smtp_pass' => 'WEB@mc909**'
						// ); 

				
		$this->CI->email->initialize($config);
		$this->CI->email->set_mailtype("html");
		$this->CI->email->set_newline("\r\n");
		
		
		$this->CI->email->from($sender, 'Dubarah | Support');
		$this->CI->email->to($email);
		//$this->CI->email->set_mailtype("html");
		$this->CI->email->subject($subject); 
		$this->CI->email->message($mes);
		
		$res = $this->CI->email->send();
	
		
		if (!$res) {
			return 0;
		} else {
		    return 1;
		}
		
		
		

		
		
		
		
		
   
	
	}
/*
	public function sendmail($from_name, $sender, $subject, $email, $to_name, $message, $var1, $user_id)
		{
			
					$mes = '';
			$this->CI->load->library('templates');
			//echo $message ;
			switch ($message) {
				case 'verify':
					$mes = $this->CI->templates->active_mail('Activate Account', $to_name, $var1);
					break;
				case 'resetpass':
					
					$mes = $this->CI->templates->reset_pass('Reset Password', $to_name, $var1);
					break;
				case 'jobapply':
			
					$mes = 	$this->CI->templates->job_apply('New Applicants', $to_name, $var1);
					break;
				default:
					$mes = "Dear $to_name Welcome at Dubarah network";
					break;
			}
			
	
			
			
				$sender = $sender ? $sender : 'noreply@dubarah.com';
					
				$this->CI->load->library('email');
				$this->CI->email->set_mailtype("html");
				$this->CI->email->from($sender, 'Dubarah | Support');
				$this->CI->email->to("$reciver");
				
				$this->CI->email->bcc('website@shathascholarships.com');
				
				$this->CI->email->subject("$subject");
				$this->CI->email->message("$message");
				$res = $this->CI->email->send();
				
				
				
				
				
				
			//	$this->CI->email->send();
			
			
			
		/*	$sender = $sender ? $sender : 'website@shathascholarships.com';
			$config = Array( 
								'protocol'  => 'smtp', 
								'smtp_host' => 'smtpout', 
								'smtp_port' => '3535', 
								'smtp_user' => 'website@shathascholarships.com', 
								'smtp_pass' => ''
							); 
			
			$this->CI->load->library('email', $config); 
			$this->CI->email->set_newline("\r\n");
			$this->CI->email->from('website@shathascholarships.com', 'Shatha | Scholarships');
			$this->CI->email->to($reciver);
			$this->CI->email->subject($subject); 
			$this->CI->email->message($message);*/
		/*	if ($res) {
				return;  1;
			} else {
			    return; 0;
			}
	   
		}
		
	*/
	
	
}


?>