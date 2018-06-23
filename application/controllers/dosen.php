<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller{
	var $user;

	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_dosen');
		$username = $this->session->userdata('username');
				
	}

	public function index()
	{

	}


	//1. Funtion go to the dashboard with parameter user login
	public function dashboard($user = ''){
		$data = array(
			'user' => $user, 
		);
		
		$this->load->view('dosen/header',$data);
        $this->load->view('dosen/dashboard',$data);
      	$this->load->view('dosen/footer');
	}


	//2. Function Ubahpassword with parameter go to dosen ubahpassword view
	public function ubahpassword($user = ''){		
		$data = array(
			'user' => $user, 
		);
		$this->load->view('dosen/header',$data);
        $this->load->view('dosen/ubahpassword',$data);
      	$this->load->view('dosen/footer');
	}


	public function action_ubahpassword($user = ''){
		$pwd1 = $this->input->post('pwd1');
		$pwd2 = $this->input->post('pwd2');

		$data = array(
			'user' => $user, 
			'password' => $this->input->post('pwd1'),
		);
		
		if($pwd1 != $pwd2){
			echo '<script language="javascript">';
			echo 'alert("password not match")';
			echo '</script>';

			$this->load->view('dosen/header',$data);
       		$this->load->view('dosen/ubahpassword',$data);
      		$this->load->view('dosen/footer');
		}else{
			if($this->m_dosen->update_pwd($data['user'],$data['password'])){
				echo '<script language="javascript">';
				echo 'alert("Password Berhasil diubah silahkan login terlebih dahulu")';
				echo '</script>';
				
				redirect('Login','refresh');
				exit;
			}
			
			
		}
		// echo $data['username']."  ".$data['pwd1']."  ".$data['pwd2'];
	}

	public function verifikasi($username = ''){
		$data = array(
			'username' => $username,
		);

		$this->load->view('dosen/header',$data);
		$this->load->view('dosen/verifikasi',$data);
      	$this->load->view('dosen/footer');
	}

	public function profile($user = ''){
		$data = array(
			'user' => $user,
		);
		$data['content']=$this->m_dosen->show_profile($data);

		$this->load->view('dosen/header',$data);
		$this->load->view('dosen/profil',$data);
      	$this->load->view('dosen/footer');
	}



	// public function edit_profile($username = ''){
	// 	$data = array(
	// 		'username' => $username,
	// 	);

	// 	$this->load->view('dosen/header',$data);
	// 	$this->load->view('dosen/edit_profile',$data);
 //      	$this->load->view('dosen/footer');
	// }

	// public function DokumentasiTA($username = ''){
	// 	$data = array(
	// 		'username' => $username,
	// 	);

	// 	$this->load->view('dosen/header',$data);
	// 	$this->load->view('dosen/DokumentasiTA',$data);
 //      	$this->load->view('dosen/footer');
	// }

	// public function viewTA($username = ''){
	// 	$data = array(
	// 		'username' => $username,
	// 	);

	// 	$this->load->view('dosen/header',$data);
	// 	$this->load->view('dosen/viewTA',$data);
 //      	$this->load->view('dosen/footer');
	// }
}