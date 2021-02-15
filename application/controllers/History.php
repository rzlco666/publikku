<?php
defined('BASEPATH') or exit('No direct script access allowed');

class History extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Utama_model');
    }

    public function index()
    {

        $data['allhistory'] = $this->Utama_model->getAllFitur();
        $this->load->view('home/header');
        $this->load->view('history/history', $data);
        $this->load->view('home/footer');
    }

    public function rate()
    {
        $data['rate'] = $this->Utama_model->getAllrating();
        $rating = $this->input->post('rating');
        $feedback = $this->input->post('feedback');

        $data = array(
            'rating' => $rating,
            'feedback' => $feedback,
        );

        $this->Utama_model->rate($data, 'rating');
        redirect('Notifikasi');
    }

}
