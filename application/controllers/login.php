<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public $data= [];
	public $user,$pwd;
	public function __construct()
	{
		parent::__construct();
		$username = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		$this->user = $username;
		$this->pwd = $password;
		// echo $username.$password;
		$this->load->library('session');
		$this->load->model('m_login');
	}	

	public function index()
	{
		$data = array(
            'title' => 'Login Page',
            'action' => site_url('auth/login'),

        );
		$this->load->view('login/login',$data);
	}



	public function process(){	
	    $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $data['role'] = $this->input->post('role');
        

        if($data['role'] == 'Admin'){
          	if($this->m_login->can_login($data)){
          		$this->session->set_userdata($data);

          		$this->load->view('admin/header',$data);
          		$this->load->view('admin/dashboard',$data);
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
				$this->session->set_userdata($data);

				$this->load->view('mahasiswa/header', $data);
				$this->load->view('mahasiswa/dashboard', $data);
				$this->load->view('mahasiswa/footer', $data);
				
           	}
           	else{
				redirect('Login');
				exit;  
           	}		
		}		

	}
	public function logout(){
		redirect(base_url());
		exit;
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */