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

     public function getByTotal()
    {
        $this->db->select('id_surat, COUNT(id_surat) as total');
        $query = $this->db->get($this->table);
        if($query->num_rows()>0)
        {
            return $query->row();
        }
    }

    public function getByPeriksa()
    {
        $this->db->select('id_surat, COUNT(id_surat) as total');
        $query = $this->db->get_where($this->table, ["status" => "Diperiksa"]);
        if($query->num_rows()>0)
        {
            return $query->row();
        }
    }

    public function getBySelesai()
    {
        $this->db->select('id_surat, COUNT(id_surat) as total');
        $query = $this->db->get_where($this->table, ["status" => "Selesai"]);
        if($query->num_rows()>0)
        {
            return $query->row();
        }
    }

    public function getByProses()
    {
        $this->db->select('id_surat, COUNT(id_surat) as total');
        $query = $this->db->get_where($this->table, ["status" => "Diproses"]);
        if($query->num_rows()>0)
        {
            return $query->row();
        }
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