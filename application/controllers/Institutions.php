<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Institutions extends CI_Controller
{

    public function get_institutions()
    {
        $result = $this->institutions->getInstitutions();

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
    }
}
