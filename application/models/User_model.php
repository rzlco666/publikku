<?php
class User_model extends CI_Model
{
    public function getDataUserById($id)
    {
        $query = $this->db->query("SELECT * FROM register where id = $id");
        return $query->result_array();
    }

    public function getData_log()
    {
        return $data['register'] = $this->db->get_where('register', [
            'username' =>
            $this->session->userdata('username'),
        ])->row_array();
    }
}
