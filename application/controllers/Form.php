<?php defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');

    }

    public function index()
    {
        /*
        $data['title'] = 'index Page';
        $data['isi'] = $this->User_model->getDataUserById($id);
        $this->load->view('form/header');
        $this->load->view('form/form', $data);
        $this->load->view('form/footer');
         */

        $data['register'] = $this->User_model->getData_log();

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('form/header', $data);
            $this->load->view('form/form', $data);
            $this->load->view('form/footer');
        } else {

            $username = $this->input->post('username', 'true');
            $email = $this->input->post('email', 'true');
            $id = $this->input->post('id');

            $this->db->set('username', $username);
            $this->db->set('email', $email);
            $this->db->where('email', $email);
            $this->db->update('register');

            redirect('Akun');
        }

    }

}
