<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Income extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('income/index');
		$this->load->view('template/footer');
	}
}