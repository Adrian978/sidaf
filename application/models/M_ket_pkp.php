<?php

class M_ket_pkp extends CI_Model
{
    public function ambil_ket_pkp()
    {
        $query = $this->db->query("SELECT * FROM ket_pkp");
        return $query;
    }

    public function edit_ket_pkp($where = "")
    {
        $data = $this->db->query('SELECT * FROM ket_pkp ' . $where);
        return $data;
    }

    public function update_ket_pkp($data)
    {
        $this->db->where('id_ket_pkp', $data['id_ket_pkp']);
        $this->db->update('ket_pkp', $data);
    }
}
