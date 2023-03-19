<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class template extends CI_Controller {

	
	public function index()
	{
        $this->load->view('layout/header.php');
        $this->load->view('layout/navbar.php');
        $this->load->view('layout/sidebar.php');
		$this->load->view('home.php');
        $this->load->view('layout/footter.php');
	}
}
