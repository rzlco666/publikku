<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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

        $data['laporan'] = $this->laporan->getByTotal();
        $data['laporan2'] = $this->laporan->getByProses();
        $data['laporan3'] = $this->laporan->getByPeriksa();
        $data['laporan4'] = $this->laporan->getBySelesai();

        $data['surat'] = $this->pengajuan->getByTotal();
        $data['surat2'] = $this->pengajuan->getByProses();
        $data['surat3'] = $this->pengajuan->getByPeriksa();
        $data['surat4'] = $this->pengajuan->getBySelesai();

        $this->load->view('templates_user/header',$data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('dashboard/index',$data);
        $this->load->view('templates_user/footer');
    }

}
