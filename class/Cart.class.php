<?php

class Cart
{
    private $products;
    private $units;
    public function __construct($conn, $products, $units)
    {
        $this->products = $products;
        $this->units = $units;
    }

    
    public function getProducts()
    {
        return $this->products;
    }

   
    public function getUnits()
    {
        return $this->units;
    }
}


?>