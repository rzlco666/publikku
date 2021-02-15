<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notifikasi extends CI_Controller
{

    public function index()
    {

        $this->load->view('notifikasi/header');
        $this->load->view('notifikasi/notifikasi');
        $this->load->view('notifikasi/footer');
    }

}
