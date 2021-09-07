<?php

class Rekap extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rekap');
    }

    public function index()
    {
        $data = array('data_rekap' => $this->M_rekap->ambil_rekap()->result_array(),);

        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('rekap/rekap', $data);
        $this->load->view('template/footer');
    }
}
