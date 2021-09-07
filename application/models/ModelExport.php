<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ModelExport extends CI_Model
{
  public function rekap()
  {

    $this->db->select('*');
    $this->db->from('pirt');
    $this->db->join('pkp', 'pirt.nik = pkp.nik', 'INNER');
    $this->db->join('pemohon', 'pirt.nik = pemohon.nik', 'INNER');
    $query = $this->db->get()->result();
    return $query;
  }

  public function pkpcetak()
  {

    $this->db->select('*');
    $this->db->from('pkp');
    $this->db->join('pemohon', 'pkp.nik = pemohon.nik', 'INNER');
    $query = $this->db->get()->result();
    return $query;
  }

  public function pirtcetak()
  {

    $this->db->select('*');
    $this->db->from('pirt');
    $this->db->join('pkp', 'pirt.nik = pkp.nik', 'INNER');
    $this->db->join('pemohon', 'pirt.nik = pemohon.nik', 'INNER');
    $query = $this->db->get()->result();
    return $query;
  }

  public function pkpttd()
  {
    $this->db->select('*');
    $this->db->from('pkp');
    $this->db->join('pemohon', 'pkp.nik = pemohon.nik', 'INNER');
    $query = $this->db->get()->result();
    return $query;
  }

  public function pirtttd()
  {
    $this->db->select('*');
    $this->db->from('pirt');
    $this->db->join('pkp', 'pirt.nik = pkp.nik', 'INNER');
    $this->db->join('pemohon', 'pirt.nik = pemohon.nik', 'INNER');
    $query = $this->db->get()->result();
    return $query;
  }

  public function apotek()
  {
    $query = $this->db->query("SELECT * FROM apotek")->result();
    return $query;
  }

  public function obat()
  {
    $query = $this->db->query("SELECT * FROM obat")->result();
    return $query;
  }
}
