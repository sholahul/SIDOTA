<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dokumen extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	//1. Show All dokumen TA
    public function show_dokumen()
    {
        return $this->db->get('dokumenta');
    }

    //2. Action delete dokumen ta
    public function delete_dokumen($id){
        $this->db->where('id', $id);
        $this->db->delete('dokumenta');
    }

    //3. show dokumen ta verified
    public function show_dokumen_verified()
    {
        $this->db->where('verifikasi', '1');
        return $this->db->get('dokumenta');
    }

    //4. download pdf file from sql
    public function download($id){
        $this->db->where('id', $id);
        return $this->db->get('dokumenta');  

    }

    //5. show dokumen mahasiswa untuk dosen verifikasi
    public  function show_dokumen_dosen_verified($data){
        $this->db->where('nppa', $data['user']);
        $this->db->where('verifikasi',$data['status']);
        return $this->db->get('dokumenta');
    }

    //6. join mhs dosen
    public function join_mhs_dosen($data){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('dokumenta', 'nim = nimmhs');
        $this->db->where('dokumenta.nppa', $data['user']);
        $this->db->where('dokumenta.verifikasi',$data['status']);
        return $this->db->get();

    }
	
    //7. model acc doc from action_acc_dokumen
    public function action_acc($user){
        //where username != user
        $d['verifikasi'] = 1;

        $this->db->where('nppa', $user);

        if($this->db->update('dokumenta',$d)){
            return true;
        }
        else{
            return false;
        }
    }


}

/* End of file m_dokumen.php */
/* Location: ./application/models/m_dokumen.php */