<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('login.php');
class Mahasiswa extends CI_Controller{

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
		
		$this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/dashboard',$data);
      	$this->load->view('mahasiswa/footer');
	}

	public function ubahpassword($username = ''){
		// echo $username;		
		$data = array(
			'username' => $username, 
		);
		$this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/ubahpassword',$data);
      	$this->load->view('mahasiswa/footer');
	}
	public function action_ubahpassword($username = ''){
		$data = array(
			'username' => $username, 
			'pwd1' => $this->input->post('pwd1'),
			'pwd2' => $this->input->post('pwd2'),
		);
		echo $data['username'];
	}

	public function viewdokumen($username = '') {
		$data = array(
			'username' => $username,
		);
		$this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/viewdokumen',$data);
      	$this->load->view('mahasiswa/footer');
	}

	public function upload_ta($username = '') {
		$data = array(
			'username' => $username,
		);
		$this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/upload_ta',$data);
      	$this->load->view('mahasiswa/footer');
	}

	public function detail_ta($username = '') {
		$data = array(
			'username' => $username,
		);

		$this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/detail_ta',$data);
      	$this->load->view('mahasiswa/footer');
	}
}

/* End of file mhs.php */
/* Location: ./application/controllers/mhs.php */