<?php

class Contact extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->model('UserModel');
   }

   public function index()
   {
      $this->load->library('googlemaps');
      $config = array();
      $config['center'] = "-6.9870703, 110.4146236";
      $config['zoom'] = 17;
      $config['map_height'] = "400px";
      $this->googlemaps->initialize($config);
      $marker = array();
      $marker['position'] = "-6.9870703, 110.4146236";
      $this->googlemaps->add_marker($marker);
      $data['map'] = $this->googlemaps->create_map();
      $this->load->view('template/auth_header');
      $this->load->view('menu/contact', $data);
      $this->load->view('template/auth_footer');
   }

   public function logout()
   {
      $this->session->sess_destroy();
      redirect('auth');
   }
}
