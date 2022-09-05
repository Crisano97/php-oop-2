<?php
require_once __DIR__ . "/User.php";
class RegisteredUser extends User{
    protected $username;
    protected $password;
    protected $discount;

    public function __construct($_name, $_surname, $_methodOfPayment, $_isRegistered, $_username, $_password, $_discount){
        parent::__construct($_name, $_surname, $_methodOfPayment, $_isRegistered);
        $this->username = $_username;
        $this->password = $_password;
        $this->discount = $_discount;
    }
}