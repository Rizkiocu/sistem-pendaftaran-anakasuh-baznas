<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sekolah extends CI_Model {

	
	public function tampil() {
		$data = $this->db->query("SELECT * FROM sekolah");
		return $data;
	}

	public function tampil_laporan()
	{
		$data = $this->db->query("SELECT DISTINCT jenjang FROM sekolah");
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

	public function sd()
	{
		$data = $this->db->query("SELECT * FROM sekolah where nama_sekolah LIKE 'SD%'");
		return $data;	
	}
	public function smp()
	{	
		$data = $this->db->query("SELECT * FROM sekolah where nama_sekolah LIKE 'SMP%'");
		return $data;	
	}
	public function sma()
	{
		$data = $this->db->query("SELECT * FROM sekolah where nama_sekolah LIKE 'SMU%'");
		return $data;	
	}
}

/* End of file m_sekolah.php */
/* Location: ./application/models/m_sekolah.php */