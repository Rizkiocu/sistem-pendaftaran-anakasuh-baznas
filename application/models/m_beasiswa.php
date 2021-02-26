<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_beasiswa extends CI_Model {
	
	public function tampil() {
		$data = $this->db->query("SELECT * FROM beasiswa left join(siswa) on beasiswa.nisn=siswa.nisn  order by no_rek DESC");
		return $data;
	}
	public function tampil_siswa() {
		$data = $this->db->query("SELECT * FROM siswa left join(sekolah) on siswa.npsn=sekolah.npsn where siswa.status ='0' ");
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

/* End of file m_beasiswa.php */
/* Location: ./application/models/m_beasiswa.php */