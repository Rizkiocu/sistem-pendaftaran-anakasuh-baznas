<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_absen extends CI_Model {

        public function absen_sd() {
            $this->db->select('*');
            $this->db->from('siswa');
            // Join dengan satu tabel     
            $this->db->join('absen','absen.nisn = siswa.nisn','LEFT');
            $this->db->join('sekolah','siswa.npsn = sekolah.npsn','LEFT');                  
            //$this->db->join('absensi','absensi.id_siswa = siswa.id_siswa','LEFT');  
            $this->db->where('siswa.status="0" AND sekolah.jenjang="1"');                      
            $this->db->order_by('siswa.nisn');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function absen_smp() {
            $this->db->select('*');
            $this->db->from('siswa');
            // Join dengan satu tabel     
            $this->db->join('absen','absen.nisn = siswa.nisn','LEFT');
            $this->db->join('sekolah','siswa.npsn = sekolah.npsn','LEFT');                  
            //$this->db->join('absensi','absensi.id_siswa = siswa.id_siswa','LEFT');  
            $this->db->where('siswa.status="0" AND sekolah.jenjang="2"');                      
            $this->db->order_by('siswa.nisn');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function absen_sma() {
            $this->db->select('*');
            $this->db->from('siswa');
            // Join dengan satu tabel     
            $this->db->join('absen','absen.nisn = siswa.nisn','LEFT');
            $this->db->join('sekolah','siswa.npsn = sekolah.npsn','LEFT');                  
            //$this->db->join('absensi','absensi.id_siswa = siswa.id_siswa','LEFT');  
            $this->db->where('siswa.status="0" AND sekolah.jenjang="3"');                      
            $this->db->order_by('siswa.nisn');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function siswa_sd() {
            $this->db->select('*');
            $this->db->from('siswa');
            $this->db->join('sekolah','siswa.npsn = sekolah.npsn','LEFT');                  
            //$this->db->join('absensi','absensi.id_siswa = siswa.id_siswa','LEFT');  
            $this->db->where('siswa.status="0" AND sekolah.jenjang="1"');                      
            $this->db->order_by('siswa.nisn');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function pertanggal_sd() {
            $this->db->select('*');
            $this->db->from('absen');            
            $this->db->join('siswa','siswa.nisn = absen.nisn','LEFT');             
            $this->db->where('siswa.kelas="4,6,5,3,2,1"');   
            $this->db->group_by('tanggal');
            $this->db->order_by('tanggal','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function siswa_alfa($pertanggal) {
            $this->db->select('*');
            $this->db->from('absen');
            $this->db->where(array( 'tanggal'    => $pertanggal,
                                    'keterangan' => 'Alfa'));
            $this->db->order_by('tanggal','ASC');
            $query = $this->db->get();
            return $query->result_array();
        } 
        public function siswa_hadir($pertanggal) {
            $this->db->select('*');
            $this->db->from('absen');
            $this->db->where(array( 'tanggal'    => $pertanggal,
                                    'keterangan' => 'Hadir'));
            $this->db->order_by('tanggal','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }         
        public function siswa_izin($pertanggal) {
            $this->db->select('*');
            $this->db->from('absen');
            $this->db->where(array( 'tanggal'    => $pertanggal,
                                    'keterangan' => 'Izin'));
            $this->db->order_by('tanggal','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }        
        public function siswa_sakit($pertanggal) {
            $this->db->select('*');
            $this->db->from('absen');
            $this->db->where(array( 'tanggal'    => $pertanggal,
                                    'keterangan' => 'Sakit'));
            $this->db->order_by('tanggal','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function siswa_smp() {
            $this->db->select('*');
            $this->db->from('siswa');
            // Join dengan satu tabel     
            $this->db->join('sekolah','siswa.npsn = sekolah.npsn','LEFT');                  
            //$this->db->join('absensi','absensi.id_siswa = siswa.id_siswa','LEFT');  
            $this->db->where('siswa.status="0" AND sekolah.jenjang="2"');                      
            $this->db->order_by('siswa.nisn');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function pertanggal_smp() {
            $this->db->select('*');
            $this->db->from('absen');            
            $this->db->join('siswa','siswa.nisn = absen.nisn','LEFT');             
            $this->db->where('siswa.kelas="7,8,9"');   
            $this->db->group_by('tanggal');
            $this->db->order_by('tanggal','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function siswa_alfa_smp($pertanggal_smp) {
            $this->db->select('*');
            $this->db->from('absen');
            $this->db->where(array( 'tanggal'    => $pertanggal_smp,
                                    'keterangan' => 'Alfa'));
            $this->db->order_by('tanggal','ASC');
            $query = $this->db->get();
            return $query->result_array();
        } 
        public function siswa_hadir_smp($pertanggal_smp) {
            $this->db->select('*');
            $this->db->from('absen');
            $this->db->where(array( 'tanggal'    => $pertanggal_smp,
                                    'keterangan' => 'Hadir'));
            $this->db->order_by('tanggal','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }         
        public function siswa_izin_smp($pertanggal_smp) {
            $this->db->select('*');
            $this->db->from('absen');
            $this->db->where(array( 'tanggal'    => $pertanggal_smp,
                                    'keterangan' => 'Izin'));
            $this->db->order_by('tanggal','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }        
        public function siswa_sakit_smp($pertanggal_smp) {
            $this->db->select('*');
            $this->db->from('absen');
            $this->db->where(array( 'tanggal'    => $pertanggal_smp,
                                    'keterangan' => 'Sakit'));
            $this->db->order_by('tanggal','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function siswa_sma() {
            $this->db->select('*');
            $this->db->from('siswa');
            // Join dengan satu tabel     
            $this->db->join('sekolah','siswa.npsn = sekolah.npsn','LEFT');                  
            //$this->db->join('absensi','absensi.id_siswa = siswa.id_siswa','LEFT');  
            $this->db->where('siswa.status="0" AND sekolah.jenjang="3"');                      
            $this->db->order_by('siswa.nisn');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function pertanggal_sma() {
            $this->db->select('*');
            $this->db->from('absen');            
            $this->db->join('siswa','siswa.nisn = absen.nisn','LEFT');             
            $this->db->where('siswa.kelas="10,11,12"');   
            $this->db->group_by('tanggal');
            $this->db->order_by('tanggal','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function siswa_alfa_sma($pertanggal_sma) {
            $this->db->select('*');
            $this->db->from('absen');
            $this->db->where(array( 'tanggal'    => $pertanggal_sma,
                                    'keterangan' => 'Alfa'));
            $this->db->order_by('tanggal','ASC');
            $query = $this->db->get();
            return $query->result_array();
        } 
        public function siswa_hadir_sma($pertanggal_sma) {
            $this->db->select('*');
            $this->db->from('absen');
            $this->db->where(array( 'tanggal'    => $pertanggal_sma,
                                    'keterangan' => 'Hadir'));
            $this->db->order_by('tanggal','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }         
        public function siswa_izin_sma($pertanggal_sma) {
            $this->db->select('*');
            $this->db->from('absen');
            $this->db->where(array( 'tanggal'    => $pertanggal_sma,
                                    'keterangan' => 'Izin'));
            $this->db->order_by('tanggal','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }        
        public function siswa_sakit_sma($pertanggal_sma) {
            $this->db->select('*');
            $this->db->from('absen');
            $this->db->where(array( 'tanggal'    => $pertanggal_sma,
                                    'keterangan' => 'Sakit'));
            $this->db->order_by('tanggal','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function tambah($data,$table)
        {
            $this->db->insert($table, $data);
        }
        public function hapus($where,$table)
        {
            $this->db->where($where);
            $this->db->delete($table);
        }

        public function lihat($tgl)
        {
            $data = $this->db->query("SELECT *, (siswa.status )as stts FROM siswa left join(sekolah,absen,keluarga,beasiswa) on siswa.npsn=sekolah.npsn AND absen.nisn=siswa.nisn AND keluarga.nisn=siswa.nisn AND beasiswa.nisn=siswa.nisn where siswa.status = '0' AND absen.tanggal='$tgl' order by siswa.nisn DESC");
            return $data;
        }


	

}

/* End of file m_jadwal.php */
/* Location: ./application/models/m_jadwal.php */