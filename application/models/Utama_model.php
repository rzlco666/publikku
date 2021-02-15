<?php
class Utama_model extends CI_model
{

    public function getAllFitur()
    {
        return $this->db->get('fitur')->result_array();
    }

    public function getAllrating()
    {
        return $this->db->get('rating')->result_array();
    }

    public function rate($data)
    {
        $this->db->insert('rating', $data);
    }
    public function fileupload($data)
    {

        $this->db->insert('fitur', $data);
    }
}
