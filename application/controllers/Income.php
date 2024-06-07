<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Income extends CI_Controller {

	private $data_user;

	public function __construct() {
        parent::__construct();
		$this->load->model("Product_model");
		$this->load->model("Income_model");
		$this->load->model("Auth_model");
		$this->load->helper('form');

		date_default_timezone_set("Asia/Jakarta");

		if(!$this->Auth_model->current_user()){
			redirect('auth');
		} else {
			$this->data_user = $this->Auth_model->current_user();
		}
    }

	public function index()
	{
		$data['active'] 	= 'income';
		$data['data']   	= $this->Product_model->getAll();
		$data['list']   	= $this->Income_model->getAll();
		$data['data_user']  = $this->data_user;

		$this->load->view('template/header', $data);
		$this->load->view('income/index');
		$this->load->view('template/footer');
	}

	public function create()
    {
        $kode_transaksi = "TR".date("Ymd").str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);
		$kode_produk = htmlspecialchars($_POST['kode_produk']);
		$nama_produk = htmlspecialchars($_POST['nama_produk']);
        $jumlah  	 = htmlspecialchars($_POST['jumlah']);
        $total  	 = htmlspecialchars($_POST['total']);
        $laba  		 = htmlspecialchars($_POST['laba']);
        $bulan       = date("m");
        $tahun       = date("Y");
        $tanggal     = date("Y-m-d h:i:s");

		$data = array(
			'kode_transaksi' => $kode_transaksi,
			'kode_produk' => $kode_produk,
			'nama_produk' => $nama_produk,
			'terjual'     => $jumlah,
			'total'       => $total,
			'laba'        => $laba,
			'bulan'       => $bulan,
			'tahun'       => $tahun,
			'tanggal'     => $tanggal

		);
			$this->Income_model->save($data);
			redirect(base_url('index.php/income'));	
    }
}