<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_subjects extends CI_Model
{
    function getSubjectsBasedOnCategory($category_id)
	{
	    return $this->db->select('subject_id, title')
            ->where('category_id', $category_id)
            ->order_by('title', 'ASC')
            ->get('subjects')
            ->result_array();        
	}
}
