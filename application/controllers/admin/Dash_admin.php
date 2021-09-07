<?php

class Dash_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ((null == $this->session->userdata('logged_in'))) {
            redirect('auth');
        }
        $this->load->model('UserModel');
    }
    public function index()
    {
        $data = $this->UserModel->ambil_data($this->session->userdata['username']);
        $data = array(
            'nama' => $data->nama,
            'level'    => $data->level,
        );
        $this->load->view('template/sidebar_admin');
        $this->load->view('template/header_admin');
        $this->load->view('dash_admin/dash_admin', $data);
        $this->load->view('template/footer_ia');
        // echo $this->session->userdata('authenticated');
    }
}
