<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_cetak extends CI_Model
{
    public function get_penyakit_by_id($id)
    {
        return $this->db->get_where('penyakit', array('id' => $id))->row();
    }
}
