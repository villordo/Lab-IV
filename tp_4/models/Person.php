<?php 
abstract class Person{
    private $id;
    private $firstName;
    private $lastName;
    private $dni;
    private $email;
    
    // CONSTRUCT
    public function __construct($id,$firstName,$lastName,$dni,$email){
        $this->id=$id;
        $this->firstName=$firstName;
        $this->lastName=$lastName;
        $this->dni=$dni;
        $this->email=$email;
    }
    
    // ABSTRACT METHOD
    abstract public function talkAboutMe();
    
    // GETTERS AND SETTERS
    public function setId($id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }
    public function setFirstName($firstName){
         $this->firstName=$firstName;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function setLastName($lastName){
         $this->lastName=$lastName;
    }
    public function getLastName($lastName){
        return $this->lastName;
    }
    public function setDni($dni){
         $this->dni=$dni;
    }
    public function getDni(){
        return $this->dni;
    }
    public function setEmail($email){
         $this->email=$email;
    }
    public function getEmail(){
        return $this->email;
    }
}