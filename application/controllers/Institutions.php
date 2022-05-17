

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institutions extends CI_Controller {

    public function get_institutions()
    {
        $result = $this->institutions->getInstitutions();

        $data = [];
        foreach ($result as $key) {
            $data[] = [
                'id' => $key['id'],
                'text' => $key['title'],
            ];
        }

        print_r(json_encode($data));

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
    }
}
