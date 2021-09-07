<?php

class M_pirtttd extends CI_Model
{
    public function ambil_pirtttd()
    {
        $this->db->select('*');
        $this->db->from('pirt');
        $this->db->join('pkp', 'pirt.nik = pkp.nik', 'INNER');
        $this->db->join('pemohon', 'pirt.nik = pemohon.nik', 'INNER');
        $query = $this->db->get();
        return $query;
    }
}
