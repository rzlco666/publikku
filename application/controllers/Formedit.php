<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formedit extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');

    }

    public function index($id)
    {

        $data['title'] = 'Profile Edit';
        $data['isi'] = $this->Admin_model->getDataAdminById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbaradmin');
        $this->load->view('profile_edit/profile_edit', $data);

    }

    public function updateData()
    {

        $username = $this->input->post('username', true);
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);

        $data = [
            'username' => $username,
            'email' => $email,
            'password' => $password,

        ];

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Yes!</strong> Updated.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');

        $this->Admin_model->updateData($data);

        redirect('profileedit/index/' . $this->session->userdata('id'));

    }

}
