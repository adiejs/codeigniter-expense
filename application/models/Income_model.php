<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Income_model extends CI_Model
{
    private $_table = "income";

    public function getAll()
    {
        $query = $this->db->query('CALL ListDataTransaksi()');
        return $query->result();
    }

    public function save($data)
    {

        return $this->db->insert($this->_table, $data);
    }

    public function get_total_income_all() {
        $this->db->select_sum('total');
        $query = $this->db->get('income');
        return $query->row()->total;
    }

    public function get_total_income_this_month() {
        $this->db->select_sum('total');
        $this->db->where('bulan', date('m'));
        $this->db->where('tahun', date('Y'));
        $query = $this->db->get('income');
        return $query->row()->total;
    }

    public function get_total_profit_this_month() {
        $this->db->select_sum('laba');
        $this->db->where('bulan', date('m'));
        $this->db->where('tahun', date('Y'));
        $query = $this->db->get('income');
        return $query->row()->laba;
    }
}