<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expenses extends CI_Controller {

	public function index()
	{
		$data['active'] = 'expense';

		$this->load->view('template/header', $data);
		$this->load->view('expenses/index');
		$this->load->view('template/footer');
	}
}