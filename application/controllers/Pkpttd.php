<?php

class Pkpttd extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pkpttd');
    }

    public function index()
    {
        $data = array('data_pkpttd' => $this->M_pkpttd->ambil_pkpttd()->result_array(),);

        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('pkpttd/pkpttd', $data);
        $this->load->view('template/footer');
    }
}
