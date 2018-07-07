<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logos extends CI_model {
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }
  public function submit($datas) {
    $data = array(
      'beskrivning' => $datas['beskrivning'],
      'uri' => $datas['uri']
    );
    $this->db->insert('logos', $data);
  }
}
