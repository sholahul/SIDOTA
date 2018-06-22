<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('login.php');
class Admin extends CI_Controller{
	//variable global data
	var $user;

	//construct dipanggil ketika controller dijalankan
	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('m_admin');
		$this->user = $this->session->userdata('user');

		// echo "hellow ".$this->username;
	}

	public function index()
	{

	}

	//1. Function Dashboard with parameter
	public function dashboard($user = ''){
		$data = array(
			'user' => $user, 
		);

		//passing value to variabel global
		// $this->username = $data['username'];
		//echo $this->username;

		$this->load->view('admin/header',$data);
        $this->load->view('admin/dashboard',$data);
      	$this->load->view('admin/footer');
	}

	//2. Function Ubahpassword with parameter
	public function ubahpassword($user = ''){
		// echo $username;		
		$data = array(
			'user' => $user, 
		);
		$this->load->view('admin/header',$data);
        $this->load->view('admin/ubahpassword',$data);
      	$this->load->view('admin/footer');
	}

	//3. Function Aksi dari ubahpassword  with parameter
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

			$this->load->view('admin/header',$data);
       		$this->load->view('admin/ubahpassword',$data);
      		$this->load->view('admin/footer');
		}else{
			if($this->m_admin->update_pwd($data['user'],$data['password'])){
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
	public function profile($user = ''){
		$data = array(
			'user' => $user,
		);
		// echo $user;

		$data['content'] = $this->m_admin->show_profile($data);

		$this->load->view('admin/header',$data);
        $this->load->view('admin/profil',$data);
      	$this->load->view('admin/footer');
	}

	//5. Function AKSI update profile view profile  with parameter
	public function action_updateprofile($userv='')
	{
		$user = $userv;

		$data['username'] = $this->input->post('username');
        $data['tempat_lahir'] = $this->input->post('tempat_lahir');
        $data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
        $data['email'] = $this->input->post('email');
        $data['alamat'] = $this->input->post('alamat');
        $data['nohp'] = $this->input->post('nohp');

        // foreach ($data as $key){
        // 	echo $key;
        // }
        if($this->m_admin->update_profile($data,$user)){
			echo '<script language="javascript">';
			echo 'alert("Data Berhasil diubah")';
			echo '</script>';
			
			$data['user'] = $data['username'];
			$this->user = $data['user'];

			$data['content'] = $this->m_admin->show_profile($data);
			$this->load->view('admin/header',$data);
        	$this->load->view('admin/profil',$data);
      		$this->load->view('admin/footer');
			
		}
    } 

	//5. Function load view menampilkan daftar admin list  with parameter
	public function admin_list($user =''){
      	$data = array(
			'user' => $user, 
		);
		
		$data['content'] = $this->m_admin->show_admin($data);
		

		$this->load->view('admin/header',$data);
        $this->load->view('admin/lists_admin',$data);
      	$this->load->view('admin/footer');
 
	}

	//6. Function delete selected username from view list_admin
	public function action_delete_admin($usernames ='')
    {
        	$data['username'] = $usernames;

        	$this->m_admin->delete_admin($data);
            //passing value from controller login variable global session
            //set username awal login bukan selected s
        	$data['user'] = $this->user;
            // passing value from model show_admin to variabel array data['content'] 

            $data['content'] = $this->m_admin->show_admin($data);

            $this->load->view('admin/header',$data);
            $this->load->view('admin/lists_admin',$data);
            $this->load->view('admin/footer');
        
    }


    //7. Function Show page insert admin from list_admin
    public function add_admin($user = ''){
		$data = array(
			'user' => $user, 
		);
		// $data['user'] = $this->user;
		$this->load->view('admin/header',$data);
        $this->load->view('admin/add_admin',$data);
      	$this->load->view('admin/footer');

	}

	//8. Function insert to database admin 
	public function action_add_admin($user='')
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

		//cek apakah username sudah ada di db?

		if($this->m_admin->check_unique_username($data['username'])){
			echo '<script language="javascript">';
			echo 'alert("Username Tidak Unique")';
			echo '</script>';

			$data['user'] = $user;
			$this->load->view('admin/header',$data);
	        $this->load->view('admin/add_admin',$data);
	      	$this->load->view('admin/footer');



		}else{
			if($this->m_admin->add_admin($data)){ //return 1 jika gagal
				echo '<script language="javascript">';
				echo 'alert("Data tidak berhasil ditambahkan")';
				echo '</script>';
				$data['user'] = $user;
				$this->load->view('admin/header',$data);
	        	$this->load->view('admin/add_admin',$data);
	      		$this->load->view('admin/footer');
			}else{ //jika return 0 berati tidak ada baris yg terubah
				echo '<script language="javascript">';
				echo 'alert("Data berhasil ditambahkan")';
				echo '</script>';
				$data['user'] = $user;
				$data['content'] = $this->m_admin->show_admin($data);
				$this->load->view('admin/header',$data);
	        	$this->load->view('admin/lists_admin',$data);
	      		$this->load->view('admin/footer');
			}

		}
	}

	// 9.  Function Show page ubah admin from list_admin selected variable username
	public function ubah_admin($username='')
	{
		$data = array(
			'username' => $username, 

		);

		$data['content'] = $this->m_admin->ubah_admin($data);

		$data['user'] = $this->user;

		$this->load->view('admin/header',$data);
        $this->load->view('admin/ubah_admin',$data);
      	$this->load->view('admin/footer'); 	
	} 

	//10. Function action ubah_admin from view ubah_admin get user now,not selected

	public function action_ubah_admin($user='')
	{
		$data = array(
			'password' => $this->input->post('password'), 
			'tempat_lahir' => $this->input->post('tempat_lahir'), 
			'tanggal_lahir' => $this->input->post('tanggal_lahir'), 
			'email' => $this->input->post('email'), 
			'alamat' => $this->input->post('alamat'), 
			'nohp' => $this->input->post('nohp'), 
		);

		if($this->m_admin->action_ubah_admin($data,$user)){
			echo '<script language="javascript">';
			echo 'alert("Data Berhasil diubah")';
			echo '</script>';

			$data['user'] = $this->user;
			$data['content'] = $this->m_admin->show_admin($data);

			$this->load->view('admin/header',$data);
        	$this->load->view('admin/lists_admin',$data);
      		$this->load->view('admin/footer');

		}else{
			echo '<script language="javascript">';
			echo 'alert("Data tidak lengkap")';
			echo '</script>';

			$data['user'] = $this->user;
			$data['content'] = $this->m_admin->show_admin($data);
			$this->load->view('admin/header',$data);
        	$this->load->view('admin/ubah_admin',$data);
      		$this->load->view('admin/footer'); 
		}	

	}

	//11. Function load view menampilkan daftar DOSEN  list  with parameter
	public function dosen_list($user =''){
      	$data = array(
			'user' => $user, 
		);
		
		$data['content'] = $this->m_admin->show_dosen($data);
		

		$this->load->view('admin/header',$data);
        $this->load->view('admin/lists_dosen',$data);
      	$this->load->view('admin/footer');
 
	}

	//12. Function delete dosen
	public function action_delete_dosen($nip ='')
    {
        $data['nip'] = $nip;

        $this->m_admin->delete_dosen($data);
            //passing value from controller login variable global session
            //set username awal login bukan selected s
        $data['user'] = $this->user;
           // passing value from model show_admin to variabel array data['content'] 

        $data['content'] = $this->m_admin->show_dosen($data);

        $this->load->view('admin/header',$data);
        $this->load->view('admin/lists_dosen',$data);
        $this->load->view('admin/footer');
        
    }

    //13. Function ubah dosen controller to view ubah_dosen.php
    public function ubah_dosen($nip='')
	{
		$data = array(
			'nip' => $nip, 
		);

		$data['content'] = $this->m_admin->ubah_dosen($data);

		$data['user'] = $this->user;

		$this->load->view('admin/header',$data);
        $this->load->view('admin/ubah_dosen',$data);
      	$this->load->view('admin/footer'); 	
	} 

    //14. Function Action Ubah Dosen
    public function action_ubah_dosen($nip='')
	{

		$data = array(
			'nama' => $this->input->post('nama'),
			'password' => $this->input->post('password'), 
			'tempat_lahir' => $this->input->post('tempat_lahir'), 
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jabatan' => $this->input->post('jabatan'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'), 
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'), 
			'nohp' => $this->input->post('nohp'), 
		);

		if($this->m_admin->action_ubah_dosen($data,$nip)){
			echo '<script language="javascript">';
			echo 'alert("Data Berhasil diubah")';
			echo '</script>';

			$data['user'] = $this->user;
			$data['content'] = $this->m_admin->show_dosen($data);

			$this->load->view('admin/header',$data);
        	$this->load->view('admin/lists_dosen',$data);
      		$this->load->view('admin/footer');

		}else{
			echo '<script language="javascript">';
			echo 'alert("Data tidak lengkap")';
			echo '</script>';

			$data['user'] = $this->user;
			$data['content'] = $this->m_admin->show_dosen($data);
			$this->load->view('admin/header',$data);
        	$this->load->view('admin/ubah_dosen',$data);
      		$this->load->view('admin/footer'); 
		}	

	}

	//15. Function Show page insert dosen from list_dosen
    public function add_dosen($user = ''){
		$data = array(
			'user' => $user, 
		);

		$this->load->view('admin/header',$data);
        $this->load->view('admin/add_dosen',$data);
      	$this->load->view('admin/footer');

	}

	//16. Function insert to database dosen 
	public function action_add_dosen($user='')
	{
		//get input from view add_admin
		$data = array(
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama'),
			'password' => $this->input->post('password'), 
			'tempat_lahir' => $this->input->post('tempat_lahir'), 
			'tanggal_lahir' => $this->input->post('tanggal_lahir'), 
			'jabatan' => $this->input->post('jabatan'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'), 
			'nohp' => $this->input->post('nohp'), 
		);

		// foreach ($data as $key) {
		// 	# code...
		// 	echo $key;
		// }

		//cek apakah username sudah ada di db?

		if($this->m_admin->check_unique_nip($data['nip'])){
			echo '<script language="javascript">';
			echo 'alert("Nip Tidak Unique")';
			echo '</script>';

			$data['user'] = $user;
			$this->load->view('admin/header',$data);
	        $this->load->view('admin/add_dosen',$data);
	      	$this->load->view('admin/footer');
		}else{
			if($this->m_admin->add_dosen($data)){ //return 1 jika gagal
				echo '<script language="javascript">';
				echo 'alert("Data tidak berhasil ditambahkan")';
				echo '</script>';
				$data['user'] = $user;
				$this->load->view('admin/header',$data);
	        	$this->load->view('admin/add_dosen',$data);
	      		$this->load->view('admin/footer');
			}else{ //jika return 0 berati tidak ada baris yg terubah
				echo '<script language="javascript">';
				echo 'alert("Data berhasil ditambahkan")';
				echo '</script>';
				$data['user'] = $user;
				$data['content'] = $this->m_admin->show_dosen($data);
				$this->load->view('admin/header',$data);
	        	$this->load->view('admin/lists_dosen',$data);
	      		$this->load->view('admin/footer');
			}

		}
	}

	

}