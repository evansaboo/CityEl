<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function do_upload()
        {
              $config['upload_path']          = './images/';
              $config['allowed_types']        = 'gif|jpg|png';
              $config['max_size']             = 2000;
              $config['max_width']            = 1920;
              $config['max_height']           = 1080;

              $this->load->library('upload', $config);

              if ( ! $this->upload->do_upload('userfile'))
              {
                      $error = array('error' => $this->upload->display_errors());

                      $this->load->view('admin/pages/upload', $error);
              }
              else
              {
                      $data = array('upload_data' => $this->upload->data());

                      $this->load->view('admin/pages/upload_success', $data);
              }
        }

        public function remove_img($img)
        {
          if (!file_exists('images/' . $img))
          {
            show_error('The image you are trying to remove does not exist/is already removed');
          }

          $success = unlink('images/' . $img);

          $response = '';
          if ($success)
          {
              $response = 'image \'' . $img . '\' deleted';
          }
          else
          {
              $response = 'failted to delete image \'' . $img . '\'';
          }
          $this->session->set_flashdata('response', $response);
          redirect($_SERVER['HTTP_REFERER']);
        }
}
?>
