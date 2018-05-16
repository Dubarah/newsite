<?php

/**
 * 
 */
class Basics_model extends CI_Model {
		
	var $store_salt;//      = $this->config->item('store_salt', 'ion_auth');
	var $salt_length;//     = $this->config->item('salt_length', 'ion_auth');
	var $hash_method;
	
	function __construct() {
		parent::__construct();
		
		$this->store_salt  = $this->config->item('store_salt');
		$this->salt_length = $this->config->item('salt_length');
		$this->hash_method = $this->config->item('hash_method');
	}
	
	
	
	
	public function login($email='', $password="")
    {
        if (!$email || !$password) {
            return FALSE;
        }
        $user = $this->db->get_where('user', array('email' => $email));
        $is_exist_user = $this->db->get_where('user', array('email' => $email))->num_rows();
		if ($is_exist_user != 1) {
			return 'emsil_error';
		}
		$is_staff = $user->row()->is_staff;
		$user_id = $user->row()->id;
		if ($user_id != 1 && !$is_staff) {
			return 'emsil_error';
		}
		
		$salt = $user->row()->auth_key;
		$pass = $user->row()->password_hash;
		$passed = $this->verify_password($password, $pass, $salt);
		//echo $passed; exit;
		if ($passed) {
			$this->session->set_userdata('user_id', $user_id);
			$this->session->set_userdata('username', $user->row()->username);
			return 'passed';
		} else {
			return 'pass_error';
		}
    }
	
	public function hash_password($password, $salt='')
	{
		if (empty($password))
		{
			return FALSE;
		}
		$this->load->library('bcrypt');
		// bcrypt
		
		return $this->bcrypt->hash($password.$salt);
		
	}
	
	public function verify_password($password='', $hash, $salt='')
	{
		//$salt = $this->salt();
		if (empty($password))
		{
			return FALSE;
		}
		$this->load->library('bcrypt');
		// bcrypt
		//echo "$password $hash";
		return $this->bcrypt->verify($password.$salt, $hash);
	}
	
	public function salt()
	{

		$raw_salt_len = 16;

 		$buffer = '';
        $buffer_valid = false;

        if (function_exists('mcrypt_create_iv') && !defined('PHALANGER')) {
            $buffer = mcrypt_create_iv($raw_salt_len, MCRYPT_DEV_URANDOM);
            if ($buffer) {
                $buffer_valid = true;
            }
        }

        if (!$buffer_valid && function_exists('openssl_random_pseudo_bytes')) {
            $buffer = openssl_random_pseudo_bytes($raw_salt_len);
            if ($buffer) {
                $buffer_valid = true;
            }
        }

        if (!$buffer_valid && @is_readable('/dev/urandom')) {
            $f = fopen('/dev/urandom', 'r');
            $read = strlen($buffer);
            while ($read < $raw_salt_len) {
                $buffer .= fread($f, $raw_salt_len - $read);
                $read = strlen($buffer);
            }
            fclose($f);
            if ($read >= $raw_salt_len) {
                $buffer_valid = true;
            }
        }

        if (!$buffer_valid || strlen($buffer) < $raw_salt_len) {
            $bl = strlen($buffer);
            for ($i = 0; $i < $raw_salt_len; $i++) {
                if ($i < $bl) {
                    $buffer[$i] = $buffer[$i] ^ chr(mt_rand(0, 255));
                } else {
                    $buffer .= chr(mt_rand(0, 255));
                }
            }
        }

        $salt = $buffer;

        // encode string with the Base64 variant used by crypt
        $base64_digits   = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';
        $bcrypt64_digits = './ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $base64_string   = base64_encode($salt);
        $salt = strtr(rtrim($base64_string, '='), $base64_digits, $bcrypt64_digits);

	    $salt = substr($salt, 0, $this->salt_length);


		return $salt;

	}
	
	public function check_paypass($user_id, $pass)
	{
		$pass = sha1($pass);
		$res = $this->db->get_where('employees', array('emp_id' => $user_id, 'password' => $pass))->num_rows();
		
		return $res;
	}
}
