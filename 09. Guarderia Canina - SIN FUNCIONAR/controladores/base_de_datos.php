<?php
    require "../config/conexion.php";

    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $start = $_POST["start"];
    $end = $_POST["end"];
    $dog_name = $_POST["dog_name"];
    $breed = $_POST["breed"];
    $age_date = $_POST["age_date"];
    $age = $_POST["age"];
    $notes = $_POST["notes"];

    $sql_insertar = "INSERT INTO 09
        (fecha_sys, full_name, email, phone, start, end,  dog_name, breed, age_date, age, notes) 
    VALUES (now(), '".$full_name."', '".$email."', '".$phone."', '".$start."', '".$end."', '".$dog_name."',
    '".$breed."', '".$age_date."', '".$age."', '".$notes."')";

    if($dbh->query($sql_insertar))
    {
        echo "Informacion registrada correctamente";
    }else{
        echo "Error registrando la informacion";
    }
?>