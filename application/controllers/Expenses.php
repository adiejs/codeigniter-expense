<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expenses extends CI_Controller {

	private $data_user;
	public function __construct() {
        parent::__construct();
		$this->load->model("Expenses_model");
		$this->load->model("Account_model");
		$this->load->model("Auth_model");
		$this->load->helper('form');
		$this->load->library('session');

		date_default_timezone_set("Asia/Jakarta");

		if(!$this->Auth_model->current_user()){
			redirect('auth');
		} else {
			$this->data_user = $this->Auth_model->current_user();
		}
    }

	public function index()
	{
		$data['active'] 	= 'expense';
		$data['data'] 		= $this->Account_model->getAll();
		$data['list'] 		= $this->Expenses_model->getAll();
		$data['data_user'] 	= $this->data_user;

		$this->load->view('template/header', $data);
		$this->load->view('expenses/index');
		$this->load->view('template/footer');
	}

	public function create()
    {
        $kode_transaksi = "TX".date("Ymd").str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);
		$kode_akun 	= htmlspecialchars($_POST['kode_akun']);
		$nama_akun  = htmlspecialchars($_POST['nama_akun']);
        $jumlah  	= htmlspecialchars($_POST['jumlah']);
        //$pengguna   = htmlspecialchars($_POST['pengguna']);
        $keterangan = htmlspecialchars($_POST['keterangan']);
        $bulan      = date("m");
        $tahun      = date("Y");
        $tanggal    = date("Y-m-d h:i:s");

		$data = array(
			'kode_transaksi' => $kode_transaksi,
			'kode_akun' => $kode_akun,
			'nama_akun' => $nama_akun,
			'jumlah'    => $jumlah,
			//'pengguna' => $pengguna,
			'keterangan'=> $keterangan,
			'bulan'     => $bulan,
			'tahun'     => $tahun,
			'tanggal'   => $tanggal

		);
			$this->Expenses_model->save($data);
			redirect(base_url('index.php/expenses'));	
    }
}