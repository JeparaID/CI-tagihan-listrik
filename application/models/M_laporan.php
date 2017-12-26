<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class M_laporan extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		# code...
	}
	public function simpan_data()
	{
		$data=array(
			'nomor_meter'=>$this->input->post('nomor'),
			'komentar'=>$this->input->post('komentar'),
			'balas'=>$this->input->post('balas')
			);
		$this->db->insert('tb_laporan',$data);
	}
	public function tampil_data()
	{
		$query=$this->db->query('SELECT * FROM tb_laporan');
		return $query;
	}

	public function update_data($id_laporan)
	{
		$data=array(
			'nomor_meter'=>$this->input->post('nomor'),
			'komentar'=>$this->input->post('komentar'),
			'balas'=>$this->input->post('balas')
			);
		$this->db->where('id_laporan',$id_laporan);
		$this->db->update('tb_laporan',$data);
	}
	public function ambil_data($id_laporan)
	{
		$ambildata=$this->db->query('SELECT * FROM tb_laporan WHERE id_laporan=?',array($id_laporan));
		return $ambildata;	
	}
	public function hapus_laporan($id_laporan)
	{
		$this->db->query("delete from tb_laporan where id_laporan = ?", array($id_laporan));

		unset($id_laporan);
	}
}