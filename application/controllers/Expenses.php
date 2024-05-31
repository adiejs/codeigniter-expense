<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expenses extends CI_Controller {

	public function index()
	{
		$this->load->view('expenses/index');
	}
}