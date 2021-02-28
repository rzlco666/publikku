<?php 
class Pengajuan extends CI_Model 
{

    private $table = "surat";

	public function __construct()
	{
        parent::__construct();
	}

    public function getAll()
    {
        $id_user = $this->session->userdata('id_user');
        return $this->db->get_where($this->table, ["id_user" => $id_user])->result();
    }

    public function getById($id_surat)
    {
        return $this->db->get_where($this->table, ["id_surat" => $id_surat])->row();
    }

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($data,$id_surat)
    {
        return $this->db->update($this->table, $data, array('id_surat' => $id_surat));
    }

     public function delete($id_surat)
    {
        return $this->db->delete($this->table, array("id_surat" => $id_surat));
    }

}
?>