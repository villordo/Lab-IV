<?php
session_start();

if($_POST['user']==$_SESSION['user'] && $_POST['password']==$_SESSION['password'] )
{
    session_destroy();
    echo "Loggea2";
}
else
{
    //header( "refresh:3;../views/index.php" ); 
    header("location:../views/index.php");
    $_SESSION['flag']= 1;
}