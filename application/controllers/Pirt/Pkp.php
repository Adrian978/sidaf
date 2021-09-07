<?php

class Pkp extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pkp');
    }

    public function index()
    {
        $data = array('data_pkp' => $this->M_pkp->ambil_pkp()->result_array(),);

        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('pkp/pkp', $data);
        $this->load->view('template/footer');
    }

    public function tambah_pkp()
    {
        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('pkp/tambah_pkp');
        $this->load->view('template/footer');
    }

    public function simpan_pkp()
    {
        $id_pkp = '';
        $nik = $this->input->post('nik');
        $tgl_penyuluhan = $this->input->post('tgl_penyuluhan');
        $tgl_cetak = $this->input->post('tgl_cetak');
        $sertifikat = $this->input->post('sertifikat');
        $status = $this->input->post('status');

        $data = array(
            'id_pkp' => $id_pkp,
            'nik' => $nik,
            'tgl_penyuluhan' => $tgl_penyuluhan,
            'tgl_cetak' => $tgl_cetak,
            'sertifikat' => $sertifikat,
            'status' => $status,
        );

        //simpan data
        $this->M_pkp->simpan('pkp', $data);

        $this->session->set_flashdata('success', 'Data Berhasil di Simpan');
        redirect('pirt/pkp');
    }

    public function edit_pkp($kode = 0)
    {
        $row = $this->M_pkp->edit_pkp("WHERE pkp.`id_pkp` = '$kode'")->result_array();

        $data = array(
            'id_pkp' => $row[0]['id_pkp'],
            'nik' => $row[0]['nik'],
            'tgl_penyuluhan' => $row[0]['tgl_penyuluhan'],
            'tgl_cetak' => $row[0]['tgl_cetak'],
            'sertifikat' => $row[0]['sertifikat'],
            'status' => $row[0]['status'],
        );

        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('pkp/edit_pkp', $data);
        $this->load->view('template/footer');
    }

    public function update_pkp()
    {
        $data = array(
            'id_pkp' => $this->input->post('id_pkp'),
            'nik' => $this->input->post('nik'),
            'tgl_penyuluhan' => $this->input->post('tgl_penyuluhan'),
            'tgl_cetak' => $this->input->post('tgl_cetak'),
            'sertifikat' => $this->input->post('sertifikat'),
            'status' => $this->input->post('status')
        );

        $res = $this->M_pkp->update_pkp($data);
        if ($res = 1) {
            header('location:' . base_url() . 'pirt/pkp');
            $this->session->set_flashdata('success', 'Data Berhasil di Update');
        }
    }

    public function hapus_pkp($kode = 0)
    {
        $result = $this->M_pkp->hapus('pkp', array('id_pkp' => $kode));
        if ($result == 1) {
            header('location:' . base_url() . 'pirt/pkp');
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus');
        }
    }
}
