<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		$level = $this->session->userdata('level');

		if ($level !== '2') {
			redirect('Auth');
		}
		$this->load->model('m_absen');
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$siswa_sd   = $this->m_absen->siswa_sd();

		$pertanggal_sd = $this->m_absen->pertanggal_sd();
		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules('tanggal','Tanggal','required|is_unique[absen.tanggal]',
			array(	'required'	=> 'Tanggal harus diisi',
					'is_unique'	=> 'Mohon maaf, tanggal <strong>'.$this->input->post('tanggal').
									'</strong> absensi sudah ada.'));
		
		if($valid->run() === FALSE) {
		
		$data = array(	'usernamenya' => $username,
						'namanya' => $nama,
						'levelnya' => $level,
						'siswa_sd'		=> $siswa_sd,
						'pertanggal_sd' => $pertanggal_sd,
						'scripts' =>array());
		$this->template->load('staff/static','staff/v_absen',$data);
		}else{
			$i = $this->input;	

			// Proses masuk ke tabel RELASI barang
	        $tanggal 	= $this->input->post('tanggal');

			foreach($siswa_sd as $siswa) {
				$nisn			= $siswa['nisn'];
				$input_keterangan	= 'keterangan_'.$nisn;
				$keterangan 		= $i->post($input_keterangan);

				$data_sd = array(	'nisn'		=>$nisn,
								'tanggal'		=> $tanggal,
								'keterangan'	=> $keterangan,
								);
				$this->m_absen->tambah($data_sd,'absen');
			}
			// End proses				
			$this->session->set_flashdata('sukses','Absensi telah disimpan');
			redirect(base_url('staff/absen'));
		}
	}

	public function smp()
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$siswa_smp   = $this->m_absen->siswa_smp();

		$pertanggal_smp = $this->m_absen->pertanggal_smp();
		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules('tanggal','Tanggal','required|is_unique[absen.tanggal]',
			array(	'required'	=> 'Tanggal harus diisi',
					'is_unique'	=> 'Mohon maaf, tanggal <strong>'.$this->input->post('tanggal').
									'</strong> absensi sudah ada.'));
		
		if($valid->run() === FALSE) {
		
		$data = array(	'usernamenya' => $username,
						'namanya' => $nama,
						'levelnya' => $level,
						'siswa_smp'		=> $siswa_smp,
						'pertanggal_smp' => $pertanggal_smp,
						'scripts' =>array());
		$this->template->load('staff/static','staff/absen_smp',$data);
		}else{
			$i = $this->input;	

			// Proses masuk ke tabel RELASI barang
	        $tanggal 	= $this->input->post('tanggal');

			foreach($siswa_smp as $siswa) {
				$nisn			= $siswa['nisn'];
				$input_keterangan	= 'keterangan_'.$nisn;
				$keterangan 		= $i->post($input_keterangan);

				$data_smp = array(	'nisn'		=>$nisn,
								'tanggal'		=> $tanggal,
								'keterangan'	=> $keterangan,
								);
				$this->m_absen->tambah($data_smp,'absen');
			}
			// End proses				
			$this->session->set_flashdata('sukses','Absensi telah disimpan');
			redirect(base_url('staff/absen/smp'));
		}
	}

	public function sma()
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$siswa_sma   = $this->m_absen->siswa_sma();

		$pertanggal_sma = $this->m_absen->pertanggal_sma();
		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules('tanggal','Tanggal','required|is_unique[absen.tanggal]',
			array(	'required'	=> 'Tanggal harus diisi',
					'is_unique'	=> 'Mohon maaf, tanggal <strong>'.$this->input->post('tanggal').
									'</strong> absensi sudah ada.'));
		
		if($valid->run() === FALSE) {
		
		$data = array(	'usernamenya' => $username,
						'namanya' => $nama,
						'levelnya' => $level,
						'siswa_sma'		=> $siswa_sma,
						'pertanggal_sma' => $pertanggal_sma,
						'scripts' =>array());
		$this->template->load('staff/static','staff/absen_sma',$data);
		}else{
			$i = $this->input;	

			// Proses masuk ke tabel RELASI barang
	        $tanggal 	= $this->input->post('tanggal');

			foreach($siswa_sma as $siswa) {
				$nisn			= $siswa['nisn'];
				$input_keterangan	= 'keterangan_'.$nisn;
				$keterangan 		= $i->post($input_keterangan);

				$data_sma = array(	'nisn'		=>$nisn,
								'tanggal'		=> $tanggal,
								'keterangan'	=> $keterangan,
								);
				$this->m_absen->tambah($data_sma,'absen');
			}
			// End proses				
			$this->session->set_flashdata('sukses','Absensi telah disimpan');
			redirect(base_url('staff/absen/sma'));
		}
	}
	
	public function hapus($tanggal)
	{
		$where = array('tanggal' => $tanggal);
		$this->m_absen->hapus($where,'absen');
		$this->session->set_flashdata('hapus', 'data berhasil dihapus');
		redirect('staff/absen');
	}

	public function hapus_smp($tanggal)
	{
		$where = array('tanggal' => $tanggal);
		$this->m_absen->hapus($where,'absen');
		$this->session->set_flashdata('hapus', 'data berhasil dihapus');
		redirect('staff/absen/smp');
	}

	public function hapus_sma($tanggal)
	{
		$where = array('tanggal' => $tanggal);
		$this->m_absen->hapus($where,'absen');
		$this->session->set_flashdata('hapus', 'data berhasil dihapus');
		redirect('staff/absen/sma');
	}

	public function absen_sd($tgl)
	{
		
		$data = $this->db->query("SELECT *, (siswa.status )as stts FROM siswa left join(sekolah,absen,keluarga,beasiswa) on siswa.npsn=sekolah.npsn AND absen.nisn=siswa.nisn AND keluarga.nisn=siswa.nisn AND beasiswa.nisn=siswa.nisn where siswa.status = '0' AND absen.tanggal='$tgl' order by siswa.nisn DESC")->result();
		
		$dt['cetak_sd'] = $data;
		$this->load->library('mypdf');
		$this->mypdf->generate('cetak/cetak_sd', $dt, 'siswa', 'A4', 'landscape');
	}
	public function absen_smp($tgl)
	{
		
		$data = $this->db->query("SELECT *, (siswa.status )as stts FROM siswa left join(sekolah,absen,keluarga,beasiswa) on siswa.npsn=sekolah.npsn AND absen.nisn=siswa.nisn AND keluarga.nisn=siswa.nisn AND beasiswa.nisn=siswa.nisn where siswa.status = '0' AND absen.tanggal='$tgl' order by siswa.nisn DESC")->result();
		
		$dt['cetak_smp'] = $data;
		$this->load->library('mypdf');
		$this->mypdf->generate('cetak/cetak_smp', $dt, 'siswa', 'A4', 'landscape');
	}
	public function absen_sma($tgl)
	{
		
		$data = $this->db->query("SELECT *, (siswa.status )as stts FROM siswa left join(sekolah,absen,keluarga,beasiswa) on siswa.npsn=sekolah.npsn AND absen.nisn=siswa.nisn AND keluarga.nisn=siswa.nisn AND beasiswa.nisn=siswa.nisn where siswa.status = '0' AND absen.tanggal='$tgl' order by siswa.nisn DESC")->result();
		
		$dt['cetak_sma'] = $data;
		$this->load->library('mypdf');
		$this->mypdf->generate('cetak/cetak_sma', $dt, 'siswa', 'A4', 'landscape');
	}

	public function lihat($tgl)
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');
		$tanggal = $this->m_absen->lihat($tgl)->result();
		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'tanggal' => $tanggal,'scripts' =>array());
		
		$this->template->load('staff/static','staff/lihat',$data);
	}

	public function lihat_smp($tgl)
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');
		$tanggal = $this->m_absen->lihat($tgl)->result();
		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'tanggal' => $tanggal,'scripts' =>array());
		
		$this->template->load('staff/static','staff/lihat_smp',$data);
	}
	public function lihat_sma($tgl)
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');
		$tanggal = $this->m_absen->lihat($tgl)->result();
		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'tanggal' => $tanggal,'scripts' =>array());
		
		$this->template->load('staff/static','staff/lihat_sma',$data);
	}


}



/* End of file Jadwal.php */
/* Location: ./application/controllers/staff/Jadwal.php */