<?php

    $host  = "db.inf.uct.cl";
    $user = "A2022_rgutierrez";
    $pass = "A2022_rgutierrez";
    $base = "A2022_rgutierrez";

    $bd = mysqli_connect($host,$user,$pass,$base);

    if(!$bd){
        echo "error en la conexion a la base de datos";
        exit;
    }
?>