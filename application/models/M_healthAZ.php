<?php

class M_healthAZ extends CI_Model
{
    public function getAllKamus()
    {
        // get all data
        $query = $this->db->query("SELECT * FROM kamus ORDER BY judul ASC");
        return $query->result_array();
    }

    public function getKamusById($id)
    {
        // get all data
        $query = $this->db->query("SELECT * FROM kamus WHERE id = '" . $id . "'");
        return $query->result_array();
    }

    public function AddKamus($data)
    {
        return $this->db->insert('kamus', $data);
    }

    public function UpdateKamus($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('kamus', $data);
    }

    public function DeleteKamus($id)
    {
        return $this->db->delete('kamus', ['id' => $id]);
    }

    public function checker($simptom)
    {
        $query = $this->db->query("SELECT * FROM kamus WHERE isi LIKE '%$simptom%'");
        return $query->result_array();
    }
}
