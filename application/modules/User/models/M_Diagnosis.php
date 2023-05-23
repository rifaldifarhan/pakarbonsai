<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Diagnosis extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function getPenyakit()
    {
        return $this->db->get("penyakit");
    }

    public function getSkorPenyakit($idpenyakit)
    {
        $this->db->where("penyakit_idpenyakit", $idpenyakit);
        return $this->db->get("skor_gejala");
    }

    public function getSkorGejala($idgejala, $idpenyakit)
    {
        $this->db->where("gejala_idgejala", $idgejala);
        $this->db->where("penyakit_idpenyakit", $idpenyakit);
        return $this->db->get("skor_gejala");
    }
}
