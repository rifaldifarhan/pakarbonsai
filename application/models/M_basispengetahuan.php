<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_basispengetahuan extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getAll()
    {
        return $this->db->get('basis_pengetahuan');
    }


    function insert($data)
    {
        return $this->db->insert('basis_pengetahuan', $data);
    }

    public function edit($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('basis_pengetahuan', $data);
    }

    public function detailEdit($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('basis_pengetahuan');
        return $query->row();
    }

    public function delete($id)
    {
        $this->db->where('id_gejala', $id);
        $this->db->delete('basis_pengetahuan');
    }
}
