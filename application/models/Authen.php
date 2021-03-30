<?php
class Authen extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function register($hp, $password, $username, $alamat, $KTP, $foto)
    {
        $foto = 'avatar-1.jpg';

        $data_user = array(
            'hp' => $hp,
            'password' => $password,
            'username' => $username,
            'alamat' => $alamat,
            'KTP' => $KTP,
            'foto' => $foto
        );
        $this->db->insert('user', $data_user);
    }

    function login_user($hp, $password)
    {
        $query = $this->db->get_where('user', array('hp' => $hp));
        if ($query->num_rows() > 0) {
            $data_user = $query->row();
            $hash = $query->row('password');
            if ($password == $data_user->password) {
                $this->session->set_userdata('hp', $hp);
                $this->session->set_userdata('username', $data_user->username);
                $this->session->set_userdata('id_user', $data_user->id_user);
                $this->session->set_userdata('alamat', $data_user->alamat);
                $this->session->set_userdata('KTP', $data_user->KTP);
                $this->session->set_userdata('password', $data_user->password);
                $this->session->set_userdata('is_login', TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    function cek_login()
    {
        if (empty($this->session->userdata('is_login'))) {
            redirect('Auth/login');
        }
    }

    public function getById($id_user)
    {
        $id_user = $this->session->userdata('id_user');
        return $this->db->get_where('user', ["id_user" => $id_user])->row();
    }

    public function update($hp, $password, $username, $alamat, $KTP)
    {
        $id_user = $this->session->userdata('id_user');
        $data_user = array(
            'hp' => $hp,
            'password' => $password,
            'username' => $username,
            'alamat' => $alamat,
            'KTP' => $KTP
        );
        $this->db->update('user', $data_user, array('id_user' => $id_user));
    }
}
