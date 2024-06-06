<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Chart_model'); // Load model Sales_model
    }

    public function index() {
        $data['title'] = 'Total Penjualan per Bulan dan Tahun';
        $data['sales_data'] = $this->Chart_model->get_income_total_this_month(); // Panggil fungsi untuk mendapatkan data total penjualan
       var_dump($data['sales_data']);
    }
}