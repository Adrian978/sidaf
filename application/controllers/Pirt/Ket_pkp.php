<?php

class Ket_pkp extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_ket_pkp');
    }

    public function index()
    {
        $data = array('data_ket_pkp' => $this->M_ket_pkp->ambil_ket_pkp()->result_array(),);

        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('ket_pkp/ket_pkp', $data);
        $this->load->view('template/footer');
    }

    public function edit_ket_pkp($kode = 0)
    {
        $row = $this->M_ket_pkp->edit_ket_pkp("WHERE ket_pkp.`id_ket_pkp` = '$kode'")->result_array();

        $data = array(
            'id_ket_pkp' => $row[0]['id_ket_pkp'],
            'keterangan' => $row[0]['keterangan'],
        );

        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('ket_pkp/edit_ket_pkp', $data);
        $this->load->view('template/footer');
    }
    public function update_ket_pkp()
    {

        $data = array(
            'id_ket_pkp' => $this->input->post('id_ket_pkp'),
            'keterangan' => $this->input->post('keterangan'),
        );

        $res = $this->M_ket_pkp->update_ket_pkp($data);
        if ($res = 1) {
            header('location:' . base_url() . 'pirt/ket_pkp');
            $this->session->set_flashdata('success', 'Data Berhasil di Update');
        }
    }
}
