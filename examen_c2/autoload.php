<?php

spl_autoload_register(function($classname){
    $array = explode('\\',$classname); 
  
    
    $classname= implode('/',$array); 
   // echo $classname .'<br>';
    include($classname.'.php');
    
});