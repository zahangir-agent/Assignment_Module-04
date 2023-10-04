<?php
class Product {
    // TODO: Add properties
    Public int $id;
    public string $name;
    public float $price;
    
    public function __construct($id, $name, $price) {
        // TODO: Initialize properties
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
        
    }


    // TODO: Add getFormattedPrice method

    public function getFormattedPrice(){
  return number_format($this->price,2);

    }


    // TODO: Add showDetails method
    public function showDetails(){
 echo "ID: $this->id " .PHP_EOL;
echo "Name: $this->name".PHP_EOL;
echo "Price:"."$". $this->getFormattedPrice();
    
    }
}


// Test the Product class
$product = new Product(1, "T-shirt", 19.985);
$product->showDetails();