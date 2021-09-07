<?php

class Ket_pirt extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_ket_pirt');
    }

    public function index()
    {
        $data = array('data_ket_pirt' => $this->M_ket_pirt->ambil_ket_pirt()->result_array(),);

        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('ket_pirt/ket_pirt', $data);
        $this->load->view('template/footer');
    }

    public function edit_ket_pirt($kode = 0)
    {
        $row = $this->M_ket_pirt->edit_ket_pirt("WHERE ket_pirt.`id_ket_pirt` = '$kode'")->result_array();

        $data = array(
            'id_ket_pirt' => $row[0]['id_ket_pirt'],
            'keterangan' => $row[0]['keterangan'],
        );

        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('ket_pirt/edit_ket_pirt', $data);
        $this->load->view('template/footer');
    }
    public function update_ket_pirt()
    {

        $data = array(
            'id_ket_pirt' => $this->input->post('id_ket_pirt'),
            'keterangan' => $this->input->post('keterangan'),
        );

        $res = $this->M_ket_pirt->update_ket_pirt($data);
        if ($res = 1) {
            header('location:' . base_url() . 'pirt/ket_pirt');
            $this->session->set_flashdata('success', 'Data Berhasil di Update');
        }
    }
}
