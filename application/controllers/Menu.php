<?php

class Menu extends CI_Controller
{

   function __construct()
   {
      parent::__construct();
      $this->load->model('UserModel');
   }

   public function index()
   {
      $data = $this->UserModel->ambil_data($this->session->userdata['username']);
      $data = array(
         'nama' => $data->nama,
         'level'    => $data->level,
      );
      $this->load->view('template/auth_header');
      $this->load->view('menu/menu', $data);
      $this->load->view('template/auth_footer');
   }

   public function logout()
   {
      $this->session->sess_destroy();
      redirect('auth');
   }
}
