<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beasiswa extends CI_Controller {

public function __construct()
	{
		parent:: __construct();

		$level = $this->session->userdata('level');

		if ($level !== '3') {
			redirect('Auth');
		}
		$this->load->model('m_beasiswa');
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$siswa = $this->m_beasiswa->tampil_siswa()->result();
		$beasiswa = $this->m_beasiswa->tampil()->result();

		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'beasiswa' => $beasiswa, 'siswa' => $siswa ,'scripts' =>array());
		$this->template->load('umum/static','umum/Halamanbeasiswa',$data);
	}


	public function tambah()
	{		
		$this->form_validation->set_rules(
			'nisn',
			'nisn',
			'trim|required|is_unique[beasiswa.nisn]'
		);
		$this->form_validation->set_rules(
			'no_rek',
			'no_rek',
			'trim|required|is_unique[beasiswa.no_rek]'
		);
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('gagal', '<div class="alert alert-danger" role="alert">
				Gagal Menambahkan Data!!<br>
				Data Sudah Ada!!!
				
			</div>');
			redirect('umum/beasiswa');
		}else{
		$nisn = $this->input->post('nisn');
		$nama_bank = $this->input->post('nama_bank');	
		$no_rek = $this->input->post('no_rek');
		$nominal = $this->input->post('nominal');

		$data = array(
			'nisn' => $nisn,
			'nama_bank' => $nama_bank,
			'no_rek' => $no_rek,
			'nominal' => $nominal

			);		
		$this->session->set_flashdata('message', '<div class="alert alert-success" style="text-align:center">Data Beasiswa Berhasil ditambahkan</div>');
		$this->m_beasiswa->tambah($data,'beasiswa');
		
		redirect('umum/beasiswa');
		}
	}

	public function update()
	{
		$id_bs = $this->input->post('id_bs');		
		$no_rek = $this->input->post('no_rek');
		$nisn = $this->input->post('nisn');
		$nama_bank = $this->input->post('nama_bank');
		$nominal = $this->input->post('nominal');
		

	$data = array(

		'no_rek' => $no_rek,
		'nisn' => $nisn,
		'nama_bank' => $nama_bank,
		'nominal' => $nominal,
		
	);

	$where = array(
		'id_bs' => $id_bs
	);


	$this->m_beasiswa->update($where,$data,'beasiswa');
	redirect('umum/beasiswa');
	}



	

	public function hapus($id_bs)
	{
		$where = array('id_bs' => $id_bs);
		$this->m_beasiswa->hapus($where,'beasiswa');
		redirect('umum/beasiswa');
	}

}

/* End of file Beasiswa.php */
/* Location: ./application/controllers/staff/Beasiswa.php */