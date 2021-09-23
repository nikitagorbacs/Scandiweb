<?php

class Furniture extends Product
{
    public $height;
    public $width;
    public $length;
    private $db;

    public function __construct($data)
    {
        $this->db = new Database;
        Parent::__construct($data);
        $this->height = $data['height'];
        $this->width = $data['width'];
        $this->length = $data['length'];
    }

    public function addProduct()
    {
        $this->db->query("INSERT INTO products (sku, name, price, productType, specification) 
        VALUES ('" . $this->sku . "',
             '" . $this->name . "',
             '" . $this->price . "',
             '" . $this->productType . "',
             'Dimension: " . $this->height . "x" . $this->width . "x" . $this->length . "')");

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
