<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="CSS/style_login.css" />
    <link rel="icon" href="./Imagenes/logo.png">
  </head>
  <body>
    <!-- DIV Contenedor del form -->
    <div class="login">
        <form method="post" action="valida.php" class="formulario">
          <h1 class="titulo">Iniciar Sesion</h1>
          <div class="input_Contenedor">
            <input type="text" name="user" class="input" placeholder="">
            <label for="" class="label">Nombre de usuario</label>
          </div>
    
          <div class="input_Contenedor">
            <input type="password" name="pass" class="input" placeholder="">
            <label class="label">Contraseña</label>
          </div>
          <a type="submit" class="init">Iniciar Sesion</a>
            <div class="tes">
              <a href="./registro.php">Crear una nueva cuenta</a>
              <a href="#">¿Olvidaste tu contraseña?</a>
            </div>
        </form>
    </div>
    <?php
        if(isset($_GET['error']))
          echo $_GET['error'];
    ?>
  </body>
</html>
