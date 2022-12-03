<!DOCTYPE html>
<html lang="es">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="CSS/style_registro.css">
      <link rel="icon" href="./Imagenes/logo.png">
      <title>Registrarse</title>
    </head>

    <body>
        <div class="signup">
            <form action="./NewUser.php" class="formulario" method="POST">
              <h1 class="titulo">Registrarse</h1>

              <div class="input_Contenedor">
                <input type="text" class="input" name="mail">
                <label for="" class="label">Email</label>
              </div>
        
              <div class="input_Contenedor">
                <input type="text" class="input" name="nom">
                <label for="" class="label">Nombre de usuario</label>
              </div>
        
              <div class="input_Contenedor">
                <input type="password" class="input" name="pwd">
                <label for="" class="label">Contraseña</label>
              </div>
        
              <div class="input_Contenedor">
                <input type="password" class="input">
                <label for="" class="label">Confirma Contraseña</label>
              </div>
              <a type="submit" class="login" href="./login.php">Iniciar Sesion</a>
              <input type="submit" class="submit" value="Registrarse">
            </form>
          </div>
    </body>
</html>