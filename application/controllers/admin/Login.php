<?php

class Login extends CI_Controller
{
  public function index()
  {
    $data['judul'] = 'Halaman Login';
    $this->load->view('admin/templates/admin_header', $data); // Load login_view.php
    $this->load->view('admin/login', $data); // Load login_view.php
    $this->load->view('admin/templates/admin_footer'); // Load login_view.php
  }

}

?>