<?php
class Client extends Person{
    private $userName;
    private $password;
    
    // CONSTRUCT
    public function __construct($id,$firstName,$lastName,$dni,$email,$userName,$password){
        parent::Person($id,$firstName,$lastName,$dni,$email);
        $this->userName = $userName;
        $this->password = $password;
    }
    
    // METHOD ABS
    public function talkAboutMe(){
        echo "I'm a Client";
    }
    
    // GETTERS
    public function getUserName(){
        return $this->userName;
    }
    public function getPassword(){
        return $this->password;
    }
}