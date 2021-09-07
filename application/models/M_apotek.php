<?php

class M_apotek extends CI_Model
{
    public function ambil_apotek()
    {
        $query = $this->db->query("SELECT * FROM apotek");
        return $query;
    }

    public function simpan($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function edit_apotek($where = "")
    {
        $data = $this->db->query('SELECT * FROM apotek ' . $where);
        return $data;
    }

    public function update_apotek($data)
    {
        $this->db->where('id_apotek', $data['id_apotek']);
        $this->db->update('apotek', $data);
    }

    public function hapus($table, $where)
    {
        return $this->db->delete($table, $where);
    }
}
