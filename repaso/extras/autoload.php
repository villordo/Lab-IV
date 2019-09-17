<?php

define('ROOT',__DIR__ . '/../');

spl_autoload_register(function($classname){
    //controllers\Personas = class.personas.php
    $classname = str_replace('\\','/class.',$classname);
    echo "funciona";
    include( strtolower($classname). '.php');
})