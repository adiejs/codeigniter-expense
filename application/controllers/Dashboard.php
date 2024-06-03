<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model("Income_model");
		$this->load->model("Account_model");
		
    }

	public function index()
	{
		$data['active'] = 'dashboard';
		$data['total_income'] = $this->Income_model->get_total_income_this_month();

		$this->load->view('template/header', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('template/footer');
	}
}