<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfoPakar extends CI_Controller {

  public function index()
  {
    $data = array(
      'content' => 'User/info_pakar.php'
    );
    $this->load->view('template_user/template_user', $data);
  }
}
