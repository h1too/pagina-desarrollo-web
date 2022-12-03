<?php
    include("conex.php");

    $nom = $_POST['nom'];
    $email = $_POST['mail'];
    $pass = $_POST['pwd'];

    $sql = "CALL NewUser('$nom','$email','$pass')"; 
    $res = mysqli_query($bd,$sql);

    if($res)
        header("Location: cuenta.php");
    if($res){
        echo "Se ha creado un nuevo usuario";
    }
    if(!$res){
        echo "lo sentimos ha ocurrido un error";
    }
?>