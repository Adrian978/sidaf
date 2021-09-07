<?php

class Auth extends CI_Controller
{

   function __construct()
   {
      parent::__construct();
      $this->load->model('UserModel');
   }

   public function index()
   {
      if ($this->session->userdata('logged_in'))
         redirect('menu');

      $this->load->view('template/auth_header');
      $this->load->view('auth');
      $this->load->view('template/auth_footer');
   }

   public function login()
   {
      $username = $this->input->post('username', TRUE);
      $password = md5($this->input->post('password', TRUE));
      $validate = $this->UserModel->validate($username, $password);

      if ($validate->num_rows() > 0) {
         $data  = $validate->row_array();
         $username  = $data['username'];
         $password = $data['password'];
         $level = $data['level'];
         $sesdata = array(
            'username'  => $username,
            'password'     => $password,
            'level'     => $level,
            'logged_in' => TRUE
         );
         $this->session->set_userdata($sesdata);
         // access login for admin
         if ($level === 'admin') {
            redirect('admin/dash_admin');

            // access login for operator
         } elseif ($level === 'operator') {
            redirect('menu');
         }
      } else {
         echo $this->session->set_flashdata('error', 'Username/Password Salah!');
         redirect('auth');
      }
   }

   function logout()
   {
      $this->session->sess_destroy();
      redirect('auth');
   }
}
