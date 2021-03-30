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
        $data['notifikasi'] = $this->laporan->getAllNotif();
        $data['laporan'] = $this->laporan->getAll();
        $this->load->view('templates_user/header', $data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('lapor/index', $data);
        $this->load->view('templates_user/footer');
    }

    public function create()
    {
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->authen->getById($id_user);
        $data['notifikasi'] = $this->laporan->getAllNotif();
        $this->load->view('templates_user/header', $data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('lapor/create', $data);
        $this->load->view('templates_user/footer');
    }

    public function save()
    {
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        if ($this->form_validation->run() == true) {
            $data['isi_lapor'] = $this->input->post('isi');
            $data['lokasi'] = $this->input->post('lokasi');
            $data['status'] = 'Diperiksa';
            $data['deskripsi'] = 'Menunggu diperiksa';
            $data['tanggal'] = $this->input->post('tanggal');
            $data['id_user'] = $this->input->post('id_user');

            //cek imange
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {

                $config['image_library'] = 'gd2';
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size'] = '15048';
                $config['width'] = 400;
                $config['height'] = 400;
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['upload_path'] = './assets_user/images/laporan';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                if ($this->upload->do_upload('image')) {

                    $old_image = $data['fitur']['foto'];

                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets_user/images/laporan' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('foto', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->laporan->save($data);
            $this->session->set_flashdata('success_ubah', 'Data Berhasil Ditambah');
            redirect('Lapor');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('Lapor/create');
        }
    }

    public function update()
    {
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        if ($this->form_validation->run() == true) {
            $id_fitur = $this->input->post('id_fitur');
            $data['isi_lapor'] = $this->input->post('isi');
            $data['lokasi'] = $this->input->post('lokasi');
            $data['tanggal'] = $this->input->post('tanggal');
            //cek imange
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {

                $config['image_library'] = 'gd2';
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size'] = '2048';
                $config['width'] = 400;
                $config['height'] = 400;
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['upload_path'] = './assets_user/images/laporan';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                if ($this->upload->do_upload('image')) {

                    $old_image = $data['fitur']['foto'];

                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets_user/images/laporan' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('foto', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->laporan->update($data, $id_fitur);
            $this->session->set_flashdata('success_ubah', 'Data Berhasil Diubah');
            redirect('Lapor');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('Lapor');
        }
    }

    function edit($id_fitur)
    {
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->authen->getById($id_user);
        $data['notifikasi'] = $this->laporan->getAllNotif();
        $data['lapor'] = $this->laporan->getById($id_fitur);
        $this->load->view('templates_user/header', $data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('lapor/edit', $data);
        $this->load->view('templates_user/footer');
    }

    function delete($id_fitur)
    {
        $this->laporan->delete($id_fitur);
        $this->session->set_flashdata('success_ubah', 'Data Berhasil Dihapus');
        redirect('Lapor');
    }
}
