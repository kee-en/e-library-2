<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_password extends CI_Controller {

	public function index()
	{
		$this->load->view('student/include/header');
		$this->load->view('student/auth/forgot_password');
		$this->load->view('student/include/script');
	}
}
