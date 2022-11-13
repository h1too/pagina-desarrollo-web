<?php
    include("conex.php");

    $id = $_GET['id'];

    $sql="DELETE FROM usuarios WHERE id = '$id'";
    $query=mysqli_query($bd,$sql);

    if($query){
        Header("Location: cuenta.php");
    }
?>