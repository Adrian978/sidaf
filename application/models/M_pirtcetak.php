<?php

class M_pirtcetak extends CI_Model
{
    public function ambil_pirtcetak()
    {
        $this->db->select('*');
        $this->db->from('pirt');
        $this->db->join('pkp', 'pirt.nik = pkp.nik', 'INNER');
        $this->db->join('pemohon', 'pirt.nik = pemohon.nik', 'INNER');
        $query = $this->db->get();
        return $query;
    }

    public function detail()
    {
        $this->db->select('*');
        $this->db->from('pirt');
        $this->db->join('pkp', 'pirt.nik = pkp.nik', 'INNER');
        $this->db->join('pemohon', 'pirt.nik = pemohon.nik', 'INNER');
        $query = $this->db->get()->result();
        return $query;
    }
}
