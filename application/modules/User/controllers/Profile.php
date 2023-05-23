<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        // is_logged_in();
    }

    public function index()
    {
        $data = array(
            'user'    => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'content' => 'User/profile/profile'
        );
        // echo json_encode($data);
        $this->load->view('template_user/template_user', $data);
    }

    public function edit()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data = array(
                'user'    => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
                'content' => 'User/profile/edit_profile'
            );
            $this->load->view('template_user/template_user', $data);
        } else {
            $username = $this->input->post('username');

            $data = array(
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'telepon' => $this->input->post('telepon'),
                'alamat' => $this->input->post('alamat'),
            );
            $this->db->set($data);
            $this->db->where('username', $username);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			  Profile Anda Berhasil Update! </div>');
            redirect('User/profile');
        }
    }
}
