<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{
		echo base_url();
		//$this->load->view('welcome_message');
	}

	public function test1($satu = 'ihsan', $dua = 'fajari')
	{
		echo 'HEHE WEB ',$satu,' dan ',$dua;
		//$this->load->view('welcome_message');
	}
}
