<?php
 include("conex.php");

 $nom = $_POST['nom'];
 $email = $_POST['mail'];
 $pass = $_POST['pwd'];

 $res = mysqli_query($bd, "CALL NewUser('$nom','$email','$pass')");

if($res){
    echo "Se ha creado un nuevo usuario";
}
if(!$res){
    echo "lo sentimos ha ocurrido un error";
}
?>