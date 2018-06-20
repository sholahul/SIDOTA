<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('login.php');
class Admin extends CI_Controller{
	public $data =[];

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		
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
		$pwd1 = $this->input->post('pwd1');
		$pwd2 = $this->input->post('pwd2');

		$data = array(
			'username' => $username, 
			'password' => $this->input->post('pwd1'),
		);
		if($pwd1 != $pwd2){
			echo '<script language="javascript">';
			echo 'alert("password not match")';
			echo '</script>';

			$this->load->view('admin/header',$data);
       		$this->load->view('admin/ubahpassword',$data);
      		$this->load->view('admin/footer');
		}else{
			if($this->m_admin->update_pwd($data)){
				echo '<script language="javascript">';
				echo 'alert("Password Berhasil diubah silahkan login terlebih dahulu")';
				echo '</script>';
				
				redirect('Login','refresh');
				exit;
			}
			
			
		}
		// echo $data['username']."  ".$data['pwd1']."  ".$data['pwd2'];

	}

	public function admin_list($username =''){
		$data = array(
			'username' => $username, 
		);
		
		$this->load->view('admin/header',$data);
        $this->load->view('admin/lists_admin',$data);
      	$this->load->view('admin/footer');
	}

	public function dosen_list($username =''){
		$data = array(
			'username' => $username, 
		);
		
		$this->load->view('admin/header',$data);
        $this->load->view('admin/lists_dosen',$data);
      	$this->load->view('admin/footer');
	}

	public function mahasiswa_list($username =''){
		$data = array(
			'username' => $username, 
		);
		
		$this->load->view('admin/header',$data);
        $this->load->view('admin/lists_mahasiswa',$data);
      	$this->load->view('admin/footer');
	}

	public function profile($username = ''){
		$data = array(
			'username' => $username,
		);

		$data['content'] = $this->m_admin->show_profile($data);

		$this->load->view('admin/header',$data);
        $this->load->view('admin/profil',$data);
      	$this->load->view('admin/footer');
	}

	public function action_updateprofile($username='')
	{
		$data['username'] = $this->input->post('username');
        $data['tempat_lahir'] = $this->input->post('tempat_lahir');
        $data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
        $data['email'] = $this->input->post('email');
        $data['alamat'] = $this->input->post('alamat');
        $data['nohp'] = $this->input->post('nohp');

        echo $data;


	} 
}