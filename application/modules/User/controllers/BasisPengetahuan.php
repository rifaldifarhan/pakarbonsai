<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BasisPengetahuan extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    // if ($this->session->userdata('status') != "login") {
    //   redirect(base_url("Auth/Login"));
    // }
  }

  public function index()
  {
    $data = array(
      'content' => 'User/basis_pengetahuan.php'
    );
    $this->load->view('template_user/template_user', $data);
  }
}
