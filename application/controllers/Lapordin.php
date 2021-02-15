<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapordin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dinas_model');
    }

    public function index()
    {
        $data['dinas'] = $this->Dinas_model->getAllFitur();
        $this->form_validation->set_rules('lapor', 'Lapor', 'required');
        $this->form_validation->set_rules('Jam', 'Jam', 'required');
        $this->form_validation->set_rules('Tanggal', 'Tanggal', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('lapordin/header');
            $this->load->view('lapordin/lapordin', $data);
            $this->load->view('lapordin/footer');
        } else {
            $datalapor = [
                "isi_lapor" => $this->input->post('lapor', true),
                "waktu_update" => $this->input->post('Jam', true),
                "tanggal" => $this->input->post('Tanggal', true),
            ];

            $this->Dinas_model->tambahLaporan($datalapor);
            redirect('Lapordin');
        }

    }

}
