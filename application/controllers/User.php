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
    public function pekerjaan()
    {
        $this->load->view('home/header');
        $this->load->view('infodes/pekerjaan');
        $this->load->view('home/footer');
    }
    public function agama()
    {
        $this->load->view('home/header');
        $this->load->view('infodes/agama');
        $this->load->view('home/footer');
    }
    public function kelamin()
    {
        $this->load->view('home/header');
        $this->load->view('infodes/kelamin');
        $this->load->view('home/footer');
    }
    public function wilayah()
    {
        $this->load->view('home/header');
        $this->load->view('infodes/wilayah');
        $this->load->view('home/footer');
    }
    public function pendidikan()
    {
        $this->load->view('home/header');
        $this->load->view('infodes/pendidikan');
        $this->load->view('home/footer');
    }
    public function umur()
    {
        $this->load->view('home/header');
        $this->load->view('infodes/umur');
        $this->load->view('home/footer');
    }
    public function realisasi()
    {
        $this->load->view('home/header');
        $this->load->view('apbdes/apbdes');
        $this->load->view('home/footer');
    }
    public function transparasi()
    {
        $this->load->view('home/header');
        $this->load->view('apbdes/apbdes2');
        $this->load->view('home/footer');
    }
    public function lapor()
    {
        $this->load->view('home/header');
        $this->load->view('surat/lapor');
        $this->load->view('home/footer');
    }

}
