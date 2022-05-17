<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_institutions extends CI_Model
{
	function getInstitutions()
	{
		return $this->db->get('institutions')->result_array();
	}

	function getInstitutionUniqueId($id)
	{
		$query =  $this->db->select('institution_id')
			->from('institutions')
			->where('id', $id)
			->get();
		$result = ($query->num_rows() > 0) ? $query->row() : [];
		return $result->institution_id;
	}
}
