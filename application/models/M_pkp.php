<?php

class M_pkp extends CI_Model
{
    public function ambil_pkp()
    {
        $this->db->select('*');
        $this->db->from('pkp');
        $this->db->join('pemohon', 'pkp.nik = pemohon.nik', 'INNER');
        $query = $this->db->get();
        return $query;
    }

    public function simpan($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function edit_pkp($where = "")
    {
        $data = $this->db->query('SELECT * FROM pkp ' . $where);
        return $data;
    }

    public function update_pkp($data)
    {
        $this->db->where('id_pkp', $data['id_pkp']);
        $this->db->update('pkp', $data);
    }

    public function hapus($table, $where)
    {
        return $this->db->delete($table, $where);
    }
}
