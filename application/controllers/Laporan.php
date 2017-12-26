<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ( $this->session->userdata('userid') and 
			 $this->session->userdata('pass') )
		{	
		$this->load->helper('url');
		$this->load->model('m_laporan');
		} else
		{	redirect(base_url('login'));
		}
		
	}
	public function index()
	{
		$data2['aksi']='simpan';

		$data2['data']=$this->m_laporan->tampil_data()->result();

		$this->load->view('v_laporan',$data2);
	}
	 public function simpan()
	 {
	 	$this->m_laporan->simpan_data();
	 	redirect(base_url('laporan'));
	 }

	 function edit($id_laporan)
	{
		$data2['aksi']='edit_laporan/'.$id_laporan;
		$r=$this->m_laporan->ambil_data($id_laporan)->row();
		$data2['data']=$this->m_laporan->tampil_data($id_laporan)->result();
		$this->session->set_flashdata('nomor_meter',$r->nomor_meter);
		$this->session->set_flashdata('komentar',$r->komentar);
		$this->session->set_flashdata('balas',$r->balas);
		
		$this->load->view('v_laporan',$data2);
	}
	function edit_laporan($id_laporan)
	{
		$data2['aksi']='simpan';
		$this->m_laporan->update_data($id_laporan);
		$data2['data']=$this->m_laporan->tampil_data()->result();
		$this->load->view('v_laporan',$data2);
		redirect(base_url('laporan'));
	}
	function hapus_data($id_laporan)
	{
		$this->m_laporan->hapus_laporan($id_laporan);

		redirect(base_url('laporan'));
	}

}