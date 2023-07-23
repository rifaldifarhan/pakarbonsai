<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		// aturan register
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
			'required' => 'Nama belum terisi!'
		]);
		$this->form_validation->set_rules('username', 'Username', 'required|trim', [
			'required' => 'Username belum terisi!'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'required' => 'Email belum terisi!',
			'is_unique'	=> 'Email ini sudah terpakai!'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
			'required' => 'Alamat belum terisi!'
		]);
		$this->form_validation->set_rules('telepon', 'Telepon', 'required|trim|numeric', [
			'required'	=> 'Telepon belum terisi!',
			'numeric'	=> 'Hanya dapat diisi dengan angka!',
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'required' 		=> 'Password belum terisi!',
			'matches' 		=> 'password tidak sama!',
			'min_length'	=> 'password terlalu pendek!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
			'required' 		=> 'Ulangi Password belum terisi!'
		]);

		// validasi gagal
		if ($this->form_validation->run() == false) {
			$data = array(
				'content' => 'Auth/register.php',
			);
			$this->load->view('template_admin/header.php', $data);
			$this->load->view('Auth/register.php', $data);
		} else {
			// validasi sukses
			// echo 'data berhasil ditambahkan!';
			$data = array(
				'nama'		=> $this->input->post('nama', true),
				'username'	=> $this->input->post('username', true),
				'email' 	=> $this->input->post('email', true),
				'alamat' 	=> $this->input->post('alamat'),
				'telepon' 		=> $this->input->post('telepon'),
				'password'	=> password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id'	=> 2,
				'is_active'	=> 1,
				'date_created' => time()
			);
			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Selamat! Anda sudah berhasil daftar. Silahkan login! </div>');
			redirect('Auth/Login');
		}
	}
}
