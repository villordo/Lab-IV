<?php
namespace model;
class User{
    private $password;
    private $name;
    private $dni;
    private $fechanac;
    private $email;
    
    public function __construct($email,$password,$name='',$dni='',$fechanac=''){
        $this->password = $password;
        $this->dni = $dni;
        $this->name = $name;
        $this->email = $email;
        $this->fechanac=$fechanac;
        //echo 'user creados
    }
   public function getBirthdate(){
       return $this->fechanac;
   }
    public function getPass(){
        return $this->password;
    }
     public function getDNI(){
        return $this->dni;
    }
     public function getName(){
        return $this->name;
    }
     public function getEmail(){
        return $this->email;
    }
}