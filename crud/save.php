<?php
include('db.php');
if(isset($_POST['save'])){
    $name_=$_POST['nombre'];
    $direc=$_POST['direccion'];
    $city=$_POST['ciudad'];
    $price=$_POST['precio'];
    
    $query = "INSERT INTO cines(nombre_cine,direccion,valor_entrada,id_ciudad1) VALUES ('$name_','$direc','$price','$city')";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("query fail");
    }
    $_SESSION['message']='Cinema saves succesfully';
    $_SESSION['message_type']='success';
    header('location:index.php');
}