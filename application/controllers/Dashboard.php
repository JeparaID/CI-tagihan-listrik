<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if ( $this->session->userdata('userid') and 
			 $this->session->userdata('pass') )
		{	$this->load->view('v_dashboard');
		} else
		{	redirect(base_url('login'));
		}
		// if($this->session->userdata('status') != "login"){
		// 	redirect(base_url("login"));
		
	}
	public function index()
	{
		// $this->load->view('v_dashboard');
	}
}