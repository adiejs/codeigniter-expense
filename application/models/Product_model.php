<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "product";

    public function rules()
    {
        return [
            ['field' => 'nama_produk',
            'label' => 'Nama Produk',
            'rules' => 'required'],

            ['field' => 'harga_modal',
            'label' => 'Harga Modal',
            'rules' => 'required|numeric'],
            
            ['field' => 'harga_jual',
            'label' => 'Harga Jual',
            'rules' => 'required|numeric']
        ];
    }

    public function getAll()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get($this->_table);
        return $query->result();
    }
    
    public function getById($id)
    {
        // return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }

    public function save($data)
    {

        return $this->db->insert($this->_table, $data);
    }

    public function update()
    {
        // $post = $this->input->post();
        // $this->product_id = $post["id"];
        // $this->name = $post["name"];
        // $this->price = $post["price"];
        // $this->description = $post["description"];
        // return $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    public function delete($id)
    {
        // return $this->db->delete($this->_table, array("product_id" => $id));
    }
}