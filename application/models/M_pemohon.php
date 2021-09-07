<?php

class M_Pemohon extends CI_Model
{
    public function ambil_pemohon()
    {
        $query = $this->db->query("SELECT * FROM pemohon");
        return $query;
    }

    public function simpan($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function edit_pemohon($where = "")
    {
        $data = $this->db->query('SELECT * FROM pemohon ' . $where);
        return $data;
    }

    public function update_pemohon($data)
    {
        $this->db->where('id_pemohon', $data['id_pemohon']);
        $this->db->update('pemohon', $data);
    }

    public function hapus($table, $where)
    {
        return $this->db->delete($table, $where);
    }
}
