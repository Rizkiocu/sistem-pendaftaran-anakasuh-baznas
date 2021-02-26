<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') !== '1') {
			redirect('Auth');
		}
	}

	public function index()
	{
			$userData = $this->session->userdata();
			$data = array('usernamenya' => $userData['username'],'namanya' => $userData['nama'],'levelnya' => $userData['level'],'scripts' =>array());
			$this->template->load('Kepala/static','Kepala/dashboard',$data);
	}
}