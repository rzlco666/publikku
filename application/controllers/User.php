<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $this->load->view('home/header');
        $this->load->view('home/home');
        $this->load->view('home/footer');
    }

    public function surat()
    {
        $this->load->view('home/header');
        $this->load->view('surat/surat');
        $this->load->view('home/footer');
    }
    public function infodes()
    {
        $this->load->view('home/header');
        $this->load->view('infodes/infodes');
        $this->load->view('home/footer');
    }
    public function kegiatan()
    {
        $this->load->view('home/header');
        $this->load->view('kegiatan/kegiatan');
        $this->load->view('home/footer');
    }
    public function lapor()
    {
        $this->load->view('home/header');
        $this->load->view('surat/lapor');
        $this->load->view('home/footer');
    }

}
