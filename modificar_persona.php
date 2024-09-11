<?php

include "modelos/conexion.php";
$id=$_GET['id'];

$sql=$conexion->query(" select * from personas where id_persona=$id ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar persona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secondary">Modificar datos del sospechoso</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"]; ?>">
            <?php 
            include "controlador/modificar.php";
            while($datos=$sql->fetch_object()){?>
                    <div class="mb-3">
                        <label class="form-label">Nombre del ciudadano</label>
                        <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Apellido del ciudadano</label>
                        <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cédula</label>
                        <input type="number" class="form-control" name="cedula" value="<?= $datos->cedula ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" name="fecha_nac" value="<?= $datos->fecha_nac ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cargos de detención</label>
                        <input type="text" class="form-control" name="cargos" value="<?= $datos->cargos ?>">
                    </div>

            <?php }
            ?>
            <button type="submit" class="btn btn-primary" name="btn-modificar" value="OK">Modificar</button>
    </form>
</body>
</html>