<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aturan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("M_aturan");
    }

    public function index()
    {
        $data = array(
            "penyakit"      => $this->M_aturan->list_penyakit()->result(),
            "gejala"        => $this->M_aturan->list_gejala()->result(),
            'content'       => 'Admin/aturan/index',
        );
        $this->load->view('template_admin/template_admin', $data);
    }

    public function tambah()
    {
        $data = array(
            'content' => 'Admin/aturan/form_input.php'
        );
        $this->load->view('template_admin/template_admin', $data);
    }

    public function insert()
    {
        $id = $this->input->post('idskor_gejala');

        $insert = array(
            'id_gejala'  => $this->input->post('gejala_idgejala'),
            'id_penyakit'  => $this->input->post('penyakit_idpenyakit'),
            'bobot' => $this->input->post('skor'),
        );
        // print_r($insert, $id);
        $this->M_aturan->insert($insert, $id);
        redirect(base_url('Admin/Aturan'));
    }

    public function edit($id)
    {
        $data = array(
            'record_aturan'     => $this->M_aturan->detailEdit($id),
            'list_penyakit'     => $this->M_aturan->list_penyakit()->result(),
            'idgejala'          => $id,
            'content' => 'Admin/aturan/form_edit.php'
        );
        // echo json_encode($data['record_gejala']);
        $this->load->view('template_admin/template_admin', $data);
    }

    public function update()
    {
        $penyakit = $this->M_aturan->list_penyakit()->result();
        $idgejala = $this->input->post('idgejala');
        $status = "1";
        foreach ($penyakit as $value) {
            $this->db->where('gejala_idgejala', $idgejala);
            $this->db->where('penyakit_idpenyakit', $value->id_penyakit);
            if ($this->db->get("skor_gejala")->num_rows() > 0) {
                $data = array(
                    'skor' => $this->input->post('skor_' . $value->id_penyakit),
                );
                $this->db->where('gejala_idgejala', $idgejala);
                $this->db->where('penyakit_idpenyakit', $value->id_penyakit);
                if (!$this->db->update('skor_gejala', $data)) {
                    $status = "0";
                    break;
                }
            } else {
                $insert = array(
                    'gejala_idgejala'  => $idgejala,
                    'penyakit_idpenyakit'  => $value->id_penyakit,
                    'skor' => $this->input->post('skor_' . $value->id_penyakit),
                );
                $this->db->insert('skor_gejala', $insert);
            }
        }
        if ($status == "1") {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Mengubah Aturan! </div>');
            redirect(base_url('Admin/Aturan'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Mengubah Data Aturan! </div>');
            redirect(base_url('Admin/Aturan/edit'));
        }
    }

    public function delete($id)
    {
        $this->db->where('idskor_gejala', $id);
        if ($this->db->delete('skor_gejala')) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Menghapus Data Aturan! </div>');
            redirect(base_url('Admin/Aturan'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Menghapus Data Aturan! </div>');
            redirect(base_url('Admin/Aturan'));
        }
    }
}
