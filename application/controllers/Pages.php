<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

  public function index() {
    $this->view();
  }
  public function partners() {
    $this->view('partners');
  }
  public function view( $page = 'index', $path = 'main') {
    if (!file_exists(APPPATH.'views/'. $path . '/pages/'.$page.'.php')) {
      show_404();
    }

    $data['title'] = ucfirst($page);

    $this->load->view($path . '/templates/header', $data);
    $this->load->view($path . '/pages/' . $page, $data);
    $this->load->view($path . '/templates/footer', $data);
  }
}