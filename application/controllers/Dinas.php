<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dinas extends CI_Controller
{

    public function index()
    {

        $this->load->view('dinas/header');
        $this->load->view('dinas/dinas');
        $this->load->view('dinas/footer');
    }

}
