<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('login.php');
class Dosen extends Login{
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

		$this->load->model('m_dosen');
		
	}
	public function index()
	{

	}

	public function dashboard($username = ''){
		$data = array(
			'username' => $username, 
		);
		
		$this->load->view('dosen/header',$data);
        $this->load->view('dosen/dashboard',$data);
      	$this->load->view('dosen/footer');
	}

		public function ubahpassword($username = ''){
		// echo $username;		
		$data = array(
			'username' => $username, 
		);
		$this->load->view('dosen/header',$data);
        $this->load->view('dosen/ubahpassword',$data);
      	$this->load->view('dosen/footer');
	}
	public function action_ubahpassword($username = ''){
		$data = array(
			'username' => $username, 
			'pwd1' => $this->input->post('pwd1'),
			'pwd2' => $this->input->post('pwd2'),
			'error' => '',
		);
		if($data['pwd1'] != $data['pwd2']){
			$data['error'] = "password not match";
			echo $data['error'];

			redirect('dosen/ubahpassword','refresh');
		}
	}

	public function verifikasi($username = ''){
		$data = array(
			'username' => $username,
		);

		$this->load->view('dosen/header',$data);
		$this->load->view('dosen/verifikasi',$data);
      	$this->load->view('dosen/footer');
	}

	public function profile($username = ''){
		$data = array(
			'username' => $username,
		);
		$x['data']=$this->m_dosen->show_profile();

		$this->load->view('dosen/header',$data);
		$this->load->view('dosen/profile',$x);
      	$this->load->view('dosen/footer');
	}

	public function DokumentasiTA($username = ''){
		$data = array(
			'username' => $username,
		);

		$this->load->view('dosen/header',$data);
		$this->load->view('dosen/DokumentasiTA',$data);
      	$this->load->view('dosen/footer');
	}

	public function viewTA($username = ''){
		$data = array(
			'username' => $username,
		);

		$this->load->view('dosen/header',$data);
		$this->load->view('dosen/viewTA',$data);
      	$this->load->view('dosen/footer');
	}
}