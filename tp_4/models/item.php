<?php
class Item{
    private $name;
    private $description;
    private $price;
    private $quantity;
    
    // CONSTRUCT 
    public function __construct($name,$description,$price,$quantity){
        $this->name=$name;
        $this->description=$description;
        $this->price=$price;
        $this->quantity=$quantity;
    }
    
    // GETTERS
    public function getName(){
        return $this->name;
    }
    public function getDesc(){
        return $this->description;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getQuantity(){
        return $this->quantity;
    }
}