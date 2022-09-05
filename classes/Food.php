<?php
require_once __DIR__ . "/Product.php";
class Food extends Product{
    protected $petType;
    protected $nutritionalValue;

    public function __construct($_name,$_description, $_price, $_petType, $_nutritionalValue){
        parent::__construct($_name, $_description, $_price);
        $this->petType = $_petType;
        $this->nutritionalValue = $_nutritionalValue;
    }
}

