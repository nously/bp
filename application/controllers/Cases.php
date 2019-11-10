<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cases extends CI_Controller {

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
		$this->load->model('mcases');
	}

	public function index()
	{
		$this->load->view('cases');
	}

	public function business()
	{
		$data['cases'] = $this->mcases->getBusinessCase();
		$this->load->view('case_business', $data);
	}

	public function education()
	{
		$data['cases'] = $this->mcases->getEducationCase();
		$this->load->view('case_education', $data);
	}

	public function family()
	{
		$data['cases'] = $this->mcases->getFamilyCase();
		$this->load->view('case_family', $data);
	}

	public function finance()
	{
		$data['cases'] = $this->mcases->getFinanceCase();
		$this->load->view('case_finance', $data);
	}
}
