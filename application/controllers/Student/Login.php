<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('student/include/header');
		$this->load->view('student/auth/login');
		$this->load->view('student/include/script');
	}
}
