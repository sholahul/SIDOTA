<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public $data= [];
	var $user = "";
	var $error = "e";

	public function __construct()
	{
		parent::__construct();
		$user = $this->session->userdata('user');
		$password = $this->session->userdata('password');
		$this->user = $user;
		$this->pwd = $password;
		// echo $username.$password;

		$this->load->library('session');
		$this->load->model('m_login');
	}	

	public function index()
	{
		$data = array(
            'user' => $this->user,
        );
		$this->load->view('login/login',$data);
	}



	public function process(){	
	    $data['user'] = $this->input->post('user');
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
				redirect('Login?msg=1');
           	}			
		}

		else if($data['role'] == 'Dosen'){
			if($this->m_login->can_login($data)){
			    $this->session->set_userdata($data);
			    
    			$this->load->view('dosen/header',$data);
    			$this->load->view('dosen/dashboard', $data);
				$this->load->view('dosen/footer', $data);	      
           	}
           	else{
				redirect('Login?msg=1');
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
				redirect('Login?msg=1');
           	}		
		}		

	}
	public function logout(){
	    $this->session->sess_destroy();
		redirect(base_url());
		exit;
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */