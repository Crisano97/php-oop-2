<?php
require_once __DIR__ . "/Product.php";
class Food extends Product{
    protected $dry;
    protected $ingredients;
    protected $expiringDate;

    public function __construct($_name,$_description, $_price,$_target, $_dry, $_ingredients, $_expiringDate){
        parent::__construct($_name, $_description, $_price,$_target);
        $this->dry = $_dry;
        $this->ingredients = $_ingredients;
        $this->expiringDate = $_expiringDate;
    }

    public function isDry(){
        return $this->dry;
    }
    public function getIngredients(){
        return $this->ingredients;
    }
    public function getExpiringDate(){
        return $this->expiringDate;
    }
}

