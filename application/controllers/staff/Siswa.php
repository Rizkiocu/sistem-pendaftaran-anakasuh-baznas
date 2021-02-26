<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		$level = $this->session->userdata('level');

		if ($level !== '2') {
			redirect('Auth');
		}
		$this->load->model('m_siswa');
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$siswa = $this->m_siswa->tampil()->result();

		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'siswa' => $siswa,'scripts' =>array());
		$this->template->load('Staff/static','Staff/validasi',$data);
	}

	public function validasi()
	{
		$status = "0";
		$nisn = $this->input->post('nisn');
		$data = array(
			
			'status' => $status
			);

	$where = array(
		'nisn' => $nisn
	);
		$this->session->set_flashdata('success',  '<div class="alert alert-success" style="text-align:center">Data Siswa Berhasil di Aktifkan!!!</div>');
		$this->m_siswa->update($where,$data,'siswa');
		redirect('staff/siswa');
	}

	public function ubah_sd()
	{
		$status = "1";
		$nisn = $this->input->post('nisn');
		$data = array(
			
			'status' => $status
			);

	$where = array(
		'nisn' => $nisn
	);
		$this->session->set_flashdata('success',  '<div class="alert alert-danger" style="text-align:center">Data Siswa Berhasil di Non-Aktifkan!!!</div>');
		$this->m_siswa->update($where,$data,'siswa');
		redirect('staff/siswa/tampil_sd');
	}
	public function ubah_smp()
	{
		$status = "1";
		$nisn = $this->input->post('nisn');
		$data = array(
			
			'status' => $status
			);

	$where = array(
		'nisn' => $nisn
	);
		$this->session->set_flashdata('success',  '<div class="alert alert-danger" style="text-align:center">Data Siswa Berhasil di Non-Aktifkan!!!</div>');
		$this->m_siswa->update($where,$data,'siswa');
		redirect('staff/siswa/tampil_smp');
	}
	public function ubah_sma()
	{
		$status = "1";
		$nisn = $this->input->post('nisn');
		$data = array(
			
			'status' => $status
			);

	$where = array(
		'nisn' => $nisn
	);
		$this->session->set_flashdata('success',  '<div class="alert alert-danger" style="text-align:center">Data Siswa Berhasil di Non-Aktifkan!!!</div>');
		$this->m_siswa->update($where,$data,'siswa');
		redirect('staff/siswa/tampil_sma');
	}

	public function tampil_sd()
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$siswa = $this->m_siswa->tampil_sd()->result();

		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'siswa' => $siswa,'scripts' =>array());
		$this->template->load('Staff/static','Staff/sd',$data);
	}
	public function tampil_smp()
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$siswa = $this->m_siswa->tampil_smp()->result();

		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'siswa' => $siswa,'scripts' =>array());
		$this->template->load('Staff/static','Staff/smp',$data);
	}

	public function tampil_sma()
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$siswa = $this->m_siswa->tampil_sma()->result();

		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'siswa' => $siswa,'scripts' =>array());
		$this->template->load('Staff/static','Staff/sma',$data);
	}


	
}
