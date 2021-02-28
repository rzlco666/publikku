<?php 
class Laporan extends CI_Model 
{

    private $table = "fitur";

	public function __construct()
	{
        parent::__construct();
	}

    public function getAll()
    {
        $id_user = $this->session->userdata('id_user');
        return $this->db->get_where($this->table, ["id_user" => $id_user])->result();
    }

    public function getById($id_fitur)
    {
        return $this->db->get_where($this->table, ["id_fitur" => $id_fitur])->row();
    }

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($data,$id_fitur)
    {
        return $this->db->update($this->table, $data, array('id_fitur' => $id_fitur));
    }

     public function delete($id_fitur)
    {
        return $this->db->delete($this->table, array("id_fitur" => $id_fitur));
    }

}
?>