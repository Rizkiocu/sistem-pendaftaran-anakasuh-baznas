<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {
	
	public function tampil_data($jenjang)
	{
		$data = $this->db->query("SELECT *, (siswa.status )as stts FROM siswa left join(sekolah,keluarga,lampiran) on siswa.npsn=sekolah.npsn AND keluarga.nisn=siswa.nisn AND lampiran.nisn=siswa.nisn where siswa.status = '0' AND sekolah.jenjang='$jenjang' order by siswa.nisn DESC");
		return $data;
	}



	

	public function tambah($data,$table)
	{
		$this->db->insert($table, $data);
	}
}