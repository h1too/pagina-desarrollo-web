<?php
    session_start();
    //Rescatamos los campos del formulario
    $usuario = $_POST['user'];
    $clave   = $_POST['pass'];

    if($usuario == "pablito" && $clave == "1234"){
        $_SESSION['nombre'] = "Pablo Perez";
        $_SESSION['correo'] = "pp@noesmicorreo.com";
        $_SESSION['estado'] = "logueado";
        //echo "<a href='adentro.php'>Puede Entrar al Sistema</a>";
        header("Location: adentro.php");
    } else {
        header("Location: inicioSesion.php?error=Error+usuario+o+password");
        /*echo "Usuario o clave inválida <br>";
        echo "<a href='inicioSesion.php'>Vuelva a intentarlo</a>";*/
    }
 ?>