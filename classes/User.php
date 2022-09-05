<?php

class User{
    protected $name;
    protected $surname;
    protected $dateOfBirth;
    protected $email;
    protected $address;
    protected $methodOfPayment;
    protected $isRegistered;


    public function __construct($_name, $_surname, $_dateOfBirth, $_email, $_address, $_methodOfPayment, $_isRegistered){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->dateOfBirth = $_dateOfBirth;
        $this->email = $_email;
        $this->address = $_address;
        $this->methodOfPayment = $_methodOfPayment;
        $this->isRegistered = $_isRegistered;
    }
}