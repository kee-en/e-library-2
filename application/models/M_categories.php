<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_categories extends CI_Model
{
    function getCategoriesBasedOnCourse($course_id)
	{
	    return $this->db->select('category_id, title')
            ->where('course_id', $course_id)
            ->order_by('title', 'ASC')
            ->get('categories')
            ->result_array();        
	}
}
