<?php

class Pkpcetak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pkpcetak');
    }

    public function index()
    {
        $data = array('data_pkpcetak' => $this->M_pkpcetak->ambil_pkpcetak()->result_array(),);

        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('pkpcetak/pkpcetak', $data);
        $this->load->view('template/footer');
    }
}
