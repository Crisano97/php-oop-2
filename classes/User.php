<?php

include_once __DIR__ . "/Card.php";

class User{
    protected $name;
    protected $surname;
    protected $methodOfPayment;
    protected $isRegistered;


    public function __construct($_name, $_surname, $_methodOfPayment, $_isRegistered){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->methodOfPayment = $_methodOfPayment;
        $this->isRegistered = $_isRegistered;
    }

}
