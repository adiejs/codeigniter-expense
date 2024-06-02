<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {


	public function __construct() {
        parent::__construct();
		$this->load->model("Product_model");
		$this->load->helper('form');

		date_default_timezone_set("Asia/Jakarta");
		
    }

	public function index()
	{
		$data['active'] = 'product';
		$data['data'] = $this->Product_model->getAll();

		$this->load->view('template/header', $data);
		$this->load->view('product/index');
		$this->load->view('template/footer');
	}

	public function getdata()
	{
		$data = $this->Product_model->getAll();

		foreach ($data as $d) {
			$fetch[] = array(
				'label' => $d->nama_produk,
				'value' => $d->nama_produk,
				'kode_produk' => $d->kode_produk
			);
		}
		$this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($fetch));
	}

	public function create()
    {
        $nama_produk = htmlspecialchars($_POST['nama_produk']);
        $harga_modal = htmlspecialchars($_POST['harga_modal']);
        $harga_jual  = htmlspecialchars($_POST['harga_jual']);
        $tanggal     = date("Y-m-d h:i:s");
		
		$rand     = rand();
		$ekstensi = array('png','jpg','jpeg','gif');
		$filename = $_FILES['gambar']['name'];
		$ukuran   = $_FILES['gambar']['size'];
		$ext      = pathinfo($filename, PATHINFO_EXTENSION);

		if(!in_array($ext,$ekstensi) ) {
			$message = "File harus berupa gambar JPG atau PNG.";
		}else{
			if($ukuran < 1044070){ 
			$xx = strtr($nama_produk, " ", "-") . '-' . $rand . '-' . strtr($filename, " ", "-");
			move_uploaded_file($_FILES['gambar']['tmp_name'], 'assets/img/product/'. $xx );

			$data = array(
				'nama_produk' => $nama_produk,
				'harga_modal' => $harga_modal,
				'harga_jual'  => $harga_jual,
				'tanggal'     => $tanggal,
				'gambar'      => $xx
	
			);

			$this->Product_model->save($data);
			redirect(base_url('index.php/product'));
			
			
			}else{
			$message = "Ukuran File terlalu besar.";
			}
		} 
    }
}