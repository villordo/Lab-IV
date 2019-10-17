<?php
    include('db.php');
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="DELETE FROM cines WHERE id_cine =$id";
        $result = mysqli_query($conn,$query);
    }
    if(!$result){
        die("query fail");
    }
    $_SESSION['message']='Cinema deleted succesfully';
    $_SESSION['message_type']='danger';
    header('location:index.php');
?>