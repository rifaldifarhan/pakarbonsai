<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_login');
    $this->load->library('form_validation');
  }

  public function index()
  {
    // aturan login
    $this->form_validation->set_rules('username', 'Username', 'required|trim', [
      'required' => 'Username belum terisi!'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'required|trim', [
      'required' => 'Password belum terisi!'
    ]);

    // validasi gagal
    if ($this->form_validation->run() == false) {
      $this->load->view('template_admin/header.php');
      $this->load->view('Auth/login.php');
    } else {
      // validasi sukses
      $this->_proses_login();
    }
  }

  private function _proses_login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $user = $this->db->get_where('user', ['username'  => $username])->row_array();

    // usernya ada
    if ($user) {
      // jika usernya aktif
      if ($user['is_active'] == 1) {
        // cek password
        if (password_verify($password, $user['password'])) {
          $data = array(
            'username'  => $user['username'],
            'role_id'   => $user['role_id']
          );
          $this->session->set_userdata($data);
          if ($user['role_id'] == 1) {
            redirect('Admin/Dashboard');
          } else {
            redirect('User/Home');
          }
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			    Password salah! </div>');
          redirect('Auth/Login');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			  Akun belum aktif! </div>');
        redirect('Auth/Login');
      }
    } else {
      // #usernya tidak ada
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Akun tidak ada! </div>');
      redirect('Auth/Login');
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Anda berhasil logout! </div>');
    redirect(base_url('Auth/Login'));
  }
}
