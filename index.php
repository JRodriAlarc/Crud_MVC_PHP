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
    
    <div class="container-fluid row">
    
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center alert alert-secondary">Registrar Personas</h3>
            <?php 
                include_once "model/conexion.php";
                include_once "controller/registro.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la Persona</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido de la Persona</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Curp de la Persona</label>
                <input type="text" class="form-control" name="dni">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo de la Persona</label>
                <input type="email" class="form-control" name="correo">
            </div>
            <button type="submit" class="btn btn-primary" name="btnRegistrar" value="ok">Registrar</button>
        </form>

        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Curp</th>
                        <th scope="col">Fecha Nacimiento</th>
                        <th scope="col">Correo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql=$conexion->query("SELECT * FROM persona");
                        while($datos = $sql->fetch_object()){
                            ?>
                            <tr>
                                <td><?= $datos->idPersona ?></td>
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->apellido ?></td>
                                <td><?= $datos->dni ?></td>
                                <td><?= $datos->fechaNacimiento ?></td>
                                <td><?= $datos->correo ?></td>
                                <td>
                                    <a href="modificar.php?idPersona=<?=$datos->idPersona?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>

    <!-- JavaScript for Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>