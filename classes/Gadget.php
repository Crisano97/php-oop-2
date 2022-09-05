<?php
require_once __DIR__ . "/Product.php";
class Gadget extends Product{
    protected $type;
    protected $material;
    protected $petSize;

    public function __construct($_name,$_description, $_price, $_type, $_material, $_petSize){
        parent::__construct($_name, $_description, $_price);
        $this->type = $_type;
        $this->material = $_material;
        $this->petSize = $_petSize;

    }
}