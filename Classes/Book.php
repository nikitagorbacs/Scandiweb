<?php

class Book extends Product
{
    public $weight;
    private $db;

    public function __construct($data)
    {
        $this->db = new Database;
        Parent::__construct($data);
        $this->weight = $data['weight'];
    }

    public function addProduct()
    {
        $this->db->query("INSERT INTO products (sku, name, price, productType, specification) 
        VALUES ('" . $this->sku . "',
             '" . $this->name . "',
             '" . $this->price . "',
             '" . $this->productType . "',
             'Weight (KG): " . $this->weight . "')");

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
