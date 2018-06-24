<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dosen extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do 
	}

	// public function show_profile(){
 //        $hasil=$this->db->query("SELECT * FROM dosen WHERE nip = 1");
 //        return $hasil;
 //    }    


    //1. Model update password
    public function update_pwd($user,$password){
		$this->db->where('nip', $user);
        $data['nip'] = $user;
        $data['password'] = $password;
        
        if($this->db->update('dosen',$data)){
        	return true;
        }
        else{
        	return false;
        }
       
	}

	//2.model show_profile dosen selected
	public function show_profile($data){
	    $this->db->where('nip',$data['user']);
	    return $this->db->get('dosen');
    }    

    //3. Model update profile dosen
    public function update_profile($data , $user){
        //where username != user
    	$this->db->where('nip', $user);
    	if($this->db->update('dosen',$data)){
        	return true;
        }
        else{
        	return false;
        }
    }

    //
    
}
