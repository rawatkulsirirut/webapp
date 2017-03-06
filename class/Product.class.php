<?php

class Product
{
    private $product_code;
    private $product_name;
    private $price;

    public function __construct($param)
    {
        if (is_array($param))
        {
            $this->product_code = $param['product_code'];
            $this->product_name = $param['product_name'];
            $this->price = $param['price'];
        }
    }
    
    public function getProductCode()
    {
        return $this->product_code;
    }

    public function getProductName()
    {
        return $this->product_name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}


?>