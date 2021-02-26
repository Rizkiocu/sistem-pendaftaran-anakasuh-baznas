<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		$level = $this->session->userdata('level');
		if ($level !== '1') {
			redirect('Auth');
		}
		$this->load->model('m_sekolah');
		$this->load->model('m_laporan');
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'scripts' =>array());
		$this->template->load('kepala/static','kepala/Halamanlaporan',$data);
	}

	public function laporan_jenjang()
	  {

	  	$jenjang = $this->input->post('jenjang');

	  	$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');
		
		$preview = $this->m_laporan->tampil_data($jenjang)->result();

		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'preview' => $preview,'scripts' => array());
		$this->template->load('kepala/static','kepala/preview',$data);
	  }
	public function cetak($nisn=0)
		
	{
		
	if ($nisn == 0) {
		$data = $this->db->get('siswa')->result();
	
	}
		
	else
		{
		$data = $this->db->get_where('siswa', ['nisn'=>$nisn])->result();
		
	}
		$dt['laporan'] = $data;
		$this->load->library('mypdf');
		$this->mypdf->generate('cetak/cetak_siswa', $dt, 'siswa', 'A4', 'landscape');
	}
	  

}

/* End of file Laporan.php */
/* Location: ./application/controllers/kepala/Laporan.php */