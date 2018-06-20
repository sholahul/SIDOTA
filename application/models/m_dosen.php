<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dosen extends CI_Model {

	 function show_profile(){

            $hasil=$this->db->query("SELECT * FROM dosen WHERE nip = 1");

            return $hasil;

      }    
}
