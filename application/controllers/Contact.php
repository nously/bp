<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		parent::__construct();
		$this->load->model('message');
	}

	public function index()
	{
		$this->load->view('contact');
	}

	public function send()
	{
        $this->load->library('form_validation');

        // rules
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('msg', 'Sorry, we found something wrong in your contact message. Please try again.');
            redirect(base_url() . 'contact');
        } else {
            $this->message->post();
            $this->session->set_flashdata('msg', 'Thank you for contacting us! We sure will respond your message as best as we can.');
            redirect(base_url() . 'contact');
        }	
	}
}
