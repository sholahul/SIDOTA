<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do 
	}

    //1. Model update password
	public function update_pwd($user,$password){
		$this->db->where('username', $user);
        $data['username'] = $user;
        $data['password'] = $password;
        
        if($this->db->update('admin',$data)){
        	return true;
        }
        else{
        	return false;
        }
       
	}

    //2.model show_profile
	public function show_profile($data){
	    $this->db->where('username',$data['user']);
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
        $user = $data['user'];

        //where username != username
        $this->db->where('username !=',$user);
        // select * from my table (admin)
        return $this->db->get('admin');
    }

    //5. Model Delete selected username from controller admin function action_delete_admin
    public function delete_admin($data){

        $this->db->where('username', $data['username']);
        $this->db->delete('admin');
    }

    //6, Model Add Admin (insert) to db
    public function add_admin($data)
    {
        $this->db->insert('admin',$data); //insert data
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

    public function action_ubah_admin($data, $user)
    {
        $this->db->where('username', $user);
        if($this->db->update('admin',$data)){
            return true;
        }
        else{
            return false;
        }
    }

    //9. Check username saat menambahkan data
    public function check_unique_username($username) {
        $this->db->where_in('username', $username);
        return $this->db->get('admin')->num_rows();
    }

    //11. Show dosen select *from dosen
    public function show_dosen($data)
    {
        return $this->db->get('dosen');

    }

    //12. DELETE DOSEN WHERE nip = post[nip]

    public function delete_dosen($data){
        $this->db->where('nip', $data['nip']);
        $this->db->delete('dosen');
    }

    //13. Show selected dosen
    public function ubah_dosen($data)
    {
        $nip = $data['nip'];

        //where nip = $nip
        $this->db->where('nip',$nip);
        // select * from my table (dosen)
        return $this->db->get('dosen');
    }

    //14. model action ubah dosen from controller action_ubah_admin

    public function action_ubah_dosen($data, $nip)
    {
        $this->db->where('nip', $nip);
        if($this->db->update('dosen',$data)){
            return true;
        }
        else{
            return false;
        }
    }

    //15. Check nip saat menambahkan data
    public function check_unique_nip($nip) {
        $this->db->where_in('nip', $nip);
        return $this->db->get('dosen')->num_rows();
    }

    //16. Model Add dosen (insert) to db
    public function add_dosen($data)
    {
        $this->db->insert('dosen',$data); //insert data
    }



    //17. Show dosen select *from mahasiswa
    public function show_mahasiswa($data)
    {
        return $this->db->get('mahasiswa');
    }

    //18. DELETE mahasiswa WHERE nim = post[nim]

    public function delete_mahasiswa($data){
        $this->db->where('nim', $data['nim']);
        $this->db->delete('mahasiswa');
    }

    //19. get nppa from dosen
    public function get_nip(){
        // $this->db->select('nip');
        return $this->db->get('dosen');
    }

    //20. Show selected mahasiswa
    public function ubah_mahasiswa($data)
    {
        $nim = $data['nim'];

        //where nim == $nim
        $this->db->where('nim',$nim);
        // select * from my table (mahasiswa)
        return $this->db->get('mahasiswa');
    }

     //21. model action ubah mahasiswa from controller action_ubah_mahasiswa
    public function action_ubah_mahasiswa($data, $nim)
    {
        $this->db->where('nim', $nim);
        if($this->db->update('mahasiswa',$data)){
            return true;
        }
        else{
            return false;
        }
    }

    //22. Check nim saat menambahkan data
    public function check_unique_nim($nim) {
        $this->db->where_in('nim', $nim);
        return $this->db->get('mahasiswa')->num_rows();
    }

    //23. Model Add dosen (insert) to db
    public function add_mahasiswa($data)
    {
        $this->db->insert('mahasiswa',$data); //insert data
    }

}
/* End of file m_admin.php */
/* Location: ./application/models/m_admin.php */