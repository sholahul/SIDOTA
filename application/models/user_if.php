<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_if extends CI_Model {
	public function __construct()
	{
		parent::__construct();

		$this->data['table_name']	= 'admin';
		$this->data['primary_key']	= 'username';
	}

	public function login($data)
	{
		$result = $this->get_row(['username' => $data['username'], 'password' => $data['password']]);
		if (!isset($result))
			return $result;
		$this->session->set_userdata(['username'	=> $result->username]);
		return $result;
	}

}

/* End of file user.php */
/* Location: ./application/models/user.php */