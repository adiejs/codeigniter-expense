<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Income extends CI_Controller {

	public function index()
	{
		$data['active'] = 'income';

		$this->load->view('template/header', $data);
		$this->load->view('income/index');
		$this->load->view('template/footer');
	}
}