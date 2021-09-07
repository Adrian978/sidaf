<?php

class Pirtttd extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pirtttd');
    }

    public function index()
    {
        $data = array('data_pirtttd' => $this->M_pirtttd->ambil_pirtttd()->result_array(),);

        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('pirtttd/pirtttd', $data);
        $this->load->view('template/footer');
    }
}
