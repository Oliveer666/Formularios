<?php
    require "../config/conexion.php";

    $full_name = $_POST["full_name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $blood = $_POST["blood"];
    $comments = $_POST["comments"];

    $sql_insertar = "INSERT INTO 11
        (fecha_sys, full_name, phone, email, blood, comments) 
    VALUES (now(), '".$full_name."', '".$phone."', '".$email."', '".$blood."', '".$comments."')";

    if($dbh->query($sql_insertar))
    {
        echo "Informacion registrada correctamente";
    }else{
        echo "Error registrando la informacion";
    }
?>