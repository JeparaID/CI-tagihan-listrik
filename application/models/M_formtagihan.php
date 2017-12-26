<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class M_formtagihan extends CI_Model
 {
 	function __construct()
 	{
 		parent::__construct();

 	}
 	public function simpan_form()
	{

		$data=array(
			'nomor_meter'=>$this->input->post('nomor'),
			'tahun'=>$this->input->post('tahun'),
			'januari'=>$this->input->post('januari'),
			'februari'=>$this->input->post('februari'),
			'maret'=>$this->input->post('maret'),
			'april'=>$this->input->post('april'),
			'mei'=>$this->input->post('mei'),
			'juni'=>$this->input->post('juni'),
			'juli'=>$this->input->post('juli'),
			'agustus'=>$this->input->post('agustus'),
			'september'=>$this->input->post('september'),
			'oktober'=>$this->input->post('oktober'),
			'november'=>$this->input->post('november'),
			'desember'=>$this->input->post('desember')
			);
		$this->db->insert('tb_tagihan',$data);
	}
	public function daftar_tagihan()
	{
		$query=$this->db->query('SELECT * FROM tb_tagihan ORDER BY nomor_meter ASC');

		return $query;
	}

	function data_tagihan($id_tagihan)
	{	// query binding ditandai dengan "?" untuk security
		$query = $this->db->query("SELECT * 
			FROM tb_tagihan where id_tagihan = ? ",array($id_tagihan));
		
		// mengembalikan hasil query
		return $query;
		
		// menghapus query dari memory
		$query = null;
		
		// menghapus variabel dari memory
		unset($id_tagihan);
	}

	function ubah_tagihan($id_tagihan, $data)
	{	// query binding ditandai dengan "?" untuk security
		$this->db->query("update tb_tagihan set nomor_meter = ?, tahun=?, januari=?, februari=?, maret=?, april=?, mei=?, juni=?, juli=?, agustus=?, september=?, oktober=?, november=?, desember=? where id_tagihan = ? ", array($data['nomor_meter'], $data['tahun'], $data['januari'],$data['februari'], $data['maret'], $data['april'], $data['mei'], $data['juni'], $data['juli'], $data['agustus'], $data['september'], $data['oktober'], $data['november'], $data['desember'],$id_tagihan));
		
		// menghapus variabel dari memory
		unset($id_tagihan, $data);
	}	

	function hapus_data($id_tagihan)
	{
		$this->db->query('DELETE FROM tb_tagihan WHERE id_tagihan= ?', array($id_tagihan));

		unset($id_tagihan);
	}
}
