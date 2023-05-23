<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LupaPassword extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == false) {
            $data = array(
                'content' => 'Auth/lupa_password.php',
            );
            $this->load->view('template_admin/header.php', $data);
            $this->load->view('Auth/lupa_password.php', $data);
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();

            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' =>  $email,
                    'token' =>  $token,
                    'date_created' =>  time(),
                ];
                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token, 'forgot');
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Cek email untuk reset password! </div>');
                redirect('Auth/LupaPassword');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email Tidak Terdaftar atau Aktif! </div>');
                redirect('Auth/LupaPassword');
            }
        }
    }

    public function send_reset_password_email()
    {
        $email = $this->input->post('email');
        $user = $this->db->get_where('user', array('email' => $email))->row();

        if (!$user) {
            $this->session->set_flashdata('error', 'Email tidak ditemukan.');
            redirect('Auth/LupaPassword');
        }

        $token = bin2hex(random_bytes(20));
        $this->db->insert('user_token', array('email' => $email, 'token' => $token));

        $reset_url = base_url('Auth/LupaPassword/reset_password/' . $token);
        $message = "Silahkan klik link ini untuk mereset password Anda: $reset_url";

        $this->load->library('email');
        $this->email->from('admin@example.com', 'Admin');
        $this->email->to($email);
        $this->email->subject('Reset Password');
        $this->email->message($message);
        $this->email->send();

        $this->session->set_flashdata('success', 'Email reset password telah dikirim.');
        redirect('Auth/Login');
    }

    public function reset_password($token)
    {
        $reset = $this->db->get_where('user_token', array('token' => $token))->row();

        if (!$reset) {
            show_404();
        }

        $this->load->view('Auth/reset_password', array('token' => $token));
    }

    public function proses_reset_password($token)
    {
        $reset = $this->db->get_where('user_token', array('token' => $token))->row();

        if (!$reset) {
            show_404();
        }

        $password = $this->input->post('password');
        $this->db->where('email', $reset->email);
        $this->db->update('user', array('password' => password_hash($password, PASSWORD_DEFAULT)));
        $this->db->insert('user');
    }
}
