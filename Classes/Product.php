<?php

abstract class Product
{

    public $name;
    public $sku;
    public $price;
    public $productType;


    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->sku = $data['sku'];
        $this->price = $data['price'];
        $this->productType = $data['productType'];
    }

    abstract function addProduct();
}
