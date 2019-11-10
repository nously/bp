<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('appointments');
    }

    public function make() {
        $this->load->library('form_validation');

        // rules
        $this->form_validation->set_rules('name', 'Username', 'required|alpha_numeric');
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone no.', 'required');
        $this->form_validation->set_rules('date', 'Appointment date', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required|alpha_numeric');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('msg', 'Sorry, we found something wrong in your appointment form. Please try again.');
            redirect(base_url());
        } else {
            $this->appointments->post();
            $this->session->set_flashdata('msg', 'Thank you! You can relax while we process your appointment.');
            redirect(base_url());
        }
    }
}