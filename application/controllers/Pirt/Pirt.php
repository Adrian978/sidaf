<?php

class Pirt extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pirt');
    }

    public function index()
    {
        $data = array('data_pirt' => $this->M_pirt->ambil_pirt()->result_array(),);

        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('pirt/pirt', $data);
        $this->load->view('template/footer');
    }

    public function tambah_pirt()
    {
        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('pirt/tambah_pirt');
        $this->load->view('template/footer');
    }

    public function simpan_pirt()
    {
        $id_pirt = '';
        $kode = $this->input->post('kode');
        $nik = $this->input->post('nik');
        $produk = $this->input->post('produk');
        $kemasan = $this->input->post('kemasan');
        $merk = $this->input->post('merk');
        $pirt = $this->input->post('pirt');
        $tgl_pirt = $this->input->post('tgl_pirt');
        $masa_pirt = $this->input->post('masa_pirt');
        $irt = $this->input->post('irt');
        $pre_test = $this->input->post('pre_test');
        $post_test = $this->input->post('post_test');

        $data = array(
            'id_pirt' => $id_pirt,
            'kode' => $kode,
            'nik' => $nik,
            'produk' => $produk,
            'kemasan' => $kemasan,
            'merk' => $merk,
            'pirt' => $pirt,
            'tgl_pirt' => $tgl_pirt,
            'masa_pirt' => $masa_pirt,
            'irt' => $irt,
            'pre_test' => $pre_test,
            'post_test' => $post_test
        );

        //simpan data
        $this->M_pirt->simpan('pirt', $data);

        $this->session->set_flashdata('success', 'Data Berhasil di Simpan');
        redirect('pirt/pirt');
    }

    public function edit_pirt($kode = 0)
    {
        $row = $this->M_pirt->edit_pirt("WHERE pirt.`id_pirt` = '$kode'")->result_array();

        $data = array(
            'id_pirt' => $row[0]['id_pirt'],
            'kode' => $row[0]['kode'],
            'nik' => $row[0]['nik'],
            'produk' => $row[0]['produk'],
            'kemasan' => $row[0]['kemasan'],
            'merk' => $row[0]['merk'],
            'pirt' => $row[0]['pirt'],
            'tgl_pirt' => $row[0]['tgl_pirt'],
            'masa_pirt' => $row[0]['masa_pirt'],
            'irt' => $row[0]['irt'],
            'pre_test' => $row[0]['pre_test'],
            'post_test' => $row[0]['post_test']
        );

        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('pirt/edit_pirt', $data);
        $this->load->view('template/footer');
    }

    public function update_pirt()
    {
        $data = array(
            'id_pirt' => $this->input->post('id_pirt'),
            'kode' => $this->input->post('kode'),
            'nik' => $this->input->post('nik'),
            'produk' => $this->input->post('produk'),
            'kemasan' => $this->input->post('kemasan'),
            'merk' => $this->input->post('merk'),
            'pirt' => $this->input->post('pirt'),
            'tgl_pirt' => $this->input->post('tgl_pirt'),
            'masa_pirt' => $this->input->post('masa_pirt'),
            'irt' => $this->input->post('irt'),
            'pre_test' => $this->input->post('pre_test'),
            'post_test' => $this->input->post('post_test')
        );

        $res = $this->M_pirt->update_pirt($data);
        if ($res = 1) {
            header('location:' . base_url() . 'pirt/pirt');
            $this->session->set_flashdata('success', 'Data Berhasil di Update');
        }
    }

    public function hapus_pirt($kode = 0)
    {
        $result = $this->M_pirt->hapus('pirt', array('id_pirt' => $kode));
        if ($result == 1) {
            header('location:' . base_url() . 'pirt/pirt');
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus');
        }
    }
}
