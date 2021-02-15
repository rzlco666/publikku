<?php

class Auth_model extends CI_model
{

    public function addAdmin($data)
    {

        return $this->db->insert('register', $data);

    }

    public function getAdminLogin($username)
    {

        return $this->db->get_where('register', [
            'username' => $username])->row_array();

    }
}
