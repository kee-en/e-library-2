<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller 
{
    public function get_categories_based_on_course()
	{
        $course_id = $this->input->post("input_data");
		$result = $this->categories->getCategoriesBasedOnCourse($course_id);

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
	}
}
