<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faqs extends CI_Controller {

	public function index()
	{
		$this->load->view('student/include/header');
		$this->load->view('student/include/nav');
		$this->load->view('student/main/faqs');
		$this->load->view('student/include/footer');
		$this->load->view('student/include/script');
	}
}
