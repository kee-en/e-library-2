<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects extends CI_Controller 
{
    public function get_subjects_based_on_category()
	{
        $category_id = $this->input->post("input_data");
		$result = $this->subjects->getSubjectsBasedOnCategory($category_id);

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
	}
}
