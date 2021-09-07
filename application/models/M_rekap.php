<?php

class M_rekap extends CI_Model
{
    public function ambil_rekap()
    {
        $this->db->select('*');
        $this->db->from('pirt');
        $this->db->join('pkp', 'pirt.nik = pkp.nik', 'INNER');
        $this->db->join('pemohon', 'pirt.nik = pemohon.nik', 'INNER');
        $query = $this->db->get();
        return $query;
    }
}
