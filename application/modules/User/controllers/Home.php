<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index()
  {
    $data = array(
      'content' => 'User/home.php'
    );
    $this->load->view('template_user/template_user', $data);
  }
}
