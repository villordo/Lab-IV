<?php
include('../header.php');
use Idiomas\Spanish as Spanish;
use Idiomas\Italian as Italian;
use Idiomas\English as English;


print_r($_POST);



if(isset($_POST['idioma']) && isset($_POST['action'])){
    
    $action=$_POST['action'];
    if($_POST['idioma']=='arg')
    {
        $idioma = new Spanish();
    }elseif($_POST['idioma']=='ing'){
        $idioma = new English();
    }
    else{
        $idioma = new Italian();
    }
    
    if($_POST['action']=='greet'){
        call_user_func(array($idioma,$action));
    }
    elseif($_POST['action']=='sayGoodbye'){
        call_user_func(array($idioma,$action));
    }
    else
    {
        $othermessage = !empty($_POST["message"]) ? $_POST["message"] : "Ops, olvidaste escribir el mensaje!";
        call_user_func(array($idioma,$action),$othermessage);
    }
   
}