<?php

include('autoload.php');
session_start();

$repousers = new repository\UsersRepository();

$userList = $repousers->getAll();
//echo 'asd <br>';
//var_dump($userList);
//var_dump($_SESSION);
$usr=$_POST['usr'];
$pass=$_POST['pass'];


foreach($userList as $value){
    if($usr == $value->getEmail() && $pass == $value->getPass()){
        $_SESSION['loggedUser'] = $value;
        header('location: users.php');
    }
}

header('location: index.php');

