<?php
namespace Idiomas;
require_once('Greet.php');
class Italian extends Greet{
    
    public function __construct(){
        echo 'Bambino created';
    }
    
    public function greet(){
        $this->message= "Chao! Mi piace il spagetti";
        include('../process/message.php');
    }
    
    public function sayGoodbye(){
        $this->message= "Chau en italiano";
        include('../process/message.php');
    }
}