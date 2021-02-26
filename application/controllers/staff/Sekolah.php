<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		$level = $this->session->userdata('level');

		if ($level !== '2') {
			redirect('Auth');
		}
		$this->load->model('m_sekolah');
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$siswa = $this->m_sekolah->tampil()->result();

		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'siswa' => $siswa,'scripts' =>array());
		$this->template->load('staff/static','staff/Halamansekolah',$data);
	}

	public function tambah()
	{		
		$this->form_validation->set_rules(
			'npsn',
			'npsn',
			'trim|required|is_unique[sekolah.npsn]'
		);
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('gagal', '<div class="alert alert-danger" role="alert">
				Gagal Menambahkan Data!!<br>
				Kode sekolah sudah digunakan
				
			</div>');
			redirect('staff/sekolah');
		}else{
		$npsn = $this->input->post('npsn');
		$nama_sekolah = $this->input->post('nama_sekolah');
		$alamat_sekolah = $this->input->post('alamat_sekolah');
		$kecamatan = $this->input->post('kecamatan');
		$jenjang = $this->input->post('jenjang');
		$posisi = $this->input->post('posisi');
		
				
			$data = array(
			'npsn' => $npsn,
			'nama_sekolah' => $nama_sekolah,
			'alamat_sekolah' => $alamat_sekolah,
			'kecamatan' => $kecamatan,
			'jenjang' => $jenjang,
			'posisi' => $posisi,
			
			
			);
		$this->m_sekolah->tambah($data,'sekolah');
		redirect('staff/sekolah');
		}
	}

	public function update()
	{
		$npsn = $this->input->post('npsn');
		$nama_sekolah = $this->input->post('nama_sekolah');
		$alamat_sekolah = $this->input->post('alamat_sekolah');
		$kecamatan = $this->input->post('kecamatan');
		$jenjang = $this->input->post('jenjang');
		$posisi = $this->input->post('posisi');
		
				
			$data = array(
			'nama_sekolah' => $nama_sekolah,
			'alamat_sekolah' => $alamat_sekolah,
			'kecamatan' => $kecamatan,
			'jenjang' => $jenjang,
			'posisi' => $posisi,
			
			
			);

	$where = array(
		'npsn' => $npsn
	);

	$this->m_sekolah->update($where,$data,'sekolah');
	redirect('staff/sekolah');
	}

	public function hapus($npsn)
	{
		$where = array('npsn' => $npsn);
		$this->m_sekolah->hapus($where,'sekolah');
		redirect('staff/sekolah');
	}
	
}
