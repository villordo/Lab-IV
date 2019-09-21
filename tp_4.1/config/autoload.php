<?php
define('ROOT',__DIR__ . '/../');

spl_autoload_register(function($classname){
    //echo $classname; // outputs: Idiomas\Spanish
    $array = explode('\\',$classname); 
    $classname =  $array[1]; //SOLO NECESITO QUEDARME CON EL NOMBRE DE LA CLASE EJ: 'Spanish'
    include(ROOT .'models/'. $classname . '.php');
    // agrego el 'models/' porque es la carpeta en donde se encuentran mis archivos.
});