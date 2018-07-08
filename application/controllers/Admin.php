<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('ion_auth');
    }

    /**
     * Redirect if needed, otherwise display the user list
     */
    public function index() {
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('admin/login', 'refresh');
        } else {
            $this->load->view('admin/dashboard');
        }
    }

    /**
     * Log the user in
     */
    public function login() {
        $this->load->view("admin/login");

        $form_data = $this->input->post();
        if ($form_data) {
            $username = $form_data['username'];
            $password = $form_data['password'];

            if ($this->ion_auth->login($username, $password, false)) {
                //if the login is successful
                //redirect them back to the home page
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                $this->session->set_flashdata('message', 'login successful');
                redirect('admin', 'refresh');
            } else {
                // if the login was un-successful
                // redirect them back to the login page
                $this->session->set_flashdata('message', 'Incorrect username or password');
                redirect('admin/login', 'refresh'); // use redirects instead of loading views for compatibility with MY_Controller libraries
            }
        }
    }

    /**
     * Log the user out
     */
    public function logout() {

        $this->ion_auth->logout();

        // redirect them to the login page
        redirect('admin/login', 'refresh');
    }

}
