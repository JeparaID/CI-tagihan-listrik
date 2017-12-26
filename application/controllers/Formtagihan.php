<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Formtagihan extends CI_Controller
{
	public function __construct()
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
	public function index()
	{

		$this->load->view('v_formtagihan');
	}

	public function simpan()
	{
		$this->m_formtagihan->simpan_form();
		redirect(base_url('formtagihan'));
		unset($data);
	}
	public function hapus($id_tagihan)
	{
		$this->m_formtagihan->hapus_data($id_tagihan);
		redirect(base_url('tabletagihan'));
		unset($data);
	}

}