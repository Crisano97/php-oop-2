<?php
class Card{
    protected $cardNumber;
    protected $cardExpiringDate;
    protected $cardBalance;

    public function __construct($_cardNumber, $_cardExpiringDate, $_cardBalance){
        $this->cardNumber = $_cardNumber;
        $this->cardExpiringDate = $_cardExpiringDate;
        $this->cardBalance = $_cardBalance;
    }

    public function getCardBalance(){
        return $this->cardBalance;
    }

    public function getCardExpiringDate(){
        return $this->cardExpiringDate;
    }

    public function setCardExpiringDate($_cardExpiringDate){
        $this->cardExpiringDate = strtotime($_cardExpiringDate);
    }

    public function isCardValid(){
        if($this->cardExpiringDate <= date("m/d/Y")){
            return true;
        } else {
            echo "la carta é scaduta";
        }
    }
}

