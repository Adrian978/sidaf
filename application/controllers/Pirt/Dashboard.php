<?php

class Dashboard extends CI_Controller
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
        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('dashboard/dashboard', $data);
        $this->load->view('template/footer');
        // echo $this->session->userdata('authenticated');
    }
}
