<?php

class M_kd extends CI_Model
{
    public function ambil_kd()
    {
        $query = $this->db->query("SELECT * FROM kepala_dinas");
        return $query;
    }

    public function edit_kd($where = "")
    {
        $data = $this->db->query('SELECT * FROM kepala_dinas ' . $where);
        return $data;
    }

    public function update_kd($data)
    {
        $this->db->where('id_kd', $data['id_kd']);
        $this->db->update('kepala_dinas', $data);
    }
}
