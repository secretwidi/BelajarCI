<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "Products";

    public $product_id;
    public $name;
    public $price;
    public $image = "default.jpg";
    public $description;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

}