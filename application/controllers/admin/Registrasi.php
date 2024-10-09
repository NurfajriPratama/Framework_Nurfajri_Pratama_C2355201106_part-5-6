<?php

class Registrasi extends CI_Controller
{
  public function index()
  {
    $data['judul'] = 'Halaman Registrasi';
    $this->load->view('admin/templates/admin_header', $data); // Load login_view.php
    $this->load->view('admin/registrasi', $data); // Load login_view.php
    $this->load->view('admin/templates/admin_footer'); // Load login_view.php
  }

}

?>