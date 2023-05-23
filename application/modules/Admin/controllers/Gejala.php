<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('M_gejala');
  }

  public function index()
  {
    $data = array(
      'list_gejala' => $this->M_gejala->getAll()->result(),
      'content' => 'Admin/gejala/index.php'
    );
    $this->load->view('template_admin/template_admin', $data);
  }

  public function tambah()
  {
    $data = array(
      'content' => 'Admin/gejala/form_input.php'
    );
    $this->load->view('template_admin/template_admin', $data);
  }

  public function insert()
  {
    $id = $this->input->post('id_gejala');

    $insert = array(
      'id_gejala'   => $id,
      'nama_gejala' => $this->input->post('nama_gejala'),
    );
    // print_r($insert, $id);
    if ($this->M_gejala->insert($insert)) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Menambah Data Gejala! </div>');
      redirect(base_url('Admin/Gejala'));
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Menambah Data Gejala! </div>');
      redirect(base_url('Admin/Gejala/edit'));
    }
  }

  public function edit($id)
  {
    $data = array(
      'record_gejala' => $this->M_gejala->detailEdit($id),
      'content' => 'Admin/gejala/form_edit.php'
    );
    // echo json_encode($data['record_gejala']);
    $this->load->view('template_admin/template_admin', $data);
  }

  public function update()
  {
    $id_gejala = $this->input->post('id_gejala');

    $data = array(
      'nama_gejala' => $this->input->post('nama_gejala')
    );

    $this->db->where('id_gejala', $id_gejala);
    if ($this->db->update('gejala', $data)) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Mengubah Data Gejala! </div>');
      redirect(base_url('Admin/Gejala'));
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Mengubah Data Gejala! </div>');
      redirect(base_url('Admin/Gejala/edit'));
    }
  }

  public function delete($id)
  {
    $this->M_gejala->delete($id);
    if ($this->db->delete('gejala')) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Menghapus Data Gejala! </div>');
      redirect(base_url('Admin/Gejala'));
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Menghapus Data Gejala! </div>');
      redirect(base_url('Admin/Gejala'));
    }
  }
}
