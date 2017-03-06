<?php

class ProductList
{
    private $products = array();

    public function __construct($conn)
    {
       
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $conn->prepare("SELECT * FROM products"); 
          $stmt->execute();
          while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($this->products, new Product($result));
          } 
    }

  
    public function getProducts(): array
    {
        return $this->products;
    }
}

?>