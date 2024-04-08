<?php
    require "../config/conexion.php";

    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $platform = $_POST["platform"];
    $game = $_POST["game"];

    $sql_insertar = "INSERT INTO 12
        (fecha_sys, full_name, email, phone, platform, game) 
    VALUES (now(), '".$full_name."', '".$email."', '".$phone."', '".$platform."', '".$game."')";

    if($dbh->query($sql_insertar))
    {
        echo "Informacion registrada correctamente";
    }else{
        echo "Error registrando la informacion";
    }
?>