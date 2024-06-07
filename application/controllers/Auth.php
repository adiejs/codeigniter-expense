<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('Auth_model');
		$this->load->helper('form');
		date_default_timezone_set("Asia/Jakarta");
		
    }

	public function index()
	{
		$username	= htmlspecialchars($_POST['username']);
		$password	= htmlspecialchars($_POST['password']);
		
		if(!empty($username) && !empty($password)):
			if ($this->Auth_model->find($username, $password)) {
				redirect('income');
			} else {
				$data['flash_data'] = '<div class="text">Username atau password anda salah.</div>';
			}
		endif; 

		$this->load->view('login/index', $data);
	}

	// public function login() {
	// 	$username	= htmlspecialchars($_POST['username']);
	// 	$password	= htmlspecialchars($_POST['password']);
		
	// 	if ($this->Auth_model->find($username, $password)) {
	// 		redirect('income');
	// 	} else {
	// 		$this->session->set_flashdata('message_error_login', 'Username atau password salah.');
	// 		redirect('auth');
	// 	} 
	// }

	public function logout()
	{
		$this->Auth_model->delete();
		redirect('auth');
	}
}
