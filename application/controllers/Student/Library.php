<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller {

	public function index()
	{
		$this->load->view('student/include/header');
		$this->load->view('student/include/nav');
		$this->load->view('student/main/library');
		$this->load->view('student/include/footer');
		$this->load->view('student/include/script');
	}
}
