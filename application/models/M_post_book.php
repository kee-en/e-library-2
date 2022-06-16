<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_post_book extends CI_Model
{
    public function save_book($book_data)
    {
        $this->db->trans_strict(true);
        $this->db->trans_begin();

        $this->db->insert('book', $book_data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }

    }
}
