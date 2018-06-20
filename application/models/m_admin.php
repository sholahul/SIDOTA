<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do 
	}

	public function update_pwd($data){
		$this->db->where('username', $data['username']);
        
        if($this->db->update('admin',$data)){
        	return true;
        }
        else{
        	return false;
        }
       
	}
	function show_profile($data){
	    $this->db->where('username',$data['username']);
	    return $this->db->get('admin');
    }    

    function update_profile($data , $user){
    	$this->db->where('username', $user);
    	 if($this->db->update('admin',$data)){
        	return true;
        }
        else{
        	return false;
        }
    }
}

/* End of file m_admin.php */
/* Location: ./application/models/m_admin.php */