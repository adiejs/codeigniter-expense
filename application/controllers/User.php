<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data['active'] = 'user';

		$this->load->view('template/header', $data);
		$this->load->view('user/index');
		$this->load->view('template/footer');
	}
}