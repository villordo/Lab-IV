<?php
namespace Idiomas;
require_once('Greet.php');
class English extends Greet{
    
    public function __construct(){
        echo "English created";
    }
    
    public function greet(){
        $this->message="Hi i'm an English guy";
        include('../process/message.php');
    }
    
    public function sayGoodbye(){
        $this->message= "Goodbye my lover";
        include('../process/message.php');
    }
}