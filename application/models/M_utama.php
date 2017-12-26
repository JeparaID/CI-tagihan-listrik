<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class M_utama extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		# code...
	}

public function ambil_data($nomor_meter)
	{
		$ambildata=$this->db->query('SELECT * FROM tb_tagihan WHERE nomor_meter=?',array($nomor_meter));
		return $ambildata;	
	}
}