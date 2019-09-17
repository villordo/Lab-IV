<?php
class Bill{
    private $date_;
    private $type;
    private $number;
    
    // CONSTRUCT
    public function __construct($date_,$type,$number){
        $this->date_=$date_;  
        $this->type=$type;
        $this->number=$number;
    }
    
    //GETTERS
    public function getDate(){
        return $this->date_;
    }
    public function getType(){
        return $this->type;
    }
    public function getNumber(){
        return $this->number;
    }
}