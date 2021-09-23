<?php

class Dvd extends Product
{
    public $size;
    private $db;

    public function __construct($data)
    {
        $this->db = new Database;
        Parent::__construct($data);
        $this->size = $data['size'];
    }

    public function addProduct()
    {
        $this->db->query("INSERT INTO products (sku, name, price, productType, specification) 
        VALUES ('" . $this->sku . "',
             '" . $this->name . "',
             '" . $this->price . "',
             '" . $this->productType . "',
             'Size (MB): " . $this->size . "')");

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
