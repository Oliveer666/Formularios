<?php
    require "../config/conexion.php";

    $code = $_POST["eliminar_cupo"];

    $sql_delete = "DELETE FROM `ventas` WHERE cod ='".$code."' "; 

    if($dbh->query($sql_delete))
    {
        echo "Informacion registrada correctamente";
    }else
    {
        echo "Error registrando la informacion";
    }
?>