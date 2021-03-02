<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rating extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('authen');
        $this->load->model('laporan');
		$this->authen->cek_login();
	}

    public function edit($id_fitur)
    {
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->authen->getById($id_user);
        $data['notifikasi'] = $this->laporan->getAllNotif();
        
        $data['lapor'] = $this->laporan->getById($id_fitur);
        $this->load->view('templates_user/header',$data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('lapor/rating',$data);
        $this->load->view('templates_user/footer');
    }


    public function update()
    {
        $this->form_validation->set_rules('rating','Rating','required');
        if ($this->form_validation->run()==true)
        {
            $id_fitur = $this->input->post('id_fitur');
            $data['rating'] = $this->input->post('rating');
            $data['feedback'] = $this->input->post('feedback');
            $this->laporan->update_rating($data,$id_fitur);
            $this->session->set_flashdata('success_ubah','Rating Berhasil Diberikan');
            redirect('Lapor');
        }
        else
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('Lapor');
        }
    }

}
