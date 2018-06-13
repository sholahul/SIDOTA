<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	// private $data = [];

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('login/login');

		// redirect('login','refresh');
	}

	public function process(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$role = $this->input->post('role');
		
		if($role == 'Admin'){
			$this->load->view('admin/index');
		}
		else if($role == 'Dosen'){
			$this->load->view('dosen/index');
		}
		else if($role == 'Mahasiswa'){
			$this->load->view('mahasiswa/index');
		}

		// $result = $this->m_login->validate();

		// if(! $result){
		// 	$this->index();
		// }
		// else{
		// 	redirect('admin/admin','refresh');
		// }

		
		// // $role = $this->input->post('username');
		// $where = array(
		// 	'username' => $username,
		// 	'password' => $password,
		// );
		// $this->load->view('admin/admin');

	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */