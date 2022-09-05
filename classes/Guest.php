<?php
require_once __DIR__ . "/User.php";
class Guest extends User{
    protected $guestCode;

    public function __construct($_name, $_surname, $_methodOfPayment, $_isRegistered, $_guestCode){
        parent::__construct($_name, $_surname, $_methodOfPayment, $_isRegistered);
        $this->guestCode = $_guestCode;
    }
}