<?php

if (!empty($_POST["btn-modificar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["cedula"]) and !empty($_POST["fecha_nac"]) and !empty($_POST["cargos"])) {

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $cedula = $_POST["cedula"];
        $fecha_nac = $_POST["fecha_nac"];
        $cargos = $_POST["cargos"];

        $sql = $conexion->query("UPDATE personas SET nombre='$nombre', apellido='$apellido', cedula=$cedula, fecha_nac='$fecha_nac', cargos= '$cargos' WHERE id_persona=$id ");

        if ($sql == 1) {
            header("location:index.php");
            echo '<div class="alert alert-success">Se modificaron los datos correctamente</div>';
        }else{
            echo '<div class="alert alert-danger">No se modificó nada xd</div>';
        }
    
    } else {
        echo '<div class="alert alert-warning">Algunos de los campos se encuentran vacío</div>';
    }

}
?>