<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('authen');
        $this->load->model('laporan');
		$this->authen->cek_login();
        $this->load->library('form_validation');
    }

	public function index()
	{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->authen->getById($id_user);
        $data['notifikasi'] = $this->laporan->getAllNotif();
		$this->load->view('templates_user/header',$data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('profil/index',$data);
        $this->load->view('templates_user/footer');
	}

	public function edit($id_user)
	{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->authen->getById($id_user);
        $data['notifikasi'] = $this->laporan->getAllNotif();
		$this->load->view('templates_user/header',$data);
        $this->load->view('templates_user/sidebar');
		$this->load->view('profil/edit',$data);
		$this->load->view('templates_user/footer');
	}

	public function update()
	{

		$this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('KTP', 'KTP','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]');

        if ($this->form_validation->run()==true)
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $username = $this->input->post('username');
            $alamat = $this->input->post('alamat');
            $KTP = $this->input->post('KTP');

            $this->authen->update($email,$password,$username,$alamat,$KTP);
            $this->session->set_flashdata('success_ubah','Data Berhasil Diubah');
            redirect('Profil');
        }
		else
		{
			$id_user = $this->input->post('id_user');
			$data['user'] = $this->authen->getById($id_user);
            $data['notifikasi'] = $this->laporan->getAllNotif();
			$this->session->set_flashdata('error', validation_errors());
			$this->load->view('templates_user/header',$data);
        	$this->load->view('templates_user/sidebar');
			$this->load->view('profil/edit',$data);
			$this->load->view('templates_user/footer');
		}
	}

	public function upload($id_user)
	{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->authen->getById($id_user);
        $data['notifikasi'] = $this->laporan->getAllNotif();
		$this->load->view('templates_user/header',$data);
        $this->load->view('templates_user/sidebar');
		$this->load->view('profil/upload',$data);
		$this->load->view('templates_user/footer');
	}

	public function editf()
	{
        $config['upload_path']          = './uploads/profil/';
        //$config['allowed_types']        = 'gif|jpg|png';
        //$config['max_size']             = 100;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768;
        //$config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('berkas'))
        {
                redirect('Dashboard');
        }
        else
        {
            $id_user = $this->session->userdata('id_user');
            $data['foto'] = $this->upload->data("file_name");
            $this->db->update('user', $data, array('id_user' => $id_user));
            redirect('Profil');
        }
	}

}