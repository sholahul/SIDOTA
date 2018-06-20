<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('login.php');
class Dosen extends CI_Controller{
	public $data2 =[];

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
<<<<<<< HEAD
	
=======
		
>>>>>>> 5e9fc06d09205a886a54212ede0645389a8b3cf5
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

	public function edit_profile($username = ''){
		$data = array(
			'username' => $username,
		);

		$this->load->view('dosen/header',$data);
		$this->load->view('dosen/edit_profile',$data);
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