<?php
session_start();

//chequear que esté logueado (estado = 'logueado')
if($_SESSION['estado'] != "logueado")
    header("Location: inicioSesion.php");

echo "Bienvenido al sistema Sr. ".$_SESSION['nombre']. "<br><br>";
echo "Su correo es ".$_SESSION['correo']."<br><br>";

echo "<a href='cerrarSesion.php'>Cerrar Sesión</a>";
?>
