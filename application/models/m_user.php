<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
	
	public function tampil() {
		$data = $this->db->query("SELECT * FROM user");
		return $data;
	}

	public function tambah($data,$table)
	{
		$this->db->insert($table, $data);
	}

	public function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	
}