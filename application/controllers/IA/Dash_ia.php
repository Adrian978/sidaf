<?php

class Dash_ia extends CI_Controller
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
        $this->load->view('template/sidebar_ia');
        $this->load->view('template/header_ia');
        $this->load->view('dash_ia/dash_ia', $data);
        $this->load->view('template/footer_ia');
        // echo $this->session->userdata('authenticated');
    }
}
