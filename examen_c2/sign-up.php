<?php

// Code...
include('autoload.php');
use model\User as User;
$user_repo= new repository\UsersRepository();
$userList = $user_repo->getAll();

if($_POST){
$newUser = new User($_POST['email'],$_POST['pass'],$_POST['name'],$_POST['dni'],$_POST['birthdate']);
$userExist = false;

foreach($userList as $value) {
    if($newUser->getEmail() == $value->getEmail()){
       $userExist=true;
     }
}

if(!$userExist) {
    $user_repo->add($newUser);
    $successMje = 'Usuario agregado con éxito';
} else {
    $errorMje = 'El usurio ya existe';
}

include('index.php');  
}