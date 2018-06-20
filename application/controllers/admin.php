<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('login.php');
class Admin extends CI_Controller{
	//variable global data
	var $username;

	//construct dipanggil ketika controller dijalankan
	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('m_admin');
		$this->username = $this->session->userdata('username');

		// echo "hellow ".$this->username;
	}

	public function index()
	{

	}

	//1. Function Dashboard with parameter
	public function dashboard($username = ''){
		$data = array(
			'username' => $username, 
		);
		//passing value to variabel global
		$this->username = $data['username'];
		//echo $this->username;

		$this->load->view('admin/header',$data);
        $this->load->view('admin/dashboard',$data);
      	$this->load->view('admin/footer');
	}

	//2. Function Ubahpassword with parameter
	public function ubahpassword($username = ''){
		// echo $username;		
		$data = array(
			'username' => $username, 
		);
		$this->load->view('admin/header',$data);
        $this->load->view('admin/ubahpassword',$data);
      	$this->load->view('admin/footer');
	}

	//3. Function Aksi dari ubahpassword  with parameter
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

	//4. Function load view profile  with parameter
	public function profile($username = ''){
		$data = array(
			'username' => $username,
		);

		$data['content'] = $this->m_admin->show_profile($data);

		$this->load->view('admin/header',$data);
        $this->load->view('admin/profil',$data);
      	$this->load->view('admin/footer');
	}

	//5. Function AKSI update profile view profile  with parameter
	public function action_updateprofile($username='')
	{
		$user = $username;

		$data['username'] = $this->input->post('username');
        $data['tempat_lahir'] = $this->input->post('tempat_lahir');
        $data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
        $data['email'] = $this->input->post('email');
        $data['alamat'] = $this->input->post('alamat');
        $data['nohp'] = $this->input->post('nohp');

        // foreach ($data as $key){
        // 	echo $key;
        // }
        if($this->m_admin->update_pwd($data,$user)){
			echo '<script language="javascript">';
			echo 'alert("Data Berhasil diubah")';
			echo '</script>';
			
			$data['content'] = $this->m_admin->show_profile($data);
			$this->load->view('admin/header',$data);
        	$this->load->view('admin/profil',$data);
      		$this->load->view('admin/footer');
			
		}
    } 

	//5. Function load view menampilkan daftar admin list  with parameter
	public function admin_list($username =''){
      	$data = array(
			'username' => $username, 
		);
		
		//passing ke variabel global username
		$this->username = $data['username'];
		
		$data['content'] = $this->m_admin->show_admin($data);
		
		$this->load->view('admin/header',$data);
        $this->load->view('admin/lists_admin',$data);
      	$this->load->view('admin/footer');
 
	}

	//6. Function delete selected username from view list_admin
	public function action_delete_admin($usernames ='')
    {
        $data['username'] = $usernames;

        if($this->m_admin->delete_admin($data)){
            //passing value from controller login variable global session
            //set username awal login bukan selected 
        	$data['username'] = $this->username;
            // passing value from model show_admin to variabel array data['content'] 

            $data['content'] = $this->m_admin->show_admin($data);

            $this->load->view('admin/header',$data);
            $this->load->view('admin/lists_admin',$data);
            $this->load->view('admin/footer');
        }
    }

    //7. Function Show page insert admin from list_admin
    public function add_admin($username = ''){
		$data = array(
			'username' => $username, 
		);

		$this->load->view('admin/header',$data);
        $this->load->view('admin/add_admin',$data);
      	$this->load->view('admin/footer');

	}

	//8. Function insert to database admin 
	public function action_add_admin($username='')
	{
		//get input from view add_admin
		$data = array(
			'username' => $this->input->post('username'), 
			'password' => $this->input->post('password'), 
			'tempat_lahir' => $this->input->post('tempat_lahir'), 
			'tanggal_lahir' => $this->input->post('tanggal_lahir'), 
			'email' => $this->input->post('email'), 
			'alamat' => $this->input->post('alamat'), 
			'nohp' => $this->input->post('nohp'), 
		);

		// foreach ($data as $key) {
		// 	# code...
		// 	echo $key;
		// }
		if($this->m_admin->add_admin($data)){
			echo '<script language="javascript">';
			echo 'alert("Data Berhasil ditambahkan")';
			echo '</script>';

			
			$data['username'] = $this->username;
			$data['content'] = $this->m_admin->show_admin($data);
			
			$this->load->view('admin/header',$data);
	        $this->load->view('admin/lists_admin',$data);
	      	$this->load->view('admin/footer');
		}else{
			echo '<script language="javascript">';
			echo 'alert("username telah ada")';
			echo '</script>';

			$this->load->view('admin/header',$data);
	        $this->load->view('admin/add_admin',$data);
	      	$this->load->view('admin/footer');

		}
	}

	//9.  Function Show page ubah admin from list_admin
	public function ubah_admin($username='')
	{
		$data = array(
			'username' => $username, 
		);

		$data['content'] = $this->m_admin->ubah_admin($data);

		$data['username'] = $this->username;

		$this->load->view('admin/header',$data);
        $this->load->view('admin/ubah_admin',$data);
      	$this->load->view('admin/footer'); 	
	} 

	//10. Function action ubah_admin from view ubah_admin

	public function action_ubah_admin($username='')
	{
		$data = array(
			'username' => $this->input->post('username'), 
			'password' => $this->input->post('password'), 
			'tempat_lahir' => $this->input->post('tempat_lahir'), 
			'tanggal_lahir' => $this->input->post('tanggal_lahir'), 
			'email' => $this->input->post('email'), 
			'alamat' => $this->input->post('alamat'), 
			'nohp' => $this->input->post('nohp'), 
		);

		if($this->m_admin->action_ubah_admin($data)){
			echo '<script language="javascript">';
			echo 'alert("update admin berhasil")';
			echo '</script>';

			$data['content'] = $this->m_admin->show_admin($data);
			$data['username'] = $this->username;

			$this->load->view('admin/header',$data);
        	$this->load->view('admin/lists_admin',$data);
      		$this->load->view('admin/footer');

		}else{
			echo '<script language="javascript">';
			echo 'alert("username telah ada")';
			echo '</script>';

			$this->load->view('admin/header',$data);
        	$this->load->view('admin/ubah_admin',$data);
      		$this->load->view('admin/footer'); 
		}

		
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

	
}