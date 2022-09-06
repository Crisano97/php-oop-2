<?php
require_once __DIR__ . "/Product.php";
class Toy extends Product{
    protected $materials;
    protected $color;

    public function __construct($_name,$_description, $_price, $_target, $_materials, $_color){
        parent::__construct($_name, $_description, $_price, $_target);
        $this->materials = $_materials;
        $this->color = $_color;

    }

    public function getMatetials(){
        return $this->materials;
    }
    public function getColors(){
        return $this->colors;
    }
    
}