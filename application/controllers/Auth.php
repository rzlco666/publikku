<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('form_validation');

    }

    public function index()
    {

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Login Page';

            $this->load->view('auth/header', $data);
            $this->load->view('auth/login');
            $this->load->view('auth/footer');
        } else {
            $this->__login();
        }

    }

    public function regist()
    {

        $data['title'] = 'Regsiter Page';

        $this->load->view('auth/header', $data);
        $this->load->view('auth/regis');
        $this->load->view('auth/footer');

    }

    public function registAdmin()
    {

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Regsiter Page';

            $this->load->view('auth/header', $data);
            $this->load->view('auth/regis');
            $this->load->view('auth/footer');

        } else {

            $data = [
                'username' => $this->input->post('username', true),
                'email' => $this->input->post('email', true),
                'password' => $this->input->post('password', true),

            ];

            $this->Auth_model->addAdmin($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Selamat!</strong> Akun anda sudah di buat.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');

            redirect('auth');

        }

    }

    private function __login()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->Auth_model->getAdminLogin($username);

        if ($admin) {

            if ($admin['password'] == $password) {

                $data = [

                    'email' => $admin['email'],
                    'id' => $admin['id'],
                    'username' => $admin['username'],
                    'password' => $admin['password'],

                ];

                $this->session->set_userdata($data);

                redirect('user');

            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Maaf!</strong> Password Salah.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');

                redirect('auth');
            }

        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Maaf!</strong> Akun belum di buat.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');

            redirect('auth');

        }

    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');

        redirect('user');

    }

}
