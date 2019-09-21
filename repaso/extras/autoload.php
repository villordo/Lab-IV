<?php

define('ROOT',__DIR__ . '/../');

spl_autoload_register(function($classname){
    //controllers\Personas = class.personas.php
    $array = explode('\\',$classname);
    var_dump($array);
    echo '<br>';
    echo '<br>';
    $classname = str_replace('\\','/class.',$classname);
    include(ROOT . strtolower($classname). '.php');
})