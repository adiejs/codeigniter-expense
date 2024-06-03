<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model("Account_model");
		$this->load->helper('form');

		date_default_timezone_set("Asia/Jakarta");
		
    }

	public function index()
	{
		$data['active'] = 'account';
		$data['list'] = $this->Account_model->getAll();

		$this->load->view('template/header', $data);
		$this->load->view('account/index');
		$this->load->view('template/footer');
	}

	public function create()
    {

		$nama_akun = htmlspecialchars($_POST['nama_akun']);
        // $pengguna   = htmlspecialchars($_POST['pengguna']);
        $keterangan   = htmlspecialchars($_POST['keterangan']);
        $bulan       = date("m");
        $tahun       = date("Y");
        $tanggal     = date("Y-m-d h:i:s");

		$data = array(
			'nama_akun' => $nama_akun,
			// 'pengguna' => $pengguna,
			'jumlah' => 0,
			'keterangan' => $keterangan,
			'bulan'       => $bulan,
			'tahun'       => $tahun,
			'tanggal'     => $tanggal,

		);
			$this->Account_model->save($data);
			redirect(base_url('index.php/account'));	
    }
}