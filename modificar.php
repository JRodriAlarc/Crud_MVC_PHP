<?php

    include_once "model/conexion.php";

    $id = $_GET["idPersona"];
    $sql = $conexion->query("SELECT * FROM persona WHERE idPersona = $id");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud PHP & Mysql</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&display=swap" rel="stylesheet">
    <!-- CSS for Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8a7c80030f.js" crossorigin="anonymous"></script>
</head>
<body>

    <nav style="background-color: #323a42;">
        <h1 class="p-4 text-white" style="font-family: 'Inclusive Sans', sans-serif; font-size: 2em;">Crud PHP & Mysql</h1>
    </nav>
    
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center alert alert-secondary">Modificar Datos Personales</h3>
        <input type="hidden" name="id" value="<?= $_GET["idPersona"] ?>">
        <?php
            include_once "controller/modificar.php";
            while($datos = $sql->fetch_object()){
                ?>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre de la Persona</label>
                        <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Apellido de la Persona</label>
                        <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Curp de la Persona</label>
                        <input type="text" class="form-control" name="dni" value="<?= $datos->dni ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" name="fecha" value="<?= $datos->fechaNacimiento ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo de la Persona</label>
                        <input type="email" class="form-control" name="correo" value="<?= $datos->correo ?>">
                    </div>
                <?php
            }
        ?>

        <button type="submit" class="btn btn-primary" name="btnModificar" value="ok">Actualizar Datos</button>
            

    </form>

    <!-- JavaScript for Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>