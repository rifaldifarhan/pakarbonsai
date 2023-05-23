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
}
