<?php
//Este programa PHP debe guardarse con el nombre:  acualizaPobla.php

//Me conecto al motor de BD que corre en localhost, con el usuario root (sin password), y selecciono la BD del proyecto
 $bd = mysqli_connect("localhost","root", "","RodaStore");
  
//Recibo el porcentaje y el Id de categoria desde el formulario
  $nom  = $_GET["nom"];
  $mail =  $_GET["mail"];
  $pass = $_GET["pwd"];

//Realizo la consulta SQL (llamada al Proc Almacenado)
$res = mysqli_query($bd, "CALL NewUser($nom, $mail, $pass)");
  
//Muestro un mensaje si todo estuvo bien.
if($res)
   echo "Los precios fueron actualizados";
else
   echo "Ocurrio un error";

if ($x == 1) {
    echo" 
    Especifique <select name='Ayuda' id='help'>
    <option value='0'>--Seleccione una opcion de ayuda--</option>
        <option value='01'>El producto que quiero comprar no tiene stock</option>
        <option value='02'>Mi producto no ha llegado</option>
        <option value='03'>No puedo ver el seguimiento de mi producto</option>
        <option value='04'>Estado de garantia del producto</option>             
    </select><br>
    ";
  }
  if ($x == 2){
      echo" 
      Especifique <select name='Reporte' id='report'>
      <option value='0'>--Seleccione razon de reporte--</option>
          <option value='01'>La pagina tiene fallas</option>
          <option value='02'>Mi cuenta ha sido suplantada</option>
          <option value='03'>No se encuentra mi razon de reporte</option>          
      </select><br>
      ";
  }
  if ($x == 3){
   echo" 
   Especifique <select name='Queja' id='Quej'>
   <option value='0'>--Seleccione razon de queja--</option>
       <option value='01'>El producto llego con detalles</option>
       <option value='02'>Mi producto parece haber sido abierto anteriormente</option>
       <option value='03'>No aparece mi problema</option>
   </select><br>
   ";
}
?>