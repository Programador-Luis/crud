<?php

if (!empty($_POST["btn-registrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["cedula"]) and !empty($_POST["fecha_nac"]) and !empty($_POST["cargos"])) {

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $cedula = $_POST["cedula"];
        $fecha_nac = $_POST["fecha_nac"];
        $cargos = $_POST["cargos"];

        $sql = $conexion->query("insert into personas(nombre, apellido, cedula, fecha_nac, cargos) VALUES ('$nombre', '$apellido', '$cedula', '$fecha_nac', '$cargos')");

        if ($sql == 1) {
            echo '<div class="alert alert-success">Persona registrada exitosamente</div>';
        } else {
            echo '<div class="alert alert-danger">Persona no fue registrada exitosamente</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Algún campo está vacío</div>';
        }
}

?>