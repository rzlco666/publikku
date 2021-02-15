<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tambahgambar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Utama_model');
    }

    public function index()
    {
        $this->load->view('tambahgambar/header');
        $this->load->view('tambahgambar/tambahgambar');
        $this->load->view('tambahgambar/footer');
    }

    public function upload()
    {
        $foto = $_FILES['foto'];
        if ($foto = '') {} else {
            $config['upload_path'] = './asset/foto';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "upload gagal";die();
            }

        }
        $data = array(
            'foto' => $foto,
        );
        $this->Utama_model->tambahLaporan($foto);
        redirect('notifikasi');

    }

}
