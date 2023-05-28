<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_aturan extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getAll()
    {
        return $this->db->get('skor_gejala');
    }

    function getDataAturan()
    {
        $this->db->select('*');
        $this->db->from('skor_gejala');
        $query = $this->db->get();
    }

    function insert($data)
    {
        $this->db->insert('gejala', $data);
    }

    public function edit($data, $id)
    {
        $this->db->where('idskor_gejala', $id);
        $this->db->update('skor_gejala', $data);
    }

    public function detailEdit($id)
    {
        $this->db->where('idskor_gejala', $id);
        $query = $this->db->get('skor_gejala');
        return $query->row();
    }

    public function delete($id)
    {
        $this->db->where('idskor_gejala', $id);
        $this->db->delete('skor_gejala');
    }

    public function jumlah_gejala()
    {
        $this->db->select('*');
        $this->db->from('skor_gejala');
        return $this->db->get()->num_rows();
    }

    public function get_by_gejala()
    {
        $this->db->select('gejala.id_gejala,gejala.nama_gejala');
        $this->db->join('gejala', 'skor_gejala.idskor_gejala = gejala.id_gejala');
        $this->db->from('skor_gejala');
        $query = $this->db->get();
        return $query->result();
    }

    public function list_gejala()
    {
        return $this->db->get("gejala");
    }

    public function list_penyakit()
    {
        return $this->db->get("penyakit");
    }

    public function get_Skor($idgejala, $idpenyakit)
    {
        $this->db->where("gejala_idgejala", "$idgejala");
        $this->db->where("penyakit_idpenyakit", "$idpenyakit");
        return $this->db->get("skor_gejala")->row_array()['skor'];
    }
}
