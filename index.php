<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <h1 class="text-center p-3">Registro Criminal</h1>
    
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de sospechosos</h3>
            <?php
                include "modelos/conexion.php";
                include "controlador/registro.php";
            ?>
            <div class="mb-3">
                <label class="form-label">Nombre del ciudadano</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label  class="form-label">Apellido del ciudadano</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label class="form-label">Cédula</label>
                <input type="number" class="form-control" name="cedula">
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha_nac">
            </div>
            <div class="mb-3">
                <label class="form-label">Cargos de detención</label>
                <input type="text" class="form-control" name="cargos">
            </div>
            <button type="submit" class="btn btn-primary" name="btn-registrar" value="OK">Registrar</button>
        </form>

        <div class="col-8 p-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre del ciudadano</th>
                        <th scope="col">Apellido del Ciudadano</th>
                        <th scope="col">Cédula</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Cargos de detención</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "modelos/conexion.php";
                        $sql = $conexion->query("select * from personas");
                        while($datos=$sql->fetch_object()) { ?>
        
                            <tr>
                                <td>#<?= $datos->id_persona ?></td>
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->apellido ?></td>
                                <td><?= $datos->cedula ?></td>
                                <td><?= $datos->fecha_nac ?></td>
                                <td><?= $datos->cargos ?></td>
                                <td>
                                    <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href=""><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>

                        <?php }
                    ?>
                    
                </tbody>
            </table>
        </div>

    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/831e37b8ec.js" crossorigin="anonymous"></script>
</body>

</html>