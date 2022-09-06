<?php
require_once __DIR__ . "/User.php";
class RegisteredUser extends User{
    protected $username;
    protected $email;
    protected $password;

    public function __construct($_username, $_email, $_password){
        $this->username = $_username;
        $this->email = $_email;
        $this->password = $_password;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getCartTotal(){
        $total = parent::getCartTotal();
        return $total * 0.8;
    }
}