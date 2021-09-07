<?php

class KD extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_kd');
    }

    public function index()
    {
        $data = array('data_kd' => $this->M_kd->ambil_kd()->result_array(),);

        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('kd/kd', $data);
        $this->load->view('template/footer');
    }

    public function edit_kd($kode = 0)
    {
        $row = $this->M_kd->edit_kd("WHERE kepala_dinas.`id_kd` = '$kode'")->result_array();

        $data = array(
            'id_kd' => $row[0]['id_kd'],
            'nama_kd' => $row[0]['nama_kd'],
            'nip' => $row[0]['nip'],
        );

        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('kd/edit_kd', $data);
        $this->load->view('template/footer');
    }
    public function update_kd()
    {

        $data = array(
            'id_kd' => $this->input->post('id_kd'),
            'nama_kd' => $this->input->post('nama_kd'),
            'nip' => $this->input->post('nip')
        );

        $res = $this->M_kd->update_kd($data);
        if ($res = 1) {
            header('location:' . base_url() . 'pirt/kd');
            $this->session->set_flashdata('success', 'Data Berhasil di Update');
        }
    }
}
