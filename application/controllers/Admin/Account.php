<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/nav');
		$this->load->view('admin/main/account');
		$this->load->view('admin/modal/edit_account');
		$this->load->view('admin/modal/change_user_role');
		$this->load->view('admin/include/footer');
		$this->load->view('admin/include/script');
	}
}
