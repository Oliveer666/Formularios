<?php
    require "../config/conexion.php";

    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $guests = $_POST["guests"];

    $sql_insertar = "INSERT INTO 06
        (fecha_sys, name, lastname, email, phone, date, time, guests) 
    VALUES (now(), '".$name."', '".$lastname."', '".$email."', '".$phone."', '".$date."', '".$time."',
    '".$guests."')";

    if($dbh->query($sql_insertar))
    {
        echo "Informacion registrada correctamente";
    }else{
        echo "Error registrando la informacion";
    }
?>