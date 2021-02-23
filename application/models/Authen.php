<?php 
class Authen extends CI_Model 
{

	public function __construct()
	{
        parent::__construct();
	}

	function register($email,$password,$username,$alamat,$KTP)
	{
		$data_user = array(
			'email'=>$email,
			'password'=>$password,
			'username'=>$username,
            'alamat'=>$alamat,
            'KTP'=>$KTP
		);
		$this->db->insert('user',$data_user);
	}

	function login_user($email,$password)
	{
        $query = $this->db->get_where('user',array('email'=>$email));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            $hash = $query->row('password');
            if ($password == $data_user->password) {
                $this->session->set_userdata('email',$email);
				$this->session->set_userdata('username',$data_user->username);
                $this->session->set_userdata('id_user',$data_user->id_user);
                $this->session->set_userdata('KTP',$data_user->KTP);
				$this->session->set_userdata('is_login',TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
	
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
			redirect('Auth/login');
		}
    }
}
?>