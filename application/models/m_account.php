<?php defined ('BASEPATH') or exit ('No direct script access allowed');

class M_account extends CI_Model {
	
	public function daftar($data){
		$this->db->insert('anggota', $data);
	}
}