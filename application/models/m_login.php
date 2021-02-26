<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
public function validasi($data)
{
	$query = $this->db->get_where('user', $data);
			return $query;
}
	

}

/* End of file m_login.php */
/* Location: ./application/models/m_login.php */