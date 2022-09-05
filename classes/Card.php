<?php
class Card{
    protected $number;
    protected $expirationDate;
    protected $balance;

    public function __construct($_number, $_expirationDate, $_balance){
        $this->number = $_number;
        $this->expirationDate = $_expirationDate;
        $this->balance = $_balance;
    }
}