<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model("M_gejala");
    $this->load->model("M_penyakit");
    $this->load->model("M_riwayat");
  }

  public function index()
  {
    $data = array(
      'jumlah_riwayat' => $this->M_riwayat->jumlah_riwayat_konsultasi(),
      'jumlah_gejala' => $this->M_gejala->jumlah_gejala(),
      'jumlah_penyakit' => $this->M_penyakit->jumlah_penyakit(),
      'content' => 'Admin/dashboard.php'
    );
    $this->load->view('template_admin/template_admin', $data);
  }
}
