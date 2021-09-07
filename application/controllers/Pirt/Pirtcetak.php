<?php

class Pirtcetak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pirtcetak');
    }

    public function index()
    {
        $data = array('data_pirtcetak' => $this->M_pirtcetak->ambil_pirtcetak()->result_array(),);

        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('pirtcetak/pirtcetak', $data);
        $this->load->view('template/footer');
    }
}
