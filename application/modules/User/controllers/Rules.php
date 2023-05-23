<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rules extends CI_Controller {

  public function index()
  {
    $data = array(
      'content' => 'User/rules.php'
    );
    $this->load->view('template_user/template_user', $data);
  }
}
