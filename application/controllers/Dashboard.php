<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('authen');
		$this->authen->cek_login();
	}

    public function index()
    {
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->authen->getById($id_user);
        $this->load->view('templates_user/header',$data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('dashboard/index',$data);
        $this->load->view('templates_user/footer');
    }

}
