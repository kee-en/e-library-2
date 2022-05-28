<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller 
{
    public function get_courses_based_on_institution()
	{
        $institution_id = $this->input->post("input_data");
		$result = $this->courses->getCoursesBasedOnInstitutions($institution_id);

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
	}
}
