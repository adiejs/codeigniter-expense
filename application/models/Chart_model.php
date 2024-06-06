<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Chart_model extends CI_Model
{
    public function get_income_total_this_month() {

        $query = $this->db->select("tahun, bulan, SUM(total) AS total_sales")
                          ->from("income")
                          ->group_by("tahun, bulan")
                          ->order_by("tahun, bulan")
                          ->get();
        return $query->result_array();
    }
}