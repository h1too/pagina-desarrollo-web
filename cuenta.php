<?php
    include("conex.php");

    $sql = "SELECT * FROM usuarios";
    $query = mysqli_query($bd,$sql);

    $row = mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mi cuenta</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <div class="conteiner mt-5">
            <div class="row">
                <div class="col-md-3">
                    <h1>datos de usuario</h1>
                </div>

                <div class="col-md-8">
                    <table class="table">
                        <thead class="table-sucess table-striped">
                            <tr>
                                <th>Usuario</th>
                                <th>Email</th>
                                <th>Contraseña</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                while($row = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <th><?php echo $row['usuario']?></th>
                                <th><?php echo $row['correo']?></th>
                                <th><?php echo $row['contraseña']?></th>
                                <!--crear id como claves primarias en la base de datos para los usuarios
                                    para que asi me los muestro a todos y no solo a-->
                                <th><a href="editar.php?id=<?php echo $row['usuario'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['usuario'] ?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </body>
</html>