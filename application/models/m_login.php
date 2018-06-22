<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function can_login($data){
        // Run the query
        if($data['role']=='Admin'){
            $this->db->where('username', $data['user']);
            $this->db->where('password', $data['password']);
            $query = $this->db->get('admin');
        }
        else if($data['role']=='Dosen'){
            $this->db->where('nip', $data['user']);
            $this->db->where('password', $data['password']);
            $query = $this->db->get('dosen');
        }
        else if($data['role']=='Mahasiswa'){
            $this->db->where('nim', $data['user']);
            $this->db->where('password', $data['password']);
            $query = $this->db->get('mahasiswa');
        }

        //select *from namatable where username =  '$username' and password = '$password'

        // Let's check if there are any results
        if($query->num_rows() == 1)
        {
            // If there is a user, then create session data
            return true;
        }
        else{
            // If the previous process did not validate
            // then return false.
            return false;
        }
	}

}

/* End of file m_login.php */
/* Location: ./application/models/m_login.php */