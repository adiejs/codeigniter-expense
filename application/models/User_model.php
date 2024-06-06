<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";

    public function getAll()
    {
        //$this->db->order_by('create_at', 'DESC');
        $query = $this->db->get($this->_table);
        return $query->result();
    }

    public function save($data)
    {
        return $this->db->insert($this->_table, $data);
    }
}