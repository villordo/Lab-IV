<?php
session_start();
// permite guardar información para ser utilizada entre múltiples páginas
$_SESSION['user'] = "Carlos";
$_SESSION['password'] = "Fort";

spl_autoload_register(function($class_name){
    include(str_replace("\\","/",$class_name).".php");
    //str_replace() reemplaza un caracteres dentro de un string
});
//Con la function 'spl_autoload_register' permite registrar múltiples funciones.Las llamará secuencialmente cuando se declare una nueva clase
//           MAL:
//include('Models/persona.php');
//include('Controller/persona.php');

use Controller\Person as c_Person;
use Models\Person as m_Person;

//$person = new Models\Person();
$person = new c_Person();
echo '<br/>';
$person = new m_Person();


$variable= 4=="4" ? "son iguales" : "no son iguales";
                //IF   //TRUE          //FALSE
echo '<br>'.$variable; //outputs son iguales

//header("location:index3.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Title </title>
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="index2.php">Index2</a>
            </li>
        </ul>
    </nav>
    
</body>
</html>




