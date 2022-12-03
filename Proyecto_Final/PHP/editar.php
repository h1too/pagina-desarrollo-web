<?php
    include("conex.php");

    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $correo = $_POST['mail'];
    $pwd = $_POST['pwd'];

    $sql="UPDATE usuarios SET usuario='$nom',correo='$correo',contraseña='$pwd' WHERE id='$id'";
    $query=mysqli_query($bd,$sql);

        if($query){
            Header("Location: cuenta.php");
        }
?>