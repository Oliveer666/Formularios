<?php
    require "../config/conexion.php";

    $ = $_POST[""];
    $ = $_POST[""];
    $ = $_POST[""];
    $ = $_POST[""];
    $ = $_POST[""];

    $sql_insertar = "INSERT INTO -
        (fecha_sys, , , , , , ) 
    VALUES (now(), '".$."', '".$."', '".$."', '".$."', '".$."')";

    if($dbh->query($sql_insertar))
    {
        echo "Informacion registrada correctamente";
    }else{
        echo "Error registrando la informacion";
    }
?>