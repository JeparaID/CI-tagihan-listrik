<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Tabletagihan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ( $this->session->userdata('userid') and 
			 $this->session->userdata('pass') )
		{	
		$this->load->helper('url');
		$this->load->model('m_formtagihan');
		} else
		{	redirect(base_url('login'));
		}
		
	}

	function index()
	{
		// $data2['aksi']='simpan';

		$data2['data']=$this->m_formtagihan->daftar_tagihan()->result();
		// $data2['data']=$this->m_formpeg->daftar_pengurus()->result();
		$this->load->view('v_tabletagihan',$data2);

	}

	public function ubah_tagihan($id_tagihan)
	{	
		
		// mengambil hanya satu baris (menggunakan fungsi row()) 
		// di model m_aplikasi function daftar_mahasiswa dengan parameter $nim
		$data['tag'] = $this->m_formtagihan->data_tagihan($id_tagihan)->row();
		
		$this->load->view('v_edittag',$data);
		unset($data);
	}
	
	public function proses_ubah_tagihan()
	{	
		$data['nomor_meter'] = $this->input->post('nomor');
		$data['tahun'] = $this->input->post('tahun');
		$data['januari'] = $this->input->post('januari');
		$data['februari'] = $this->input->post('februari');
		$data['maret'] = $this->input->post('maret');
		$data['april'] = $this->input->post('april');
		$data['mei']=$this->input->post('mei');
		$data['juni'] = $this->input->post('juni');
		$data['juli'] = $this->input->post('juli');
		$data['agustus'] = $this->input->post('agustus');
		$data['september'] = $this->input->post('september');
		$data['oktober'] = $this->input->post('oktober');
		$data['november'] = $this->input->post('november');
		$data['desember']=$this->input->post('desember');
		$id_tagihan=$this->input->post('id_tag');
		// $nim = $this->input->post('nim');
		
		// mengubah data mahasiswa di model m_aplikasi function ubah_mahasiswa
		// dengan parameter $nim dan $data
		$this->m_formtagihan->ubah_tagihan($id_tagihan,$data);
		
		redirect(base_url('tabletagihan'));
		unset($id_tagihan,$data);
	}

}