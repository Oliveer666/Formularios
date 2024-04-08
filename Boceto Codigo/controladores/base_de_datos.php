<?php
    require "../config/conexion.php";

    $x = $_POST["------"];

    $sql_insertar = "INSERT INTO ------- 
        (fecha_sys, -----, ------) 
    VALUES (now(), '".x."', '".x."')";

    if($dbh->query($sql_insertar))
    {
        echo "Informacion registrada correctamente";
    }else{
        echo "Error registrando la informacion";
    }
?>