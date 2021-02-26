<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datapribadi extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		$level = $this->session->userdata('level');
		if ($level !== '1') {
			redirect('Auth');
		}
		$this->load->model('m_profile');
	}

	public function profile()
	{

		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$t_profile = $this->m_profile->tampil($username)->result();

		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'t_profile' => $t_profile,'scripts' =>array());
		$this->template->load('Kepala/static','Kepala/Halamanprofile',$data);
	}
	public function updatepassword()
	{
		$id = $this->input->post('id');
		$password = md5($this->input->post('password'));

		$data = array ('password'=>$password);
		$where = array ('id'=>$id);
		$this->m_profile->updatepassword($where,$data,'user');
		redirect('kepala/datapribadi/profile');
	}

	
	  

}

/* End of file Laporan.php */
/* Location: ./application/controllers/kepala/Laporan.php */