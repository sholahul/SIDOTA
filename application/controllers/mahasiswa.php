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
		$this->load->model('m_dokumen');
		$this->load->model('m_admin');

		$this->load->helper('url');
		
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

			$this->load->view('mahasiswa/header',$data);
       		$this->load->view('mahasiswa/ubahpassword',$data);
      		$this->load->view('mahasiswa/footer');
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

     //6. Function show_all dokumen
    public function show_dokumen($user='')
	{
		$data = array(
			'user' => $user, 
		);
		
		$data['content'] = $this->m_dokumen->show_dokumen_verified();
		
		$this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/viewdokumen',$data);
      	$this->load->view('mahasiswa/footer');
	}

	//7. own ta
	public function own_ta($user=''){
		$data = array(
			'user' => $user, 
		);

		$data['content'] = $this->m_dokumen->own_ta($user);
		$this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/own_dokumen',$data);
      	$this->load->view('mahasiswa/footer');

	}

	//
    public function upload_ta($user = '') {
		$data = array(
			'user' => $user,
		);

		$data['c_dosen'] = $this->m_admin->show_dosen($data);

		$this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/upload_ta',$data);
      	$this->load->view('mahasiswa/footer');
	}

	public function action_upload()
	{
		$data['nim'] = $this->input->post('nim');
        $data['angkatan'] = $this->input->post('angkatan');
        $data['nppa'] = $this->input->post('nppa');
        $data['judulta'] = $this->input->post('judulTA');
        $data['abstrak'] = $this->input->post('abstrak');

        $config['upload_path'] = 'assets/dokumenta/';
        $config['allowed_types'] = 'pdf';
        $config['max_size']  = '0';

		$this->load->library('upload');
		$this->upload->initialize($config);
        
        if ( ! $this->upload->do_upload('file_ta')){
			// $data = array (
			// 	'error' => $this->upload->display_errors());
			// 	'page_data' => 'mahasiswa/upload_ta';
			// );
            $error = array('error' => $this->upload->display_errors());
            echo '<script language="javascript">';
			echo $error['error'];
			echo '</script>';
        }
        else{
            $upload_data = $this->upload->data();
            $data['file_ta'] = $upload_data['file_name'];

            $this->m_dokumen->upload_ta($data);
            
            echo '<script language="javascript">';
			echo 'alert("Dokumen TA berhasil di simpan.")';
			echo '</script>';
			
			redirect('mahasiswa/show_dokumen/','refresh');
			

        }  
	}

	public function detail_ta($filename = '')
	{

		$data['publish_data'] = date('Y-m-d');
		$data['nimmhs'] = $this->input->post('nim');
		$data['nppa'] = $this->input->post('nppa');
		$data['judulta'] = $this->input->post('judulta');
		$data['abstrak'] = $this->input->post('abstrak');
		

		echo $data['publish_data'];

        // $data['tempat_lahir'] = $this->input->post('tempat_lahir');
        // $data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
        // $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        // $data['email'] = $this->input->post('email');
        // $data['nohp'] = $this->input->post('nohp');
        // $data['alamat'] = $this->input->post('alamat');



		$config['upload_path'] = './assets/dokumenta';
		$config['allowed_types'] = 'pdf';
		$config['max_size'] = "2048";
		
		$this->load->library('upload', $config);

		if(!$this->upload->do_upload('userFile') ){
			$error = array('error' =>$this->upload->display_errors());
		}
		else{
			$data = array('upload_data' => $this->upload->data() );
		}

		$data['content'] = $this->m_dokumen->get_detail_ta($filename);
		$this->load->view('mahasiswa/header', $data);
		$this->load->view('mahasiswa/detail_ta', $data);
		$this->load->view('mahasiswa/footer');	

	}
	
}

/* End of file mhs.php */
/* Location: ./application/controllers/mhs.php */