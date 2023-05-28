<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penyakit extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model("M_penyakit");
  }

  public function index()
  {
    $data = array(
      'list_penyakit' => $this->M_penyakit->getAll()->result(),
      'content' => 'Admin/penyakit/index.php'
    );
    // echo json_encode($data);
    $this->load->view('template_admin/template_admin', $data);
  }

  public function tambah()
  {
    $data = array(
      'content' => 'Admin/penyakit/form_input.php'
    );
    $this->load->view('template_admin/template_admin', $data);
  }

  public function insert()
  {
    $insert = array(
      'id_penyakit'   => $this->input->post('id_penyakit'),
      'nama_penyakit' => $this->input->post('nama_penyakit'),
      'pengendalian'  => $this->input->post('pengendalian')
    );
    // print_r($insert);
    if ($this->M_penyakit->insert($insert)) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Menambah Data Penyakit! </div>');
      redirect(base_url('Admin/Penyakit'));
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Menambah Data Penyakit! </div>');
      redirect(base_url('Admin/Penyakit/edit'));
    }
  }

  public function edit($id)
  {
    $data = array(
      'record_penyakit' => $this->M_penyakit->detailEdit($id),
      'content'         => 'Admin/penyakit/form_edit.php'
    );
    // echo json_encode($data['record_penyakit']);
    $this->load->view('template_admin/template_admin', $data);
  }

  public function update()
  {
    $id_penyakit = $this->input->post('id_penyakit');

    $data = array(
      'nama_penyakit' => $this->input->post('nama_penyakit'),
      'pengendalian'  => $this->input->post('pengendalian')
    );

    $this->db->where('id_penyakit', $id_penyakit);
    if ($this->db->update('penyakit', $data)) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Mengubah Data Penyakit! </div>');
      redirect(base_url('Admin/Penyakit'));
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Mengubah Data Penyakit! </div>');
      redirect(base_url('Admin/Penyakit/edit'));
    }
  }

  public function delete($id)
  {
    $this->db->where('id_penyakit', $id);
    if ($this->db->delete('penyakit')) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Menghapus Data Penyakit! </div>');
      redirect(base_url('Admin/Penyakit'));
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Menghapus Data Penyakit! </div>');
      redirect(base_url('Admin/Penyakit'));
    }
  }
}
