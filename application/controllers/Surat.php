<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
    public function __construct()
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
        $this->load->view('templates_user/header', $data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('surat_dash/index', $data);
        $this->load->view('templates_user/footer');
    }

    public function create()
    {
        $data['jenis_surat'] = $this->pengajuan->getAllJenis();
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->authen->getById($id_user);
        $data['notifikasi'] = $this->laporan->getAllNotif();
        $this->load->view('templates_user/header', $data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('surat_dash/create', $data);
        $this->load->view('templates_user/footer');
    }

    public function save()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('hp', 'Hp', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        if ($this->form_validation->run() == true) {
            $data['pesan'] = $this->input->post('pesan');
            $data['nama'] = $this->input->post('nama');
            $data['status'] = 'Diperiksa';
            $data['nik'] = $this->input->post('nik');
            $data['hp'] = $this->input->post('hp');
            $data['alamat'] = $this->input->post('alamat');
            $data['tanggal'] = $this->input->post('tanggal');
            $data['id_user'] = $this->input->post('id_user');
            $data['jenis'] = $this->input->post('jenis');

            //cek imange
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {

                $config['image_library'] = 'gd2';
                $config['allowed_types'] = 'jpeg|jpg|png|mp4|mkv|avi|mpg|mpeg|webm|pdf';
                $config['max_size'] = '15048';
                $config['upload_path'] = './assets_user/images/surat';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                if ($this->upload->do_upload('image')) {

                    $old_image = $data['surat']['foto'];

                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets_user/images/surat' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('foto', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->pengajuan->save($data);
            $this->session->set_flashdata('success_ubah', 'Data Berhasil Ditambah');
            redirect('Surat');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('Surat/create');
        }
    }

    public function update()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('hp', 'Hp', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        if ($this->form_validation->run() == true) {
            $id_surat = $this->input->post('id_surat');
            $data['pesan'] = $this->input->post('pesan');
            $data['nama'] = $this->input->post('nama');
            $data['nik'] = $this->input->post('nik');
            $data['hp'] = $this->input->post('hp');
            $data['alamat'] = $this->input->post('alamat');
            $data['tanggal'] = $this->input->post('tanggal');
            $data['jenis'] = $this->input->post('jenis');

            //cek imange
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {

                $config['image_library'] = 'gd2';
                $config['allowed_types'] = 'jpeg|jpg|png|mp4|mkv|avi|mpg|mpeg|webm|pdf';
                $config['max_size'] = '15048';
                $config['upload_path'] = './assets_user/images/surat';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                if ($this->upload->do_upload('image')) {

                    $old_image = $data['surat']['foto'];

                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets_user/images/surat' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('foto', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            
            $this->pengajuan->update($data, $id_surat);
            $this->session->set_flashdata('success_ubah', 'Data Berhasil Diubah');
            redirect('Surat');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('Surat');
        }
    }

    public function edit($id_surat)
    {
        $data['jenis_surat'] = $this->pengajuan->getAllJenis();
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->authen->getById($id_user);
        $data['notifikasi'] = $this->laporan->getAllNotif();
        $data['surat'] = $this->pengajuan->getById($id_surat);
        $this->load->view('templates_user/header', $data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('surat_dash/edit', $data);
        $this->load->view('templates_user/footer');

    }

    public function delete($id_surat)
    {
        $this->pengajuan->delete($id_surat);
        $this->session->set_flashdata('success_ubah', 'Data Berhasil Dibatalkan');
        redirect('Surat');
    }

}
