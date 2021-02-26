<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		$level = $this->session->userdata('level');

		if ($level !== '3') {
			redirect('Auth');
		}
		$this->load->model('m_siswa');
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');
		$sekolah = $this->m_siswa->tampil_sekolah()->result();

		$siswa = $this->m_siswa->daftar()->result();

		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'siswa' => $siswa, 'sekolah' =>$sekolah ,'scripts' =>array());
		$this->template->load('umum/static','umum/daftar',$data);
	}

	public function tambah()
	{	$this->form_validation->set_rules(
			'nisn',
			'nisn',
			'trim|required|is_unique[siswa.nisn]'
		);
		$this->form_validation->set_rules(
			'no_kk',
			'no_kk',
			'trim|required|is_unique[keluarga.no_kk]'
		);
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('gagal', '<div class="alert alert-danger" role="alert">
				Gagal Menambahkan Data!!<br>
				data sudah ada!!
				
			</div>');
			
			redirect('umum/siswa');
		}else{

		$config['upload_path']          = './upload/foto/';
		$config['allowed_types']        = 'png|jpg|gif';
		$config['max_size']             = 2048;
		$config['max_width']            = 40000;
		$config['max_height']           = 40000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
				$this->session->set_flashdata('gagal', '<div class="alert alert-danger" role="alert">
				Gagal Menambahkan Data!!<br>
				Size gambar besar</div>');
				$error = array('error' => $this->upload->display_errors());
				redirect('umum/siswa');
		}
		else{
		$nisn = $this->input->post('nisn');
		$nama = $this->input->post('nama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$jk = $this->input->post('jk');		
		$npsn = $this->input->post('npsn');
		$kelas = $this->input->post('kelas');
		$no_hp = $this->input->post('no_hp');
		$status = "1";	 
		$data = array(
			'nisn' => $nisn,
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tgl_lahir' => $tgl_lahir,
			'alamat' => $alamat,
			'jenis_kelamin' => $jk,
			'npsn' => $npsn,
			'kelas' => $kelas,
			'no_hp' => $no_hp,
			'status' => $status
			);
		$this->m_siswa->tambah($data,'siswa');
			
		

        	 
		
		$nisn = $this->input->post('nisn');
		$no_kk = $this->input->post('no_kk');
		$nama_ayah = $this->input->post('nama_ayah');
		$nama_ibu = $this->input->post('nama_ibu'); 
		$kerja_ayah = $this->input->post('kerja_ayah');
		$kerja_ibu = $this->input->post('kerja_ibu');
		$anak = $this->input->post('anak');
		$jumlah_saudara = $this->input->post('jumlah_saudara');

		$datakeluarga = array(
			'nisn' => $nisn,
			'no_kk' => $no_kk,
			'nama_ayah' => $nama_ayah,
			'nama_ibu' => $nama_ibu,
			'kerja_ayah'=> $kerja_ayah,
			'kerja_ibu'=> $kerja_ibu,
			'anak'=> $anak,
			'jumlah_saudara'=> $jumlah_saudara
		);
		$this->m_siswa->tambah($datakeluarga,'keluarga');

			    	$img = $this->upload->data();
	              //Compress Image
					$nisn = $this->input->post('nisn');
			        $l_foto = $img['file_name']; 


                 $datafot = array(
                 	'nisn' => $nisn,
                    'l_foto'   => $l_foto
                 );	
				$this->session->set_flashdata('message', '<div class="alert alert-success" style="text-align:center">Data Siswa Berhasil ditambahkan</div>');
                $this->m_siswa->tambah($datafot, 'lampiran');

                redirect('umum/siswa');
		}

        
	  }
	}


		

	public function update()
	{
		$nisn = $this->input->post('nisn');
		$nama = $this->input->post('nama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$jk = $this->input->post('jk');		
		$npsn = $this->input->post('npsn');
		$kelas = $this->input->post('kelas');
		$no_hp = $this->input->post('no_hp');
		$data = array(
			
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tgl_lahir' => $tgl_lahir,
			'alamat' => $alamat,
			'jenis_kelamin' => $jk,
			'npsn' => $npsn,
			'kelas' => $kelas,
			'no_hp' => $no_hp
			);

	$where = array(
		'nisn' => $nisn
	);

		$this->m_siswa->update($where,$data,'siswa');

		
		$no_kk = $this->input->post('no_kk');
		$nama_ayah = $this->input->post('nama_ayah');
		$nama_ibu = $this->input->post('nama_ibu');
		$kerja_ayah = $this->input->post('kerja_ayah');
		$kerja_ibu = $this->input->post('kerja_ibu');
		$anak = $this->input->post('anak');
		$jumlah_saudara = $this->input->post('jumlah_saudara');
			
		$datakeluarga = array(		
			'nama_ayah' => $nama_ayah,
			'nama_ibu' => $nama_ibu,
			'kerja_ayah'=> $kerja_ayah,
			'kerja_ibu'=> $kerja_ibu,
			'anak'=> $anak,
			'jumlah_saudara'=> $jumlah_saudara 
		);
	$where = array(
		'no_kk' => $no_kk
	);

	$this->m_siswa->update($where,$datakeluarga,'keluarga');

		$id_lamp = $this->input->post('id_lamp');
		$data = $this->m_siswa->ambil($nisn)->row();
		$foto = './upload/foto/'.$data->l_foto;

		if(is_readable($foto) && unlink($foto)){
			$config['upload_path']          = './upload/foto/';
			$config['allowed_types']        = 'png|jpg|gif';
			$config['max_size']             = 2048;
			$config['max_width']            = 40000;
			$config['max_height']           = 40000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
					$error = array('error' => $this->upload->display_errors());
					
					redirect('umum/siswa');
			}
			else{
				$img = $this->upload->data();
	              //Compress Image
			        $l_foto = $img['file_name']; 


                 $datafot = array(
                    'l_foto'   => $l_foto
                 );	
                 $where = array(
					'id_lamp' => $id_lamp
				);
                $this->session->set_flashdata('success', '<div class="alert alert-success" style="text-align:center">Data Berhasil di Update</div>');
				$this->m_siswa->update($where,$datafot, 'lampiran');

				redirect('umum/siswa');
			}



			
		}else{
			$this->session->set_flashdata('success', '<div class="alert alert-success" style="text-align:center">Data Berhasil di Update</div>');
			redirect('umum/siswa');
		}
	

	}

 



	public function hapus($nisn)
	{
		$data = $this->m_siswa->ambil($nisn)->row();
		$nama = './upload/foto/'.$data->l_foto;
		$where = array('nisn' => $nisn);

		if(is_readable($nama) && unlink($nama)){
			$this->m_siswa->hapus($where, 'siswa');
			$this->session->set_flashdata('hapus', '<div class="alert alert-success" style="text-align:center">Data Berhasil di Hapus</div>');
			redirect('umum/siswa');
		}else{
			echo "Gagal";
		}


	}
}

		


		






