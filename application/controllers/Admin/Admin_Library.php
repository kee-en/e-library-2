<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_library extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/nav');
		$this->load->view('admin/main/admin_library');
		$this->load->view('admin/include/footer');
		$this->load->view('admin/include/script');
	}
}
