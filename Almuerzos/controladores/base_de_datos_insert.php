<?php
    require "../config/conexion.php";

    $limite = 400;
    $vendidos = 400;
    $estado = 0;

    $documento = $_POST["documento"];

    $sql_insertar_ventas = "INSERT INTO ventas 
        (fecha_sys, documento)
    VALUES (now(), '".$documento."')";

    $sql_insertar_config = "INSERT INTO config
        (limite, estado)
    VALUES ('".$limite."', '".$estado."')";

    if($dbh->query($sql_insertar_ventas)) {

        if($dbh->query($sql_insertar_config)) {
            echo "Información de venta registrada correctamente";
        } else {
            echo "Error registrando la configuración";
        }
    } else {
        echo "Error registrando la venta";
    }
?>