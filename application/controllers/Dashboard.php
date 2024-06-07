<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	private $data_user;
	public function __construct() {
        parent::__construct();
		$this->load->model("Income_model");
		$this->load->model("Expenses_model");
		$this->load->model("Account_model");
		$this->load->model("Auth_model");
		$this->load->library('session');

		if(!$this->Auth_model->current_user()){
			redirect('auth');
		} else {
			$this->data_user = $this->Auth_model->current_user();
		}
		
    }

	public function index()
	{
		$data['active'] 			= 'dashboard';
		$data['total_income'] 		= $this->Income_model->get_total_income_this_month();
		$data['total_income_all'] 	= $this->Income_model->get_total_income_all();
		$data['total_profit'] 		= $this->Income_model->get_total_profit_this_month();
		$data['total_expense'] 		= $this->Expenses_model->get_total_expense_this_month();
		$data['data_user'] 			= $this->data_user;

		$this->load->view('template/header', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('template/footer');
	}
}