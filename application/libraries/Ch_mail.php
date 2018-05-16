<?php 
/**
 * 
 */
class Ch_mail {
	
	var $CI;
	
	function __construct() {
		$this->CI = & get_instance();
	}
	
	public function new_list($from_name='', $from_email='', $subject='')
	{
		
		$apiKey = $this->CI->config->item('ch_apikey');
		$dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
		$url = 'https://'. $dataCenter . '.api.mailchimp.com/3.0/lists/';
		
		$jsonEmail =	'{
							"name":"Verify",
							"contact":{
										"company":"Dubarah",
										"address1":"A",
										"state":"A",
										"zip":"A",
										"country":"A",
										"phone":"",
										"city":"A"
									  },
							"permission_reminder":"A",
							"campaign_defaults":{
													"from_name":"'.$from_name.'",
													"from_email":"'.$from_email.'",
													"subject":"'.$subject.'",
													"language":"en"
									  },
							"email_type_option":true
						}';
		
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_USERPWD, 'apikey:'.$apiKey);
		curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POST, true);
		//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonEmail);
		
		$result = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($result);
		//echo "<pre>";
		//print_r($result); //exit;
		$list_id = $result->id;
		if ($list_id) {
			//echo $list_id; exit;
			return $list_id;
		} else {
			//echo "string";
			return FALSE;
		}
		
	}
	
	public function add_list_members($list_id, $members=array())
	{
		$apiKey = $this->CI->config->item('ch_apikey');
		$dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
		$url = "https://$dataCenter.api.mailchimp.com/3.0/lists/$list_id";
		$membs = '';
		
		foreach ($members as $one) {
			$membs .= '{"email_address":"'.$one.'", "status": "subscribed"}, ';
		}
		//echo "<pre>"; print_r($members); 
		//echo $membs;exit;
		$membs = substr($membs, 0, strlen($membs) - 2);
		
		$jsonEmail =	'{"members": ['.$membs.'], "update_existing": true}';
		//echo "$jsonEmail"; exit;
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_USERPWD, 'apikey:'.$apiKey);
		curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POST, true);
		//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonEmail);
		
		$result = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($result);
		//echo "<pre>"; print_r($result);
		return $result;
	}
	
	public function new_camp($list_id='', $subject='', $from_name='', $from_email='')
	{
		$apiKey = $this->CI->config->item('ch_apikey');
		
		$dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
		$url = 'https://'. $dataCenter . '.api.mailchimp.com/3.0/campaigns/';// . $campaignId .'/actions/';
		
		$jsonEmail = 	'{
							"recipients":{"list_id":"'.$list_id.'"},
							"type":"regular",
							"settings":{
											"subject_line":"'.$subject.'", 
											"reply_to":"'.$from_email.'",
											"from_name":"'.$from_name.'"
										}
						}';
		
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_USERPWD, 'apikey:'.$apiKey);
		curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonEmail);
		
		$result = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($result);
		
		$camp_id = $result->id;
		return $camp_id;
	}
	
	public function test($value='')
	{
		$this->CI->load->library('templates');
		$mes = $this->CI->templates->active_mail('Activate Account', 'Ali', 'safda');
		echo json_encode($mes);
	}
	
	public function set_mess_content($camp_id='', $to_name='', $message='', $var1='')
	{
		$apiKey = $this->CI->config->item('ch_apikey');
		
		$dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
		$url = "https://$dataCenter.api.mailchimp.com/3.0/campaigns/$camp_id/content";
		$mes = '';
		$this->CI->load->library('templates');
		switch ($message) {
			case 'verify':
				$mes = json_encode($this->CI->templates->active_mail('Activate Account', $to_name, $var1));
				break;
			case 'reset_pass':
				
				$mes = json_encode($this->CI->templates->reset_pass('Reset Password', $to_name, $var1));
				break;
			case 'job_apply':
		
				$mes = 	json_encode($this->CI->templates->job_apply('New Applicants', $to_name, $var1));
				break;
			default:
				$mes = "Dear $to_name Welcome at Dubarah network";
				break;
		}
		$jsonEmail = '{"html": '.$mes.'}';
		//echo $jsonEmail; exit;
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_USERPWD, 'apikey:'.$apiKey);
		curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonEmail);
		
		$result = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($result);
		
		$camp_res = $result;
		//echo "<pre>";
		//print_r($camp_res); exit;
		return $camp_res;
	}
	
	public function send_camp($camp_id='')
	{
		$apiKey = $this->CI->config->item('ch_apikey');
		
		$dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
		$url = "https://$dataCenter.api.mailchimp.com/3.0/campaigns/$camp_id/actions/send";
		
		$jsonEmail = 	'';
		
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_USERPWD, 'apikey:'.$apiKey);
		curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonEmail);
		
		$result = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($result);
		//print_r($result); exit;
		if (isset($result->title)) {
			return FALSE;
		} 
		return TRUE;
	}
	
	public function delete_camp($camp_id='')
	{
		$apiKey = $this->CI->config->item('ch_apikey');
		
		$dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
		$url = "https://$dataCenter.api.mailchimp.com/3.0/campaigns/$camp_id";
		
		$jsonEmail = 	'';
		
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_USERPWD, 'apikey:'.$apiKey);
		curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
		
		$result = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($result);
		
		if ($result) {
			return TRUE;
		}
	}
	
	public function delete_list($list_id='')
	{
		$apiKey = $this->CI->config->item('ch_apikey');
		
		$dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
		$url = "https://$dataCenter.api.mailchimp.com/3.0/lists/$list_id";
		
		$jsonEmail = 	'';
		
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_USERPWD, 'apikey:'.$apiKey);
		curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
		
		$result = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($result);
		
		if ($result) {
			return TRUE;
		}
	}
	
	public function prepare_mail($from_name='', $from_email='', $subject='', $members=array(), $to_name='', $message='', $var1='', $user_id=0)
	{
		//echo "!$from_name || !$from_email || !$subject || !$members || !$to_name || !$message || $user_id"; exit;
		if (!$from_name || !$from_email || !$subject || !$members || !$to_name || !$message || !$user_id) {
			return FALSE;
		}
		$membs_added 	= 0;
		$new_camp	 	= 0;
		$content_added 	= 0;
		
		$sql = "SELECT mc_list_id FROM user WHERE id=$user_id";
		//echo "$sql"; exit;
		$new_list = $list_id = $this->CI->db->query($sql)->row()->mc_list_id;
		//echo "<pre>"; print_r($list_id); exit;
		$membs_added = 0;
		if (!$new_list) {
			//exit;
			$new_list = $this->new_list($from_name, $from_email, $subject);
			//echo "new_list($from_name, $from_email, $subject);"; exit;
			if ($new_list) {
				$membs_added = $this->add_list_members($new_list, $members);
			} else {
				//return 'list_err';
			}
		}
		//echo $new_list; exit;
		//echo "$membs_added || $new_list"; exit;
		if ($membs_added || $new_list) {
			$new_camp = $this->new_camp($new_list, $subject, $from_name, $from_email);
		} else {
			//return 'new_camp_err';
		}
		$members = serialize($members);
		if ($new_camp) {
			$content_added = $this->set_mess_content($new_camp, $to_name, $message, $var1);
			if (!$list_id) {
				$sql = "UPDATE user SET mc_list_id='$new_list' WHERE id=$user_id";
				//echo $sql; exit;
				$this->CI->db->query($sql);
			}
			$insert = array (
								'camp_id' 		=> $new_camp,
								'list_id' 		=> $new_list,
								'insert_date' 	=> time(),
								'members'		=> $members
							);
			$this->CI->db->insert('send_list', $insert);
			if ($this->CI->db->insert_id()) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
	}
	
	public function send_mail($camp_id='', $list_id)
	{
		if (!$camp_id || !$list_id) {
			return FALSE;
		}
		
		$sent = $this->send_camp($camp_id);
		//echo $sent; exit; 
		return $sent;
	}
}

?>