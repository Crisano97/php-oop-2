<?php
class Product{
    protected $name;
    protected $description;
    protected $price;

    public function __construct($_name,$_description,$_price){
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
    }

    public function getName(){
        return $this->name;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getPrice(){
        return $this->price;
    }
}