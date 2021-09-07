<?php

class M_pkpttd extends CI_Model
{
    public function ambil_pkpttd()
    {
        $this->db->select('*');
        $this->db->from('pkp');
        $this->db->join('pemohon', 'pkp.nik = pemohon.nik', 'INNER');
        $query = $this->db->get();
        return $query;
    }
}
