<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/nav');
		$this->load->view('admin/main/users');
		$this->load->view('admin/modal/add_user');
		$this->load->view('admin/modal/edit_user');
		$this->load->view('admin/modal/reset_user_password');
		$this->load->view('admin/include/footer');
		$this->load->view('admin/include/script');
	}
}
