<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function validate(){
		$username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        // Prep the query
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        
        // Run the query
        $query = $this->db->get('users');
        // Let's check if there are any results
        if($query->num_rows == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'userid' => $row->userid,
                    'fname' => $row->fname,
                    'lname' => $row->lname,
                    'username' => $row->username,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
	}

}

/* End of file m_login.php */
/* Location: ./application/models/m_login.php */