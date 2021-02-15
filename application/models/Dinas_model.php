<?php
class Dinas_model extends CI_model
{

    public function getAllFitur()
    {
        return $this->db->get('fitur')->result_array();
    }

    public function tambahlaporan($data)
    {
        $this->db->insert('fitur', $data);
    }

}
