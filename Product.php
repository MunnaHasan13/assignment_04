<?php

class Product {

    private $id;
    private $name;
    private $price;

    public function __construct($id,$name,$price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice()
    {
        return number_format($this->price,2);
    }

    public function showDetails()
    {
        echo "ID: $this->id <br>";
        echo "NAME: $this->name <br>";
        echo "PRICE: $". $this->getFormattedPrice();
    }
}

$product = new Product(1,'T-Shirt',19.99);
$product -> showDetails();
