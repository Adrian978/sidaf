<?php

class M_ket_pirt extends CI_Model
{
    public function ambil_ket_pirt()
    {
        $query = $this->db->query("SELECT * FROM ket_pirt");
        return $query;
    }

    public function edit_ket_pirt($where = "")
    {
        $data = $this->db->query('SELECT * FROM ket_pirt ' . $where);
        return $data;
    }

    public function update_ket_pirt($data)
    {
        $this->db->where('id_ket_pirt', $data['id_ket_pirt']);
        $this->db->update('ket_pirt', $data);
    }
}
