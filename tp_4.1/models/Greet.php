<?php 
namespace Idiomas;
abstract class Greet{
    private $message;
    
    public function setMessage($msg){
        $this->message=$msg;
    }
    public function getMessage(){
        return $this->message;
    }
    public function other($message){
        $this->message=$message;
        include('../process/message.php');
    }
        
    public abstract function greet();
    public abstract function sayGoodbye();
}