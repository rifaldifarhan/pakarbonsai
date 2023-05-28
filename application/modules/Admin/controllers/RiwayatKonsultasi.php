<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RiwayatKonsultasi extends CI_Controller
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
      'content'       => 'Admin/riwayat_konsultasi'
    );
    $this->load->view('template_admin/template_admin', $data_riwayat);
  }

  public function delete($id)
  {
    $this->db->where('id_riwayat', $id);
    if ($this->db->delete('riwayat_konsultasi')) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Menghapus Riwayat! </div>');
      redirect(base_url('Admin/RiwayatKonsultasi'));
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Menghapus Riwayat! </div>');
      redirect(base_url('Admin/RiwayatKonsultasi'));
    }
  }
}
