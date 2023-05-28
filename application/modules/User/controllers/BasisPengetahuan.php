<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BasisPengetahuan extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->load->model("M_basispengetahuan");

    if (!isset($_SESSION['username'])) {
      redirect(base_url('Auth/Login'));
    }
  }

  public function index()
  {
    $data = array(
      'list_pengetahuan' => $this->M_basispengetahuan->getAll()->result(),
      'content' => 'User/basis_pengetahuan.php'
    );
    // echo json_encode($data);
    $this->load->view('template_user/template_user', $data);
  }
}
