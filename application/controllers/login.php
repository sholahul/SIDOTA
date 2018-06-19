<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public $error = "";

	public function __construct()
	{
		parent::__construct();
		
	}	

	public function index($error = NULL)
	{
		$data = array(
            'title' => 'Login Page',
            'action' => site_url('auth/login'),
            'error' => $error
        );
		$this->load->view('login/login',$data);
	}



	public function process(){	
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $data['role'] = $this->input->post('role');
        $this->load->model('m_login');

        if($data['role'] == 'Admin'){
          	if($this->m_login->can_login($data)){
          		$this->load->view('admin/header',$data);
          		$this->load->view('admin/dashboard');
          		$this->load->view('admin/footer');
    			// $this->load->view('admin/index',$data);	      
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