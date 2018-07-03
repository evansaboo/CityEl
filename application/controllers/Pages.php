<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

  public function view($page = 'home') {
    if (!file_exists(APPPATH. 'views/pages/' + $page)) {
      show_404();
    }

    $data['title'] = ucfirst($page);

    $this->load->view('main/templates/header', $data);
    $this->load->view('main/pages/'.$page, $data);
    $this->load->view('main/templates/footer', $data);
  }
}
