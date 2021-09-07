<?php

class Obat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_obat');
    }

    public function index()
    {
        $data = array('data_obat' => $this->M_obat->ambil_obat()->result_array(),);

        $this->load->view('template/sidebar_ia');
        $this->load->view('template/header_ia');
        $this->load->view('obat/obat', $data);
        $this->load->view('template/footer_ia');
    }

    public function tambah_obat()
    {
        $this->load->view('template/sidebar_ia');
        $this->load->view('template/header_ia');
        $this->load->view('obat/tambah_obat');
        $this->load->view('template/footer_ia');
    }

    public function simpan_obat()
    {
        $id_obat = '';
        $toko_obat = $this->input->post('toko_obat');
        $si = $this->input->post('si');
        $nib = $this->input->post('nib');
        $tgl_daftar = $this->input->post('tgl_daftar');
        $masa_toko = $this->input->post('masa_toko');
        $alamat = $this->input->post('alamat');
        $ap = $this->input->post('ap');
        $telp_ap = $this->input->post('telp_ap');
        $ps = $this->input->post('ps');
        $telp_ps = $this->input->post('telp_ps');
        $keterangan = $this->input->post('keterangan');
        $status = $this->input->post('status');

        $data = array(
            'id_obat' => $id_obat,
            'toko_obat' => $toko_obat,
            'si' => $si,
            'nib' => $nib,
            'tgl_daftar' => $tgl_daftar,
            'masa_toko' => $masa_toko,
            'alamat' => $alamat,
            'ap' => $ap,
            'telp_ap' => $telp_ap,
            'ps' => $ps,
            'telp_ps' => $telp_ps,
            'keterangan' => $keterangan,
            'status' => $status,
        );

        //simpan data
        $this->M_obat->simpan('obat', $data);

        $this->session->set_flashdata('success', 'Data Berhasil di Simpan');
        redirect('ia/obat');
    }

    public function edit_obat($kode = 0)
    {
        $row = $this->M_obat->edit_obat("WHERE obat.`id_obat` = '$kode'")->result_array();

        $data = array(
            'id_obat' => $row[0]['id_obat'],
            'toko_obat' => $row[0]['toko_obat'],
            'si' => $row[0]['si'],
            'nib' => $row[0]['nib'],
            'tgl_daftar' => $row[0]['tgl_daftar'],
            'masa_toko' => $row[0]['masa_toko'],
            'alamat' => $row[0]['alamat'],
            'ap' => $row[0]['ap'],
            'telp_ap' => $row[0]['telp_ap'],
            'ps' => $row[0]['ps'],
            'telp_ps' => $row[0]['telp_ps'],
            'keterangan' => $row[0]['keterangan'],
            'status' => $row[0]['status'],
        );

        $this->load->view('template/sidebar_ia');
        $this->load->view('template/header_ia');
        $this->load->view('obat/edit_obat', $data);
        $this->load->view('template/footer_ia');
    }
    public function update_obat()
    {

        $data = array(
            'id_obat' => $this->input->post('id_obat'),
            'toko_obat' => $this->input->post('toko_obat'),
            'si' => $this->input->post('si'),
            'nib' => $this->input->post('nib'),
            'tgl_daftar' => $this->input->post('tgl_daftar'),
            'masa_toko' => $this->input->post('masa_toko'),
            'alamat' => $this->input->post('alamat'),
            'ap' => $this->input->post('ap'),
            'telp_ap' => $this->input->post('telp_ap'),
            'ps' => $this->input->post('ps'),
            'telp_ps' => $this->input->post('telp_ps'),
            'keterangan' => $this->input->post('keterangan'),
            'status' => $this->input->post('status'),
        );

        $res = $this->M_obat->update_obat($data);
        if ($res = 1) {
            header('location:' . base_url() . 'ia/obat');
            $this->session->set_flashdata('success', 'Data Berhasil di Update');
        }
    }
    public function hapus_obat($kode = 0)
    {
        $result = $this->M_obat->hapus('obat', array('id_obat' => $kode));
        if ($result == 1) {
            header('location:' . base_url() . 'ia/obat');
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus');
        }
    }
}
