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
	}



	public function process(){		
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $data['role'] = $this->input->post('role');
        $this->load->model('m_login');

        if($data['role'] == 'Admin'){
          	if($this->m_login->can_login($data)){
    			$this->load->view('admin/index',$data);	      
           	}
           	else{
				redirect('Login');
				exit;  
           	}			
		}

		else if($data['role'] == 'Dosen'){
			if($this->m_login->can_login($data)){
    			$this->load->view('dosen/index',$data);	      
           	}
           	else{
				redirect('Login');
				exit;  
           	}		
		}
		else if($data['role'] == 'Mahasiswa'){
			if($this->m_login->can_login($data)){
    			$this->load->view('mahasiswa/index',$data);	      
           	}
           	else{
				redirect('Login');
				exit;  
           	}		
		}		

	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */