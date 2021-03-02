<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('authen');
        $this->load->model('laporan');
        $this->load->model('pengajuan');
		$this->authen->cek_login();
	}

    public function index()
    {
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->authen->getById($id_user);
        $data['notifikasi'] = $this->laporan->getAllNotif();
        $data['surat'] = $this->pengajuan->getAll();
        $this->load->view('templates_user/header',$data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('surat_dash/index',$data);
        $this->load->view('templates_user/footer');
    }

    public function create()
    {
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->authen->getById($id_user);
        $data['notifikasi'] = $this->laporan->getAllNotif();
        $this->load->view('templates_user/header',$data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('surat_dash/create',$data);
        $this->load->view('templates_user/footer');
    }

    public function save()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('nik','NIK','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('jenis','Jenis','required');
        $this->form_validation->set_rules('pesan','Pesan','required');
        $this->form_validation->set_rules('tanggal','Tanggal','required');
        if ($this->form_validation->run()==true)
        {
            $data['pesan'] = $this->input->post('pesan');
            $data['nama'] = $this->input->post('nama');
            $data['status'] = 'Diperiksa';
            $data['nik'] = $this->input->post('nik');
            $data['email'] = $this->input->post('email');
            $data['alamat'] = $this->input->post('alamat');
            $data['tanggal'] = $this->input->post('tanggal');
            $data['id_user'] = $this->input->post('id_user');
            $data['jenis'] = $this->input->post('jenis');
            $this->pengajuan->save($data);
            $this->session->set_flashdata('success_ubah','Data Berhasil Ditambah');
            redirect('Surat');
        }
        else
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('Surat/create');
        }
    }

    public function update()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('nik','NIK','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('jenis','Jenis','required');
        $this->form_validation->set_rules('pesan','Pesan','required');
        $this->form_validation->set_rules('tanggal','Tanggal','required');
        if ($this->form_validation->run()==true)
        {
            $id_surat = $this->input->post('id_surat');
            $data['pesan'] = $this->input->post('pesan');
            $data['nama'] = $this->input->post('nama');
            $data['nik'] = $this->input->post('nik');
            $data['email'] = $this->input->post('email');
            $data['alamat'] = $this->input->post('alamat');
            $data['tanggal'] = $this->input->post('tanggal');
            $data['jenis'] = $this->input->post('jenis');
            $this->pengajuan->update($data,$id_surat);
            $this->session->set_flashdata('success_ubah','Data Berhasil Diubah');
            redirect('Surat');
        }
        else
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('Surat');
        }
    }

    function edit($id_surat)
    {
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->authen->getById($id_user);
        $data['notifikasi'] = $this->laporan->getAllNotif();
        $data['surat'] = $this->pengajuan->getById($id_surat);
        $this->load->view('templates_user/header',$data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('surat_dash/edit',$data);
        $this->load->view('templates_user/footer');

    }

    function delete($id_surat)
    {
        $this->pengajuan->delete($id_surat);
        $this->session->set_flashdata('success_ubah','Data Berhasil Dihapus');
        redirect('Surat');
    }

}
