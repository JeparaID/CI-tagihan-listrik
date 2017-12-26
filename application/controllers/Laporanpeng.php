<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporanpeng extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_laporan');

		// if($this->session->userdata('status') != "login"){
		// 	redirect(base_url("login"));
		
	}
	public function index()
	{
		$data2['data']=$this->m_laporan->tampil_data()->result();
		$this->load->view('v_laporanpeng',$data2);
	}
	public function simpan()
	 {
	 	$this->m_laporan->simpan_data();
	 	redirect(base_url('laporanpeng'));
	 }
}