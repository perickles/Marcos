<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
		
		function	__construct()
		{
			parent::__construct();
			#Carga de libreria y helpers
		}

	public function index()
	{
		$this->load->view('Principal_v');
	}

	public function evento()
	{
		$this->load->view('evento_v');
	}

}