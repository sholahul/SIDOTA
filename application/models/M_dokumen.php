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
        $this->db->select('*');
        $this->db->from('dokumenta');
        $this->db->join('mahasiswa', 'mahasiswa.nim = dokumenta.nimmhs'); 
        return $this->db->get();
    }

    //2. Action delete dokumen ta
    public function delete_dokumen($id){
        $this->db->where('id', $id);
        $this->db->delete('dokumenta');
    }

    //3. show dokumen ta verified
    public function show_dokumen_verified()
    {
        $this->db->select('*');
        $this->db->from('dokumenta');
        $this->db->join('mahasiswa', 'mahasiswa.nim = dokumenta.nimmhs'); 
        $this->db->where('verifikasi', '1');
        return $this->db->get();
    }

    public function show_dokumen_verified_mhs($user)
    {
        $this->db->select('*');
        $this->db->from('dokumenta');
        $this->db->join('mahasiswa', 'mahasiswa.nim = dokumenta.nimmhs'); 
        $this->db->where('verifikasi', '1');
        $this->db->where('dokumenta.nppa', $user);

        return $this->db->get();
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

    //8. show own dokumen ta mahasiswa
    public  function own_ta($user){   
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('dokumenta', 'mahasiswa.nim = dokumenta.nimmhs ');
        
        $this->db->where('nimmhs', $user);
        return $this->db->get();
    }

    public function check_ta_mahasiswa($user){
       
        $this->db->where('nimmhs',$user);
        return $this->db->get('dokumenta');
    }

    public function upload_ta($dokumen)
    {
        $this->db->set('publish_date', 'NOW()', FALSE);
        $this->db->set('nimmhs', $dokumen['nim']);
        $this->db->set('nppa', $dokumen['nppa']);
        $this->db->set('judulta', $dokumen['judulta']);
        $this->db->set('abstrak', $dokumen['abstrak']);
        $this->db->set('path', $dokumen['file_ta']);
        $this->db->set('verifikasi', 0);
        $this->db->insert('dokumenta');  
    }

    public function get_detail_ta($filename)
    {
        $this->db->select('mahasiswa.nama AS `nama_mhs`, nimmhs, dosen.nama as `nama_dosen`, judulta, publish_date, abstrak, path');
        $this->db->from('dokumenta');
        $this->db->join('mahasiswa', 'mahasiswa.nim = dokumenta.nimmhs');
        $this->db->join('dosen', 'dosen.nip = dokumenta.nppa');
        $this->db->where('path', $filename);
        return $this->db->get();
        ;
    }
}

/* End of file m_dokumen.php */
/* Location: ./application/models/m_dokumen.php */