<?php
namespace Idiomas;
require_once('Greet.php');
use Idiomas\Greet as Greet;
class Spanish extends Greet{
    

    public function __construct (){
        echo "Turro creado amigo";
    } 
    
    public function greet(){
        $this->message="Hola soy alto argentino papa ndeah";
        //echo $this->message;
        //echo $this->getMessage();
        //$mensaje = $this->message;
        include('../process/message.php');
    }
    
    public function sayGoodbye(){
        $this->message="Nos vemo en esa perrito";
        include('../process/message.php');
    }
}