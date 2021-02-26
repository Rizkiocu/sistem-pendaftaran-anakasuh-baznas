<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		$level = $this->session->userdata('level');

		if ($level !== '1') {
			redirect('Auth');
		}
		$this->load->model('m_user');
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$user = $this->m_user->tampil()->result();

		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'user' => $user,'scripts' =>array());
		$this->template->load('Kepala/static','Kepala/Halamanuser',$data);
	}

	public function tambah()
	{	
		$this->form_validation->set_rules(
			'username',
			'username',
			'trim|required|is_unique[user.username]'
		);
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('gagal', '<div class="alert alert-danger" role="alert">
				Gagal Menambahkan Data!!<br>
				username sudah digunakan!!
				
			</div>');
			redirect('kepala/user');
		}else{
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$jk = $this->input->post('jk');
		$jabatan = $this->input->post('jabatan');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$password = md5($this->input->post('password'));
		$level = $this->input->post('level');
 
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'jenis_kelamin' => $jk,
			'email' => $email,
			'jabatan' => $jabatan,
			'no_hp' => $no_hp,
			'level' => $level
			);
		$this->session->set_flashdata('message', '<div class="alert alert-success" style="text-align:center">Data User Berhasil disimpan</div>');
		$this->m_user->tambah($data,'user');
		redirect('kepala/user');
		}
	}

	public function update()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$jk = $this->input->post('jk');
		$jabatan = $this->input->post('jabatan');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$password = md5($this->input->post('password'));
		$level = $this->input->post('level');

	$data = array(
		'nama' => $nama,
		'username' => $username,
		'jenis_kelamin' => $jk,
		'no_hp' => $no_hp,
		'jabatan' => $jabatan,
		'email' => $email,
		'password' => $password,
		'level' => $level
	);

	$where = array(
		'id' => $id
	);


	$this->m_user->update($where,$data,'user');
	redirect('kepala/user');
	}


	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_user->hapus($where,'user');
		redirect('kepala/user');
	}

	
}
