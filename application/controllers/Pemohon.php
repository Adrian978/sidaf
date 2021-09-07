<?php

class Pemohon extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pemohon');
    }

    public function index()
    {
        $data = array('data_pemohon' => $this->M_pemohon->ambil_pemohon()->result_array(),);

        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('pemohon/pemohon', $data);
        $this->load->view('template/footer');
    }

    public function tambah_pemohon()
    {
        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('pemohon/tambah_pemohon');
        $this->load->view('template/footer');
    }

    public function simpan_pemohon()
    {
        $id_pemohon = '';
        $nama = $this->input->post('nama');
        $nik = $this->input->post('nik');
        $telp = $this->input->post('telp');
        $alm_pkp = $this->input->post('alm_pkp');
        $alm_pr = $this->input->post('alm_pr');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $jabatan = $this->input->post('jabatan');

        //upload file
        $config['max_size'] = 2048;
        $config['allowed_types'] = "jpg|jpeg|png";
        $config['remove_spaces'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['upload_path'] = FCPATH . 'gambar';

        $this->load->library('upload');
        $this->upload->initialize($config);

        //ambil data image
        $this->upload->do_upload('berkas');
        $data_image = $this->upload->data('file_name');
        $location = 'gambar/';
        $pict = $location . $data_image;

        $data = array(
            'id_pemohon' => $id_pemohon,
            'nama' => $nama,
            'nik' => $nik,
            'telp' => $telp,
            'alm_pkp' => $alm_pkp,
            'alm_pr' => $alm_pr,
            'jenis_kelamin' => $jenis_kelamin,
            'jabatan' => $jabatan,
            'berkas' => $pict
        );

        //simpan data
        $this->M_pemohon->simpan('pemohon', $data);

        $this->session->set_flashdata('success', 'Data Berhasil di Simpan');
        redirect('pemohon');
    }

    public function edit_pemohon($kode = 0)
    {
        $row = $this->M_pemohon->edit_pemohon("WHERE pemohon.`id_pemohon` = '$kode'")->result_array();

        $data = array(
            'id_pemohon' => $row[0]['id_pemohon'],
            'nama' => $row[0]['nama'],
            'nik' => $row[0]['nik'],
            'telp' => $row[0]['telp'],
            'alm_pkp' => $row[0]['alm_pkp'],
            'alm_pr' => $row[0]['alm_pr'],
            'jenis_kelamin' => $row[0]['jenis_kelamin'],
            'jabatan' => $row[0]['jabatan'],
            'berkas' => $row[0]['berkas']
        );

        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('pemohon/edit_pemohon', $data);
        $this->load->view('template/footer');
    }
    public function update_pemohon()
    {
        //upload file
        $config['max_size'] = 2048;
        $config['allowed_types'] = "jpg|jpeg|png";
        $config['remove_spaces'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['upload_path'] = FCPATH . 'gambar';

        $this->load->library('upload');
        $this->upload->initialize($config);

        //ambil data image
        $this->upload->do_upload('berkas');
        $data_image = $this->upload->data('file_name');
        $location = 'gambar/';
        $pict = $location . $data_image;

        $data = array(
            'id_pemohon' => $this->input->post('id_pemohon'),
            'nama' => $this->input->post('nama'),
            'nik' => $this->input->post('nik'),
            'telp' => $this->input->post('telp'),
            'alm_pkp' => $this->input->post('alm_pkp'),
            'alm_pr' => $this->input->post('alm_pr'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'jabatan' => $this->input->post('jabatan'),
            'berkas' => $pict
        );

        $res = $this->M_pemohon->update_pemohon($data);
        if ($res = 1) {
            header('location:' . base_url() . 'pemohon');
            $this->session->set_flashdata('success', 'Data Berhasil di Update');
        }
    }
    public function hapus_pemohon($kode = 0)
    {
        $result = $this->M_pemohon->hapus('pemohon', array('id_pemohon' => $kode));
        if ($result == 1) {
            header('location:' . base_url() . 'pemohon');
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus');
        }
    }
}
