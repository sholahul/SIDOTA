<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('login.php');
class Mahasiswa extends CI_Controller{

	var $user;

	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('m_mahasiswa');
		$this->user = $this->session->userdata('user');

		//echo $data2['username'];
		
	}
	public function index()
	{
		
	}

	//1. Funtion load dashboard

	public function dashboard($user = ''){
		$data = array(
			'user' => $user, 
		);
		
		$this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/dashboard',$data);
      	$this->load->view('mahasiswa/footer');
	}

	//2. Function load halaman ubah password

	public function ubahpassword($user = ''){
		// echo $username;		
		$data = array(
			'user' => $user, 
		);

		$this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/ubahpassword',$data);
      	$this->load->view('mahasiswa/footer');
	}

	//3. Function Action ubah password from view ubah password

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
			if($this->m_mahasiswa->update_pwd($data['user'],$data['password'])){
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
		$data['content']=$this->m_mahasiswa->show_profile($data);

		$this->load->view('mahasiswa/header',$data);
		$this->load->view('mahasiswa/profil',$data);
      	$this->load->view('mahasiswa/footer');
	}

	//5. Function update profile mahasiswa
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
        if($this->m_mahasiswa->update_profile($data,$user)){
			echo '<script language="javascript">';
			echo 'alert("Data Berhasil diubah")';
			echo '</script>';
			
			$data['user'] = $user;

			$data['content'] = $this->m_mahasiswa->show_profile($data);
			$this->load->view('mahasiswa/header',$data);
        	$this->load->view('mahasiswa/profil',$data);
      		$this->load->view('mahasiswa/footer');
			
		}
    } 


	// public function viewdokumen($username = '') {
	// 	$data = array(
	// 		'username' => $username,
	// 	);
	// 	$this->load->view('mahasiswa/header',$data);
 //        $this->load->view('mahasiswa/viewdokumen',$data);
 //      	$this->load->view('mahasiswa/footer');
	// }

	// public function upload_ta($username = '') {
	// 	$data = array(
	// 		'username' => $username,
	// 	);
	// 	$this->load->view('mahasiswa/header',$data);
 //        $this->load->view('mahasiswa/upload_ta',$data);
 //      	$this->load->view('mahasiswa/footer');
	// }

	// public function detail_ta($username = '') {
	// 	$data = array(
	// 		'username' => $username,
	// 	);

	// 	$this->load->view('mahasiswa/header',$data);
 //        $this->load->view('mahasiswa/detail_ta',$data);
 //      	$this->load->view('mahasiswa/footer');
	// }
}

/* End of file mhs.php */
/* Location: ./application/controllers/mhs.php */