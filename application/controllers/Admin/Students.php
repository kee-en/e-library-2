<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/nav');
		$this->load->view('admin/main/students');
		$this->load->view('admin/modal/add_student');
		$this->load->view('admin/modal/edit_student');
		$this->load->view('admin/modal/reset_student_password');
		$this->load->view('admin/include/footer');
		$this->load->view('admin/include/script');
	}
}
