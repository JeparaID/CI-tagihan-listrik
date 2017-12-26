<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Formpelanggan extends CI_Controller
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
		$data2['aksi']='simpan';
		$this->load->view('v_formpelanggan'); //,$data2

	}
	function simpan()
	{
		
		$this->m_formpelanggan->simpan_form();
		redirect(base_url('formpelanggan'));
		unset($data);
	}
	// function edit($id_pelanggan)
	// {
	// 	// $data2['aksi']='edit_pelanggan/'.$id_pelanggan;
	// 	$data['pelanggan'] = $this->m_formpelanggan->ambil_data($id_pelanggan)->row();
		
	// 	$this->load->view('v_formpelanggan',$data);
	// 	unset($data);
	// }
	// function edit_pelanggan()
	// {
	// 	// $data2['aksi']='simpan';
	// 	$data['nomor_meter'] = $this->input->post('nomor_meter');
	// 	$data['username'] = $this->input->post('username');
	// 	$data['password'] = $this->input->post('password');
	// 	$data['nama'] = $this->input->post('nama');
	// 	$data['alamat'] = $this->input->post('alamat');
	// 	$data['email'] = $this->input->post('email');
	// 	$data['no_telepon'] = $this->input->post('no_telepon');
	// 	$id_pelanggan = $this->input->post('id_pelanggan');
		
	// 	// mengubah data mahasiswa di model m_aplikasi function ubah_mahasiswa
	// 	// dengan parameter $nim dan $data
	// 	$this->m_formpelanggan->update_pelanggan($id_pelanggan,$data);
		
	// 	redirect(base_url('tablepelanggan'));
	// 	unset($nim,$data);
	// }
	public function hapus_pel($id_pelanggan)
	{
		$this->m_formpelanggan->hapus_pengguna($id_pelanggan);
		redirect(base_url('tablepelanggan'));
	}
}