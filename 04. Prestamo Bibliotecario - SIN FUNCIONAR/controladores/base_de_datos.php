<?php
    require "../config/conexion.php";

    $full_name = $_POST["full_name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $tittle = $_POST["tittle"];
    $autor = $_POST["autor"];
    $code = $_POST["code"];
    $time_frame = $_POST["time_frame"];

    $sql_insertar = "INSERT INTO 04
        (fecha_sys, full_name, phone, email, tittle, autor, code, time_frame) 
    VALUES (now(), '".$full_name."', '".$phone."', '".$email."', '".$tittle."', '".$autor."',
    '".$code."', '".$time_frame."')";

    if($dbh->query($sql_insertar))
    {
        echo "Informacion registrada correctamente";
    }else{
        echo "Error registrando la informacion";
    }
?>