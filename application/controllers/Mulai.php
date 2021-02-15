<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mulai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Utama_model');
    }

    public function index()
    {
        $data['file_data'] = $this->Utama_model->getAllFitur();
        $this->load->view('mulai/Header');
        $this->load->view('mulai/Pengaduan', $data);
        $this->load->view('mulai/Footer');
    }

    public function file_data()
    {
        $data['file_data'] = $this->Utama_model->getAllFitur();
        $isi_lapor = $this->input->post('isi_lapor');
        $lokasi = $this->input->post('lokasi');
        $waktu_update = $this->input->post('waktu_update');
        $tanggal = $this->input->post('tanggal');
        $foto = $_FILES['foto'];

        if ($foto = '') {} else {
            $config['upload_path'] = './assets_user/img';
            $config['allowed_types'] = 'jpg|png|JPG|jpeg|gif';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto')) {
                echo "Upload Gagal";die();
            } else {
                $foto = $this->upload->data('file_name');

            }

        }

        $data = array(
            'isi_lapor' => $isi_lapor,
            'lokasi' => $lokasi,
            'waktu_update' => $waktu_update,
            'tanggal' => $tanggal,
            'foto' => $foto,

        );

        $this->Utama_model->fileupload($data, 'fitur');
        redirect('Notifikasi');

    }

}
