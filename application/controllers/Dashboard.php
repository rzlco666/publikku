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
        $this->load->view('templates_user/header');
        $this->load->view('templates_user/sidebar');
        $this->load->view('dashboard/index');
        $this->load->view('templates_user/footer');
    }

}
