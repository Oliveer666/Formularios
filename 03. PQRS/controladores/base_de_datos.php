<?php
    require "../config/conexion.php";

    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $category = $_POST["category"];
    $description = $_POST["description"];

    $sql_insertar = "INSERT INTO 03
        (fecha_sys, full_name, email, category, description) 
    VALUES (now(), '".$full_name."', '".$email."', '".$category."', '".$description."')";

    if($dbh->query($sql_insertar))
    {
        echo "Informacion registrada correctamente";
    }else{
        echo "Error registrando la informacion";
    }
?>