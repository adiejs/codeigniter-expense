<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function __construct() {
        parent::__construct();
		$this->load->model("User_model");
		$this->load->helper('form');

		date_default_timezone_set("Asia/Jakarta");
		
    }

	public function index()
	{
		$data['active'] = 'user';
		$data['data'] = $this->User_model->getAll();

		$this->load->view('template/header', $data);
		$this->load->view('user/index');
		$this->load->view('template/footer');
	}

	public function create()
    {
		$nama_pengguna = htmlspecialchars($_POST['nama_pengguna']);
        $email 		   = htmlspecialchars($_POST['email']);
        $username  	   = htmlspecialchars($_POST['username']);
        $password      = htmlspecialchars($_POST['password']);
        $role          = htmlspecialchars($_POST['role']);
        $create_at     = date("Y-m-d h:i:s");
		
		$rand     = rand();
		$ekstensi = array('png','jpg','jpeg','gif');
		$filename = $_FILES['gambar']['name'];
		$ukuran   = $_FILES['gambar']['size'];
		$ext      = pathinfo($filename, PATHINFO_EXTENSION);

		if(!in_array($ext,$ekstensi) ) {
			$message = "File harus berupa gambar JPG atau PNG.";
		}else{
			if($ukuran < 1044070){ 
			$xx = strtr($nama_pengguna, " ", "-") . '-' . $rand . '-' . strtr($filename, " ", "-");
			move_uploaded_file($_FILES['gambar']['tmp_name'], 'assets/img/profiles/'. $xx );

			$data = array(
				'id' 			=> uniqid('', true),
				'name' 			=> $nama_pengguna,
				'email'  		=> $email,
				'username'     	=> $username,
				'password'      => password_hash($password, PASSWORD_DEFAULT),
				'role'      	=> $role,
				'avatar'      	=> $xx,
	
			);

			$this->User_model->save($data);
			redirect(base_url('index.php/user'));
			
			
			}else{
			$message = "Ukuran File terlalu besar.";
			}
		} 
    }
}