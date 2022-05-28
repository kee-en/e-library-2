<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_courses extends CI_Model
{
    function getCoursesBasedOnInstitutions($institution_id)
	{
	    return $this->db->select('course_id, title')
            ->where('institution_id', $institution_id)
            ->order_by('title', 'ASC')
            ->get('courses')
            ->result_array();        
	}
}
