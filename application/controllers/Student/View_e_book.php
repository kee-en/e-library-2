<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_e_book extends CI_Controller {

	public function index()
	{
		$this->load->view('student/include/header');
		$this->load->view('student/include/nav');
		$this->load->view('student/main/view_e_book');
		$this->load->view('student/include/footer');
		$this->load->view('student/include/script');
	}
}
