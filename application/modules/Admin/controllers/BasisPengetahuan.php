<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BasisPengetahuan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("M_basispengetahuan");
    }

    public function index()
    {

        $data = array(
            'list_pengetahuan' => $this->M_basispengetahuan->getAll()->result(),
            'content'   => 'Admin/basis_pengetahuan/index',
        );
        $this->load->view('template_admin/template_admin', $data);
    }

    public function tambah()
    {
        $data = array(
            'content' => 'Admin/basis_pengetahuan/form_input.php'
        );
        $this->load->view('template_admin/template_admin', $data);
    }

    public function insert()
    {
        $insert = array(
            // 'id'                => $this->input->post('id'),
            'nama_penyakit'     => $this->input->post('nama_penyakit'),
            'pengertian'        => $this->input->post('pengertian'),
            'penanggulangan'    => $this->input->post('penanggulangan')
        );
        // print_r($insert);
        if ($this->M_basispengetahuan->insert($insert)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Menambah Data! </div>');
            redirect(base_url('Admin/BasisPengetahuan'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Menambah Data! </div>');
            redirect(base_url('Admin/BasisPengetahuan/edit'));
        }
    }

    public function edit($id)
    {
        $data = array(
            'record_pengetahuan' => $this->M_basispengetahuan->detailEdit($id),
            'content' => 'Admin/basis_pengetahuan/form_edit.php'
        );
        // echo json_encode($data['record_gejala']);
        $this->load->view('template_admin/template_admin', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');

        $update = array(
            'nama_penyakit'     => $this->input->post('nama_penyakit'),
            'pengertian'        => $this->input->post('pengertian'),
            'penanggulangan'    => $this->input->post('penanggulangan')
        );

        $this->db->where('id', $id);
        if ($this->db->update('basis_pengetahuan', $update)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Mengubah Data! </div>');
            redirect(base_url('Admin/BasisPengetahuan'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Mengubah Data! </div>');
            redirect(base_url('Admin/BasisPengetahuan/edit'));
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        if ($this->db->delete('basis_pengetahuan')) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Menghapus Data! </div>');
            redirect(base_url('Admin/BasisPengetahuan'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Menghapus Data! </div>');
            redirect(base_url('Admin/BasisPengetahuan'));
        }
    }
}
