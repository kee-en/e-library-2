<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_e_books extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/nav');
		$this->load->view('admin/main/manage_e_books');
		$this->load->view('admin/modal/add-e-book');
		$this->load->view('admin/modal/edit-e-book');
		$this->load->view('admin/include/footer');
		$this->load->view('admin/include/script');
	}
}
