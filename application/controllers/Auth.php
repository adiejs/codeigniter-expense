<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
        parent::__construct();
		//$this->load->model("Auth_model");
		$this->load->helper('form');

		date_default_timezone_set("Asia/Jakarta");
		
    }

	public function index()
	{
		//$data['active'] = 'account';
		//$data['list'] = $this->Auth_model->getAll();
		$this->load->view('login/index');

	}
}