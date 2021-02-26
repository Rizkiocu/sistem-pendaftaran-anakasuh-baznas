<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {
	
	public function tampil() {
		$data = $this->db->query("SELECT *, (siswa.status )as stts FROM siswa left join(sekolah,keluarga,lampiran) on siswa.npsn=sekolah.npsn AND keluarga.nisn=siswa.nisn AND lampiran.nisn=siswa.nisn where siswa.status = '1'order by siswa.nisn DESC");
		return $data;
	}
	public function tampil_sd() {
		$data = $this->db->query("SELECT *, (siswa.status )as stts FROM siswa left join(sekolah,keluarga,lampiran) on  siswa.npsn=sekolah.npsn AND keluarga.nisn=siswa.nisn AND lampiran.nisn=siswa.nisn where sekolah.jenjang= '1' AND  siswa.status = '0' order by siswa.nisn DESC");
		return $data;
	}

	public function tampil_sekolah() {
		$data = $this->db->query("SELECT * FROM sekolah");
		return $data;
	}	

	public function tampil_smp() {
		$data = $this->db->query("SELECT *, (siswa.status )as stts FROM siswa left join(sekolah,keluarga,lampiran) on  siswa.npsn=sekolah.npsn AND keluarga.nisn=siswa.nisn AND lampiran.nisn=siswa.nisn where sekolah.jenjang= '2' AND  siswa.status = '0' order by siswa.nisn DESC");
		return $data;
	}
	public function tampil_sma() {
		$data = $this->db->query("SELECT *, (siswa.status )as stts FROM siswa left join(sekolah,keluarga,lampiran) on  siswa.npsn=sekolah.npsn AND keluarga.nisn=siswa.nisn AND lampiran.nisn=siswa.nisn where sekolah.jenjang= '3' AND  siswa.status = '0' order by siswa.nisn DESC");
		return $data;
	}

	public function daftar() {
		$data = $this->db->query("SELECT *, (siswa.status )as stts FROM siswa left join(sekolah,keluarga,lampiran) on siswa.npsn=sekolah.npsn AND keluarga.nisn=siswa.nisn AND lampiran.nisn=siswa.nisn where siswa.status = '1'order by siswa.nisn DESC");
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

	
	public function ambil($nisn){
        return $this->db->get_where('lampiran', array('nisn'=>$nisn));
    }

	
}