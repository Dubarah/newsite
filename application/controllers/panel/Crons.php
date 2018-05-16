<?php

/**
 * 
 */
class Crons extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	public function send_mail($value = '')
    {
        $time = time() - (610 * 60);
        //echo "SELECT * FROM send_list WHERE sent=0 AND insert_date > $time";
        $mails = $this->db->query("SELECT * FROM send_list WHERE sent=0 AND insert_date > $time")->result();
        $this->load->library('ch_mail');
        foreach ($mails as $mail) {
            $sent = $this->ch_mail->send_mail($mail->camp_id, $mail->list_id);
            echo $sent;
            if ($sent) {
                $this->db->where('id', $mail->id);
	            $this->db->update('send_list', array('sent' => 1, 'sent_date' => time()));
            }
        }
    }
	
	public function send_applicants()
	{
		$sql = "SELECT count(a.user_id),a.user_id, a.advertisement_id 
				  FROM advertisement a, users_apply ua 
				 WHERE ua.advertisement_id=a.advertisement_id 
				   AND ua.sent=0 
				 GROUP BY a.user_id, a.advertisement_id";
		$rows = $this->db->query($sql);
		if ($rows->num_rows()) {
			foreach ($rows->result() as $row) {
				$this->load->library('ch_mail');
				$job_id = $row->advertisement_id;
				$from_name = $this->config->item('from_name');
				$from_email = $this->config->item('from_email');
				$subject = 'Job apply';
				$send_id = $row->user_id;
				$me = $this->db->get_where('user', array('id' => $send_id))->row();
				$email = $me->email;
				$members = array($email);
				$to_name = $me->username.' '.$me->lastname;
				$message = "job_apply";
				$url = base_url() . "my_applicants/" . $job_id;
				$var1 = $url;
				
	            $res = $this->ch_mail->prepare_mail($from_name, $from_email, $subject, $members, $to_name, $message, $var1, $send_id);
				echo $res;
				$this->db->where(array('advertisement_id' => $job_id, 'sent' => 0));
				$this->db->update('users_apply', array('sent' => 1, 'sent_date' => time()));
			}
		}
	}
	
	public function unpublish_ads($value='')
	{
		$time = time();
		$sql = "UPDATE advertisement SET status=2 WHERE expiration <= $time";
		$this->db->query($sql);
	}
}
