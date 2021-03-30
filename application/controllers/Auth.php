<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('authen');
    }

    public function login()
    {
        $this->load->view('auth/header');
        $this->load->view('auth/login');
        $this->load->view('auth/footer');
    }

    public function proses_login()
    {
        $hp = $this->input->post('hp');
        $password = $this->input->post('password');
        if ($this->authen->login_user($hp, $password)) {
            redirect('Dashboard');
        } else {
            $this->session->set_flashdata('error', 'Username & Password salah');
            redirect('Auth/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('hp');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('KTP');
        $this->session->unset_userdata('is_login');
        redirect('Auth/login');
    }

    public function daftar()
    {
        $this->load->view('auth/header');
        $this->load->view('auth/daftar');
        $this->load->view('auth/footer');
    }

    public function proses_daftar()
    {
        $this->form_validation->set_rules('hp', 'hp', 'trim|required|min_length[1]|max_length[255]|is_unique[user.hp]');
        $this->form_validation->set_rules('KTP', 'KTP', 'trim|required|min_length[1]|max_length[255]|is_unique[user.KTP]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run() == true) {
            $hp = $this->input->post('hp');
            $password = $this->input->post('password');
            $username = $this->input->post('username');
            $alamat = $this->input->post('alamat');
            $KTP = $this->input->post('KTP');
            $foto = 'avatar-1.jpg';
            $this->authen->register($hp, $password, $username, $alamat, $KTP, $foto);
            $this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
            redirect('Auth/login');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('Auth/daftar');
        }
    }
}
