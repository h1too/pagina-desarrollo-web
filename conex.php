<?php

$host  = "localhost";
$user = "root";
$pass = "";
$base = "rodastore";

$bd = mysqli_connect($host,$user,$pass,$base);

if(!$bd){
    echo "error en la conexion a la base de datos";
    exit;
}
?>