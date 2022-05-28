<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_global extends CI_Model
{

    public function sluggify($url)
    {
        # Prep string with some basic normalization
        $url = strtolower($url);
        $url = strip_tags($url);
        $url = stripslashes($url);
        $url = html_entity_decode($url);

        # Remove quotes (can't, etc.)
        $url = str_replace('\'', '', $url);

        # Replace non-alpha numeric with hyphens
        $match = '/[^a-z0-9]+/';
        $replace = '-';
        $url = preg_replace($match, $replace, $url);

        $url = trim($url, '-');

        return $url;
    }

    public function currentUrl()
    {
        return strtolower($this->input->server('HTTP_HOST')) === "localhost" ? "http://localhost/global-library-hub/" : "https://gelhc.tradepearloftheorient.com/";
    }

    public function ecdc($action, $string)
    {
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'This is my secret key';
        $secret_iv = 'This is my secret iv';
        $key = hash('sha256', $secret_key);
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        if ($action == 'ec') {
            $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);
        } else if ($action == 'dc') {
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }
        return $output;
    }

    function generateUniqueId($prefix)
	{
		$m = date('YmdHms');
		if ($prefix == 'BOOK') {
			$last_id = $this->db->order_by('id', 'DESC')->limit(1)->get('book');
		}

		if ($last_id->num_rows() == 0) {
			return $prefix . $m . '000001';
		} else {
			$last_id = $last_id->row()->id + 1;
			if (strlen($last_id) == 1) {
				return $last_id = $prefix . $m . '00000' . $last_id;
			} elseif (strlen($last_id) == 2) {
				return $last_id = $prefix . $m . '0000' . $last_id;
			} elseif (strlen($last_id) == 3) {
				return $last_id = $prefix . $m . '000' . $last_id;
			} elseif (strlen($last_id) == 4) {
				return $last_id = $prefix . $m . '00' . $last_id;
			} elseif (strlen($last_id) == 5) {
				return $last_id = $prefix . $m . '0' . $last_id;
			} else {
				return $last_id = $prefix . $m . $last_id;
			}
		}
	}

    function upload_item_files($upload_data)
	{
		// $item_code = $this->global_function->ecdc('dc', $upload_data['hashed_item_code']);

		if (!file_exists($config['upload_path'] = './uploads/' . $upload_data['folder'] . '/' . $upload_data['book_id'] . '/documents')) {
			if (!mkdir($config['upload_path'] = './uploads/' . $upload_data['folder'] . '/' . $upload_data['book_id'] . '/documents', 0777, true)) {
			}
			chmod($config['upload_path'] = './uploads/' . $upload_data['folder'] . '/' . $upload_data['book_id'] . '/documents', 0777);
		}

		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = 4000;
		$config['overwrite'] = TRUE;
		$config['file_name'] = $upload_data['book_id'];

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload($upload_data['element_id'])) {
			$data = [
					'type' => 'error',
					'title' => strip_tags($this->upload->display_errors())
			];
		} else {

			$uploadedImage = $this->upload->data();

			$config_manip = [
					'image_library' => 'gd2',
					'source_image' =>  './uploads/' . $upload_data['folder'] . '/'. $upload_data['book_id'] . '/documents/' . $uploadedImage['file_name'],
					'new_image' => './uploads/' . $upload_data['folder'] . '/' . $upload_data['book_id'] . '/documents/' . $uploadedImage['file_name'],
					'quality' => '80%',
					// 'width' => '500',
					// 'height' => '300',
					'maintain_ratio' => FALSE
			];

			$this->load->library('image_lib', $config_manip);

			if (!$this->image_lib->resize()) {
				$data = [
					'type' => 'error',
					'title' => strip_tags($this->image_lib->display_errors())
				];
			} else {
                $data = [
                    'type' => 'success',
                    'title' => 'Upload successfully!',
                    'file_name' => $uploadedImage['file_name'],
                ];
            }

			$this->image_lib->clear();
		}

		return $data;
	}

	function response_messages($data)
	{
		if ($data['type'] === "success") {
			$message = [
				'type' => 'success',
				'title' => 'Success',
				'text' => 'Book has been saved successfully.',
			];
		}

		if ($data['type'] === "error") {
			$message = [
				'type' => 'error',
				'title' => 'Error!',
				'text' => 'Something went wrong, please contact your Administrator.',
			];
		}
	
		if ($data['title'] === "The uploaded file exceeds the maximum allowed size in your PHP configuration file.") {
			$message = [
				'type' => 'error',
				'title' => "2 MB maximum allowed size."
			];
		}

		if ($data['title'] === "The uploaded file exceeds the maximum allowed size in your PHP configuration file.") {
			$message = [
				'type' => 'error',
				'title' => "2 MB maximum allowed size."
			];
		}
		if ($data['title'] === "The filetype you are attempting to upload is not allowed." || 
			$data['title'] === "You did not select a file to upload.") {
			$message = [
				'type' => 'error',
				'title' => "Please upload file having extensions .jpg, .jpeg, .png, and 2MB size."
			];
		}

		return $message;
	}

}
