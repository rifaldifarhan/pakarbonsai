<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_riwayat extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function jumlah_riwayat_konsultasi()
    {
        $this->db->select('*');
        $this->db->from('riwayat_konsultasi');
        return $this->db->get()->num_rows();
    }

    public function getAll() 
    {
        return $this->db->get('riwayat_konsultasi');
    }

    public function delete($id)
    {
        $this->db->where('id_riwayat', $id);
        $this->db->delete('riwayat_konsultasi');
    }
}
