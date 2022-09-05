<?php
require_once __DIR__ . "/Product.php";
class Toy extends Product{
    protected $material;
    protected $type;

    public function __construct($_name,$_description, $_price, $_material, $_type){
        parent::__construct($_name, $_description, $_price);
        $this->material = $_material;
        $this->type = $_type;
    }
}