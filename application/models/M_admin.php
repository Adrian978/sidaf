<?php

class M_admin extends CI_Model
{
    public function ambil_user()
    {
        $query = $this->db->query("SELECT * FROM user");
        return $query;
    }

    public function simpan($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function edit_user($where = "")
    {
        $data = $this->db->query('SELECT * FROM user ' . $where);
        return $data;
    }

    public function update_user($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('user', $data);
    }

    public function hapus($table, $where)
    {
        return $this->db->delete($table, $where);
    }
}
