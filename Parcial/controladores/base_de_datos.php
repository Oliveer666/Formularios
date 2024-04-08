<?php
    require "../config/conexion.php";

    $documento = $_POST["doc"];
    $nombre = $_POST["full-name"];
    $fecha = $_POST["birth"];
    $celular = $_POST["phone"];
    $genero = $_POST["gender"];
    
    $edad = 2024 - $fecha; 

    if($edad < 18){

        echo "Eres menor de edad";

    }else{

        $sql_insertar = "INSERT INTO parcial
            (fecha_sys, documento, nombre, fecha, celular, genero) 
        VALUES (now(), '".$documento."', '".$nombre."', '".$fecha."', '".$celular."', '".$genero."')";

        if($dbh->query($sql_insertar))
        {
            echo "Informacion registrada correctamente";
        }else{
            echo "Error registrando la informacion";
        }
    }
?>
    

    