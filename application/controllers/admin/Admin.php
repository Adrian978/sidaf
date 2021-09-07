<?php

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }

    public function index()
    {
        $data = array('data_admin' => $this->M_admin->ambil_user()->result_array(),);

        $this->load->view('template/sidebar_admin');
        $this->load->view('template/header_admin');
        $this->load->view('admin/admin', $data);
        $this->load->view('template/footer_ia');
    }

    public function tambah_user()
    {
        $this->load->view('template/sidebar_admin');
        $this->load->view('template/header_admin');
        $this->load->view('admin/tambah_user');
        $this->load->view('template/footer_ia');
    }

    public function simpan_user()
    {
        $id = '';
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $level = $this->input->post('level');

        $data = array(
            'id' => $id,
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'level' => $level,
        );

        //simpan data
        $this->M_admin->simpan('user', $data);

        $this->session->set_flashdata('success', 'Data Berhasil di Simpan');
        redirect('admin/admin');
    }

    public function edit_user($kode = 0)
    {
        $row = $this->M_admin->edit_user("WHERE user.`id` = '$kode'")->result_array();

        $data = array(
            'id' => $row[0]['id'],
            'nama' => $row[0]['nama'],
            'username' => $row[0]['username'],
            'password' => $row[0]['password'],
            'level' => $row[0]['level'],
        );

        $this->load->view('template/sidebar_admin');
        $this->load->view('template/header_admin');
        $this->load->view('admin/edit_user', $data);
        $this->load->view('template/footer_ia');
    }
    public function update_user()
    {

        $data = array(
            'id' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'level' => $this->input->post('level'),
        );

        $res = $this->M_admin->update_user($data);
        if ($res = 1) {
            header('location:' . base_url() . 'admin/admin');
            $this->session->set_flashdata('success', 'Data Berhasil di Update');
        }
    }
    public function hapus_user($kode = 0)
    {
        $result = $this->M_admin->hapus('user', array('id' => $kode));
        if ($result == 1) {
            header('location:' . base_url() . 'admin/admin');
            $this->session->set_flashdata('success', 'Data Berhasil di Hapus');
        }
    }
}
