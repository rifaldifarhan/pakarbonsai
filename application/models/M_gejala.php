<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_gejala extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getAll()
    {
        return $this->db->get('gejala');
    }

    function getDataGejala()
    {
        $this->db->select('*');
        $this->db->from('gejala');
        $query = $this->db->get();
    }

    public function get_by_id($id)
    {
        $query = $this->db->get_where('gejala', array('id_gejala' => $id));
        return $query->row();
    }

    function insert($data)
    {
        return $this->db->insert('gejala', $data);
    }

    public function edit($data, $id)
    {
        $this->db->where('id_gejala', $id);
        $this->db->update('gejala', $data);
    }

    public function detailEdit($id)
    {
        $this->db->where('id_gejala', $id);
        $query = $this->db->get('gejala');
        return $query->row();
    }

    public function delete($id)
    {
        $this->db->where('id_gejala', $id);
        $this->db->delete('gejala');
    }

    public function jumlah_gejala()
    {
        $this->db->select('*');
        $this->db->from('gejala');
        return $this->db->get()->num_rows();
    }
}
