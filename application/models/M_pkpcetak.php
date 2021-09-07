<?php

class M_pkpcetak extends CI_Model
{
    public function ambil_pkpcetak()
    {
        $this->db->select('*');
        $this->db->from('pkp');
        $this->db->join('pemohon', 'pkp.nik = pemohon.nik', 'INNER');
        $query = $this->db->get();
        return $query;
    }

    public function detail()
    {
        $this->db->select('*');
        $this->db->from('pkp');
        $this->db->join('pemohon', 'pkp.nik = pemohon.nik', 'INNER');
        $query = $this->db->get();
        return $query;
    }
}
