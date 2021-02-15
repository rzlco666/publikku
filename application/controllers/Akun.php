<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');

    }

    public function index()
    {
        $data['register'] = $this->User_model->getData_log();

        $data['title'] = 'index Page';
        //$data['isi'] = $this->User_model->getDataUserById($id);
        $this->load->view('akun/akun', $data);

    }

}
