<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile extends CI_Model {

	
	public function tampil($username) {

		$data = $this->db->query("SELECT * FROM user where user.username='$username' ");
		return $data;
	}

	public function updatedatapribadi($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function updatepassword($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}

/* End of file m_profile.php */
/* Location: ./application/models/m_profile.php */