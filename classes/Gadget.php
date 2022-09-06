<?php
require_once __DIR__ . "/Product.php";
class Gadget extends Product{
    protected $dimensions;
    protected $materials;

    public function __construct($_name,$_description, $_price, $_target, $_dimensions, $_materials){
        parent::__construct($_name, $_description, $_price, $_target);
        $this->dimensions = $_dimensions;
        $this->materials = $_materials;
    }

    public function getDimensions(){
        return $this->dimensions;
    }
    public function getMaterials(){
        return $this->materials;
    }
}