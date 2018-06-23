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

	//3. Action ubah password dari view ubah_password
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
	}

	//4. Funtion load profile
	public function profile($user = ''){
		$data = array(
			'user' => $user,
		);
		$data['content']=$this->m_dosen->show_profile($data);

		$this->load->view('dosen/header',$data);
		$this->load->view('dosen/profil',$data);
      	$this->load->view('dosen/footer');
	}

	//5. Function AKSI update profile dari view profile  with parameter
	public function action_updateprofile($userv='')
	{
		$user = $userv;

		$data['nama'] = $this->input->post('nama');
        $data['tempat_lahir'] = $this->input->post('tempat_lahir');
        $data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['email'] = $this->input->post('email');
        $data['nohp'] = $this->input->post('nohp');
        $data['alamat'] = $this->input->post('alamat');
        

        // foreach ($data as $key){
        // 	echo $key;
        // }
        if($this->m_dosen->update_profile($data,$user)){
			echo '<script language="javascript">';
			echo 'alert("Data Berhasil diubah")';
			echo '</script>';
			
			$data['user'] = $user;

			$data['content'] = $this->m_dosen->show_profile($data);
			$this->load->view('dosen/header',$data);
        	$this->load->view('dosen/profil',$data);
      		$this->load->view('dosen/footer');
			
		}
    } 





	// public function verifikasi($username = ''){
	// 	$data = array(
	// 		'username' => $username,
	// 	);

	// 	$this->load->view('dosen/header',$data);
	// 	$this->load->view('dosen/verifikasi',$data);
 //      	$this->load->view('dosen/footer');
	// }
}