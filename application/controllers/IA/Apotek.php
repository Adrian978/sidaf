<?php

class Apotek extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_apotek');
    }

    public function index()
    {
        $data = array('data_apotek' => $this->M_apotek->ambil_apotek()->result_array(),);

        $this->load->view('template/sidebar_ia');
        $this->load->view('template/header_ia');
        $this->load->view('apotek/apotek', $data);
        $this->load->view('template/footer_ia');
    }

    public function tambah_apotek()
    {
        $this->load->view('template/sidebar_ia');
        $this->load->view('template/header_ia');
        $this->load->view('apotek/tambah_apotek');
        $this->load->view('template/footer_ia');
    }

    public function simpan_apotek()
    {
        $id_apotek = '';
        $nm_apotek = $this->input->post('nm_apotek');
        $sia = $this->input->post('sia');
        $nib = $this->input->post('nib');
        $tgl_daftar = $this->input->post('tgl_daftar');
        $masa_apotek = $this->input->post('masa_apotek');
        $alamat = $this->input->post('alamat');
        $apa = $this->input->post('apa');
        $telp_apa = $this->input->post('telp_apa');
        $psa = $this->input->post('psa');
        $telp_psa = $this->input->post('telp_psa');
        $sipa = $this->input->post('sipa');
        $masa_sipa = $this->input->post('masa_sipa');
        $apoteker_pendamping = $this->input->post('apoteker_pendamping');
        $keterangan = $this->input->post('keterangan');
        $status = $this->input->post('status');

        $data = array(
            'id_apotek' => $id_apotek,
            'nm_apotek' => $nm_apotek,
            'sia' => $sia,
            'nib' => $nib,
            'tgl_daftar' => $tgl_daftar,
            'masa_apotek' => $masa_apotek,
            'alamat' => $alamat,
            'apa' => $apa,
            'telp_apa' => $telp_apa,
            'psa' => $psa,
            'telp_psa' => $telp_psa,
            'sipa' => $sipa,
            'masa_sipa' => $masa_sipa,
            'apoteker_pendamping' => $apoteker_pendamping,
            'keterangan' => $keterangan,
            'status' => $status,
        );

        //simpan data
        $this->M_apotek->simpan('apotek', $data);

        $this->session->set_flashdata('success', 'Data Berhasil di Simpan');
        redirect('ia/apotek');
    }

    public function edit_apotek($kode = 0)
    {
        $row = $this->M_apotek->edit_apotek("WHERE apotek.`id_apotek` = '$kode'")->result_array();

        $data = array(
            'id_apotek' => $row[0]['id_apotek'],
            'nm_apotek' => $row[0]['nm_apotek'],
            'sia' => $row[0]['sia'],
            'nib' => $row[0]['nib'],
            'tgl_daftar' => $row[0]['tgl_daftar'],
            'masa_apotek' => $row[0]['masa_apotek'],
            'alamat' => $row[0]['alamat'],
            'apa' => $row[0]['apa'],
            'telp_apa' => $row[0]['telp_apa'],
            'psa' => $row[0]['psa'],
            'telp_psa' => $row[0]['telp_psa'],
            'sipa' => $row[0]['sipa'],
            'masa_sipa' => $row[0]['masa_sipa'],
            'apoteker_pendamping' => $row[0]['apoteker_pendamping'],
            'keterangan' => $row[0]['keterangan'],
            'status' => $row[0]['status'],
        );

        $this->load->view('template/sidebar_ia');
        $this->load->view('template/header_ia');
        $this->load->view('apotek/edit_apotek', $data);
        $this->load->view('template/footer_ia');
    }
    public function update_apotek()
    {

        $data = array(
            'id_apotek' => $this->input->post('id_apotek'),
            'nm_apotek' => $this->input->post('nm_apotek'),
            'sia' => $this->input->post('sia'),
            'nib' => $this->input->post('nib'),
            'tgl_daftar' => $this->input->post('tgl_daftar'),
            'masa_apotek' => $this->input->post('masa_apotek'),
            'alamat' => $this->input->post('alamat'),
            'apa' => $this->input->post('apa'),
            'telp_apa' => $this->input->post('telp_apa'),
            'psa' => $this->input->post('psa'),
            'telp_psa' => $this->input->post('telp_psa'),
            'sipa' => $this->input->post('sipa'),
            'masa_sipa' => $this->input->post('masa_sipa'),
            'apoteker_pendamping' => $this->input->post('apoteker_pendamping'),
            'keterangan' => $this->input->post('keterangan'),
            'status' => $this->input->post('status'),
        );

        $res = $this->M_apotek->update_apotek($data);
        if ($res = 1) {
            header('location:' . base_url() . 'ia/apotek');
            $this->session->set_flashdata('success', 'Data Berhasil di Update');
        }
    }
    public function hapus_apotek($kode = 0)
    {
        $result = $this->M_apotek->hapus('apotek', array('id_apotek' => $kode));
        if ($result == 1) {
            header('location:' . base_url() . 'ia/apotek');
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus');
        }
    }
}
