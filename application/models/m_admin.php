<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do 
	}

    //1. Model update password
	public function update_pwd($data){
		$this->db->where('username', $data['username']);
        
        if($this->db->update('admin',$data)){
        	return true;
        }
        else{
        	return false;
        }
       
	}

    //2.model show_profile
	public function show_profile($data){
	    $this->db->where('username',$data['username']);
	    return $this->db->get('admin');
    }    

    //3. Model update profile admin
    public function update_profile($data , $user){
        //where username != user
    	$this->db->where('username', $user);
    	if($this->db->update('admin',$data)){
        	return true;
        }
        else{
        	return false;
        }
    }

    //4. Model show admin_list with parameter data[] 
    public function show_admin($data)
    {
        $username = $data['username'];

        //where username != username
        $this->db->where('username !=',$username);
        // select * from my table (admin)
        return $this->db->get('admin');
    }

    //5. Model Delete selected username from controller admin function action_delete_admin
    public function delete_admin($data){

        $this->db->where('username', $data['username']);
        // $this->db->delete('admin');
        if($this->db->delete('admin')){
            return true;
        }
        else{
            return false;
        }

        // Produces:
        // DELETE FROM mytable
        // WHERE id = $id
    }

    //6, Model Add Admin (insert) to db
    public function add_admin($data)
    {
        $username = $data['username'];
        $this->db->where('username',$username);
        // select * from my table (admin)
        if($this->db->get('admin')){ //check jika data ada
            return false;
        }
        else{
            if($this->db->insert('admin',$data)){
                return true;
            }
            else{
                return false;
            }
        }
        
    }

    //7. Model Ubah admin where
    public function ubah_admin($data)
    {
        $username = $data['username'];

        //where username == username
        $this->db->where('username',$username);
        // select * from my table (admin)
        return $this->db->get('admin');
    }

    //8. model action ubah admin from controller action_ubah_admin

    public function action_ubah_admin($data)
    {
        $username = $data['username'];

        //where username == username
        $this->db->where('username',$username);

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