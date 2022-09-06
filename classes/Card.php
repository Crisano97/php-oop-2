<?php
class Card{
    protected $cardNumber;
    protected $cardExpiringDate;
    protected $cardBalance;

    public function __construct($_cardNumber, $_cardExpiringDate, $_cardBalance){
        $this->cardNumber = $_cardNumber;
        $this->setCardExpiringDate($_cardExpiringDate);
        $this->cardBalance = $_cardBalance;
    }

    public function getCardBalance(){
        return $this->cardBalance;
    }

    public function getCardExpiringDate(){
        return $this->cardExpiringDate;
    }

    public function setCardExpiringDate($_cardExpiringDate){
        $this->cardExpiringDate = new DateTime($_cardExpiringDate);
    }

    public function isCardValid(){
        if($this->cardExpiringDate > new DateTime()){
            return true;
        } else {
            return false;
        }

    }
}

