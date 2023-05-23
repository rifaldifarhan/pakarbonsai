<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BasisPengetahuan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $list = $this->db->get('basis_pengetahuan')->result();

        $data = array(
            'list'      => $list,
            'content'   => 'Admin/basis_pengetahuan/index',
        );
        $this->load->view('template_admin/template_admin', $data);
    }
}
