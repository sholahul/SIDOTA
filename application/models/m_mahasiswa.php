<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do 
	}

	//1. Model update password
    public function update_pwd($user,$password){
		$this->db->where('nim', $user);
        $data['nim'] = $user;
        $data['password'] = $password;
        
        if($this->db->update('mahasiswa',$data)){
        	return true;
        }
        else{
        	return false;
        }
       
	}

	//2.model show_profile mahasiswa selected
	public function show_profile($data){
	    $this->db->where('nim',$data['user']);
	    return $this->db->get('mahasiswa');
    }    

    //3. Model update profile mahasiswa
    public function update_profile($data , $user){
        //where username != user
    	$this->db->where('nim', $user);
    	if($this->db->update('mahasiswa',$data)){
        	return true;
        }
        else{
        	return false;
        }
    }
	

}

/* End of file m_mahasiswa.php */
/* Location: ./application/models/m_mahasiswa.php */