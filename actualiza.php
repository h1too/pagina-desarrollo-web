<?php 
    include("conex.php");

    $id=$_GET['id'];

    $sql="SELECT * FROM usuarios WHERE id='$id'";
    $query=mysqli_query($bd,$sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Actualizar datos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
    </head>
    <body>
        <div class="container mt-5">
            <form action="editar.php" method="POST">
                    
                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                <input type="text" class="form-control mb-3" name="nom" placeholder="Nombres" value="<?php echo $row['usuario']  ?>">
                <input type="text" class="form-control mb-3" name="mail" placeholder="Apellidos" value="<?php echo $row['correo']  ?>">
                <input type="text" class="form-control mb-3" name="pwd" placeholder="contraseña" value="<?php echo $row['contraseña']  ?>">
                                
                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            </form>    
        </div>
    </body>
</html>