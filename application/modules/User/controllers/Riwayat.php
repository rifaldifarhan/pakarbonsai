<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("M_riwayat");
    }

    public function index() 
  {
    $data_riwayat = array(
      'list_riwayat' => $this->M_riwayat->getAll()->result(),
      'content'       => 'User/riwayat_konsultasi'
    );
    // echo json_encode($data_riwayat['list_riwayat']);
    $this->load->view('template_user/template_user', $data_riwayat);
  }
  
}
