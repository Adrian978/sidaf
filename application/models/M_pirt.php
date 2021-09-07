<?php

class M_pirt extends CI_Model
{
    public function ambil_pirt()
    {
        $this->db->select('*');
        $this->db->from('pirt');
        $this->db->join('pemohon', 'pirt.nik = pemohon.nik', 'INNER');
        $query = $this->db->get();
        return $query;
    }

    public function simpan($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function edit_pirt($where = "")
    {
        $data = $this->db->query('SELECT * FROM pirt ' . $where);
        return $data;
    }

    public function update_pirt($data)
    {
        $this->db->where('id_pirt', $data['id_pirt']);
        $this->db->update('pirt', $data);
    }

    public function hapus($table, $where)
    {
        return $this->db->delete($table, $where);
    }
}
