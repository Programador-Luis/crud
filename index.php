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
        <form class="col-4 p-3">
            <h3 class="text-center text-secundary">Registro de sospechosos</h4>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del ciudadano</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido del ciudadano</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cédula</label>
                <input type="number" class="form-control" name="cedula">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cargos de detención</label>
                <input type="text" class="form-control" name="cargos">
            </div>
            <button type="submit" class="btn btn-primary" name="btn-registrar">Registrar</button>
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
                        include "Modelos/conexion.php";
                        $sql = $conexion->query("select * from personas");
                        while($datos=$sql->fetch_object()) { ?>
        
                            <tr>
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->apellido ?></td>
                                <td><?= $datos->cedula ?></td>
                                <td><?= $datos->fecha_nac ?></td>
                                <td><?= $datos->cargos ?></td>
                                <td>
                                    <a href="">Editar</a>
                                    <a href="">Eliminar</a>
                                </td>
                            </tr>

                        <?php }
                    ?>
                    
                </tbody>
            </table>
        </div>

    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>