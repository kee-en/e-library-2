<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_institutions extends CI_Model
{
	function getInstitutions()
	{
		return $this->db->get('institutions')
			->result_array();
	}
}
