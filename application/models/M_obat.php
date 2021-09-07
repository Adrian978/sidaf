<?php

class M_obat extends CI_Model
{
    public function ambil_obat()
    {
        $query = $this->db->query("SELECT * FROM obat");
        return $query;
    }

    public function simpan($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function edit_obat($where = "")
    {
        $data = $this->db->query('SELECT * FROM obat ' . $where);
        return $data;
    }

    public function update_obat($data)
    {
        $this->db->where('id_obat', $data['id_obat']);
        $this->db->update('obat', $data);
    }

    public function hapus($table, $where)
    {
        return $this->db->delete($table, $where);
    }
}
