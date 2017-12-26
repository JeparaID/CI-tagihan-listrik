<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Tablepelanggan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ( $this->session->userdata('userid') and 
			 $this->session->userdata('pass') )
		{	
		$this->load->helper('url');
		$this->load->model('m_formpelanggan');
		} else
		{	redirect(base_url('login'));
		}
		
	}

	function index()
	{
		// $data2['aksi']='simpan';

		$data2['data']=$this->m_formpelanggan->daftar_pelanggan()->result();
		// $data2['data']=$this->m_formpeg->daftar_pengurus()->result();
		$this->load->view('v_tablepelanggan',$data2);


	}

	public function ubah_pelanggan($id_pelanggan)
	{	
		// mengambil hanya satu baris (menggunakan fungsi row()) 
		// di model m_aplikasi function daftar_mahasiswa dengan parameter $nim
		$data['pel'] = $this->m_formpelanggan->data_pelanggan($id_pelanggan)->row();
		
		$this->load->view('v_editpel',$data);
		unset($data);
	}
	
	public function proses_ubah_pelanggan()
	{	
		$data['nomor_meter'] = $this->input->post('nomor');
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$data['nama'] = $this->input->post('nama');
		$data['alamat'] = $this->input->post('alamat');
		$data['email'] = $this->input->post('email');
		$data['no_telepon']=$this->input->post('no_telp');
		$id_pelanggan = $this->input->post('id_pel');
		// mengubah data mahasiswa di model m_aplikasi function ubah_mahasiswa
		// dengan parameter $nim dan $data
		$this->m_formpelanggan->ubah_pelanggaan($id_pelanggan, $data);
		
		redirect(base_url('tablepelanggan'));
		unset($id_pelanggan,$data);
	}

}