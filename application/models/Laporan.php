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

    public function getByTotal()
    {
        $this->db->select('id_fitur, COUNT(id_fitur) as total');
        $query = $this->db->get($this->table);
        if($query->num_rows()>0)
        {
            return $query->row();
        }
    }

    public function getByPeriksa()
    {
        $this->db->select('id_fitur, COUNT(id_fitur) as total');
        $query = $this->db->get_where($this->table, ["status" => "Diperiksa"]);
        if($query->num_rows()>0)
        {
            return $query->row();
        }
    }

    public function getBySelesai()
    {
        $this->db->select('id_fitur, COUNT(id_fitur) as total');
        $query = $this->db->get_where($this->table, ["status" => "Selesai"]);
        if($query->num_rows()>0)
        {
            return $query->row();
        }
    }

    public function getByAspirasi()
    {
        $this->db->select('id_fitur, COUNT(id_fitur) as total');
        $query = $this->db->get_where($this->table, ["jenis" => "Aspirasi"]);
        if($query->num_rows()>0)
        {
            return $query->row();
        }
    }

    public function getByLapo()
    {
        $this->db->select('id_fitur, COUNT(id_fitur) as total');
        $this->db->from('fitur');
        $this->db->where('jenis !=', 'Aspirasi');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->row();
        }
    }

    public function getByProses()
    {
        $this->db->select('id_fitur, COUNT(id_fitur) as total');
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

    public function update($data,$id_fitur)
    {
        return $this->db->update($this->table, $data, array('id_fitur' => $id_fitur));
    }

    public function update_rating($data,$id_fitur)
    {
        return $this->db->update($this->table, $data, array('id_fitur' => $id_fitur));
    }

     public function delete($id_fitur)
    {
        return $this->db->delete($this->table, array("id_fitur" => $id_fitur));
    }

    public function getAllNotif()
    {
        $id_user = $this->session->userdata('id_user');
        return $this->db->get_where("notifikasi", ["id_receiver" => $id_user])->result();
    }

    public function getAllJenis()
    {
        $id_user = $this->session->userdata('id_user');
        return $this->db->get("kategori")->result_array();
    }

}
?>