<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->
  }

  public function load() {
    $this->view('submitlogo');
  }
  public function submit($uri = '', $beskrivning = '') {
    $this->load->model('logos');
    $data = array(  'uri' => $uri,
            'beskrivning' => $beskrivning);
    $this->logos->submit($data);
    $this->view('logos');
  }
  public function view($page = 'logos') {
    if (!file_exists(APPPATH.'views/admin/pages/'.$page.'.php')) {
      show_404();
    }

    $data['title'] = ucfirst($page);

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/pages/' . $page, $data);
    $this->load->view('admin/templates/footer', $data);
  }
}
