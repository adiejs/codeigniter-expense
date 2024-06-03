<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Expenses_model extends CI_Model
{
    private $_table = "expense";

    public function getAll()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get($this->_table);
        return $query->result();
    }

    public function save($data)
    {

        return $this->db->insert($this->_table, $data);
    }
}