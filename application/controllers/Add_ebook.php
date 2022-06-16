<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_ebook extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->perPage = 10;
		// $this->load->library('pagination');
	}

	public function post_ebook()
    {
        $input_data = [
            'book_id' => $this->global->generateUniqueId('BOOK'),
            'book_title' => $this->input->post('book_title'),
            'book_author' => $this->input->post('author_name'),
            'book_description' => $this->input->post('description'),
            'book_languages' => $this->input->post('languages'),
            //'institutions' => $this->input->post('institutions'),
            'book_course' => $this->input->post('courses'),
            'book_category' => $this->input->post('categories'),
            'book_subject' => $this->input->post('subjects'),
            'book_url' => $this->input->post('download_url'),
            'status' => 1,
        ];

        $image_data = [
            'element_id' => 'book_image',
            'folder' => "books"
        ];
        
        $upload_data = array_merge($input_data, $image_data);        
        $upload_status = $this->global->upload_item_files($upload_data);

        if ($upload_status['type'] === 'success') {
            $image_name = [
                'book_photo' => $upload_status['file_name'],
            ];

            $book_data = array_merge($input_data, $image_name);                
            $post_status = $this->post_book->save_book($book_data);
        }

        $data = 'something went wrong';
        if ($post_status === false AND $upload_status['type'] === 'error') {
            $data = $this->global->response_messages($upload_status);
        }

        if ($post_status === true AND $upload_status['type'] === 'success') {
            $data = $this->global->response_messages($upload_status);
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
    }
}
