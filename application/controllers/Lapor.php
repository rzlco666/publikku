<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapor extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('authen');
        $this->load->model('laporan');
		$this->authen->cek_login();
	}

    public function index()
    {
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->authen->getById($id_user);
        $data['laporan'] = $this->laporan->getAll();
        $this->load->view('templates_user/header',$data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('lapor/index',$data);
        $this->load->view('templates_user/footer');
    }

    public function create()
    {
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->authen->getById($id_user);
        $this->load->view('templates_user/header',$data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('lapor/create',$data);
        $this->load->view('templates_user/footer');
    }

    public function save()
    {
        $this->form_validation->set_rules('isi','Isi','required');
        $this->form_validation->set_rules('lokasi','Lokasi','required');
        $this->form_validation->set_rules('tanggal','Tanggal','required');
        if ($this->form_validation->run()==true)
        {
            $data['isi_lapor'] = $this->input->post('isi');
            $data['lokasi'] = $this->input->post('lokasi');
            $data['status'] = 'Diperiksa';
            $data['deskripsi'] = 'Menunggu diperiksa';
            $data['tanggal'] = $this->input->post('tanggal');
            $data['id_user'] = $this->input->post('id_user');
            $this->laporan->save($data);
            $this->session->set_flashdata('success_ubah','Data Berhasil Ditambah');
            redirect('Lapor');
        }
        else
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('Lapor/create');
        }
    }

    public function update()
    {
        $this->form_validation->set_rules('isi','Isi','required');
        $this->form_validation->set_rules('lokasi','Lokasi','required');
        $this->form_validation->set_rules('tanggal','Tanggal','required');
        if ($this->form_validation->run()==true)
        {
            $id_fitur = $this->input->post('id_fitur');
            $data['isi_lapor'] = $this->input->post('isi');
            $data['lokasi'] = $this->input->post('lokasi');
            $data['tanggal'] = $this->input->post('tanggal');
            $this->laporan->update($data,$id_fitur);
            $this->session->set_flashdata('success_ubah','Data Berhasil Diubah');
            redirect('Lapor');
        }
        else
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('Lapor');
        }
    }

    function edit($id_fitur)
    {
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->authen->getById($id_user);
        $data['lapor'] = $this->laporan->getById($id_fitur);
        $this->load->view('templates_user/header',$data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('lapor/edit',$data);
        $this->load->view('templates_user/footer');

    }

    function delete($id_fitur)
    {
        $this->laporan->delete($id_fitur);
        $this->session->set_flashdata('success_ubah','Data Berhasil Dihapus');
        redirect('Lapor');
    }

}
