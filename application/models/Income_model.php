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
}