<?php
class Product{
    protected $name;
    protected $description;
    protected $price;
    protected $target;

    public function __construct($_name,$_description,$_price, $_target){
        $this->setName($_name);
        $this->setDescription(($_description));
        $this->setPrice($_price);
        $this->setTarget($_target);
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
    public function getTarget(){
        return $this->target;
    }
    public function setTarget($_target){
        $this->target = $_target;
    }
    public function setName($_name){
        $this->name = $_name;
    }
    public function setDescription($_description){
        $this->description = $_description;
    }
    public function setPrice($_price){
        $this->price = $_price;
    }
}