<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_formpelanggan extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	public function simpan_form()
	{

		$data=array(
			'nomor_meter'=>$this->input->post('nomor'),
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			'nama'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			'email'=>$this->input->post('email'),
			'no_telepon'=>$this->input->post('no_telp')
			);
		$this->db->insert('tb_pengguna',$data);
	}

	public function daftar_pelanggan()
	{
		$query=$this->db->query('SELECT * FROM tb_pengguna ORDER BY id_pelanggan ASC');

		return $query;
	}

	function data_pelanggan($id_pelanggan)
	{	// query binding ditandai dengan "?" untuk security
		$query = $this->db->query("SELECT * FROM tb_pengguna where id_pelanggan = ? ",array($id_pelanggan));
		
		// mengembalikan hasil query
		return $query;
		
		// menghapus query dari memory
		$query = null;
		
		// menghapus variabel dari memory
		unset($id_pelanggan);
	}

	function ubah_pelanggaan($id_pelanggan, $data)

	{	// query binding ditandai dengan "?" untuk security
		$this->db->query("update tb_pengguna set nomor_meter=?, username = ?, password = ?, nama=?, alamat=?, email=?, no_telepon=? where id_pelanggan = ? ", array($data['nomor_meter'],$data['username'],$data['password'],$data['nama'],$data['alamat'],$data['email'],$data['no_telepon'],$id_pelanggan));
		
		// menghapus variabel dari memory
		// unset($id_pelanggan, $data);
	}

	function hapus_pengguna($id_pelanggan)
	{
		$this->db->query('DELETE FROM tb_pengguna WHERE id_pelanggan= ?', array($id_pelanggan));

		unset($id_pelanggan);
	}
}