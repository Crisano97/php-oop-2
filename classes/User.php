<?php

include_once __DIR__ . "/Card.php";
class User{
    protected $cart = [];
    
    public function getCart(){
        return $this->cart;
    }
    public function getCartTotal(){
        $total = 0;
        foreach($this->cart as $cartElement){
            $total += $cartElement->getPrice();
        }
        return $total;
    }
    public function addProducts(...$products){
        $this->cart = array_merge($this->cart, $products);
    }

}
