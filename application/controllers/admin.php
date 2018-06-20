<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('login.php');
class Admin extends Login{
	public $data2 =[];

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		
		$data2['username'] = $this->user;
		$data2['password'] = $this->pwd;
		
		$username = $this->session->userdata('username');
		$password = $this->session->userdata('password');

		//echo $data2['username'];
		
	}
	public function index()
	{
		
	}

	public function dashboard($username = ''){
		$data = array(
			'username' => $username, 
		);
		
		$this->load->view('admin/header',$data);
        $this->load->view('admin/dashboard',$data);
      	$this->load->view('admin/footer');
	}

	public function ubahpassword($username = ''){
		// echo $username;		
		$data = array(
			'username' => $username, 
		);
		$this->load->view('admin/header',$data);
        $this->load->view('admin/ubahpassword',$data);
      	$this->load->view('admin/footer');
	}
	public function action_ubahpassword($username = ''){
		$data = array(
			'username' => $username, 
			'pwd1' => $this->input->post('pwd1'),
			'pwd2' => $this->input->post('pwd2'),
		);
		echo $data['username'];

	}
}