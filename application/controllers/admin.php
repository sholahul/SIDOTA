<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		echo "Hello world";
	}

	public function dashboard(){
		$this->load->view('admin/header');
        $this->load->view('admin/dashboard');
      	$this->load->view('admin/footer');
	}

	public function ubahpassword(){
		$this->load->view('admin/header');
        $this->load->view('admin/ubahpassword');
      	$this->load->view('admin/footer');
	}


}