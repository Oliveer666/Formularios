<?php
    require "../config/conexion.php";

    $full_name = $_POST["full_name"];
    $birth = $_POST["birth"];
    $nationality = $_POST["nationality"];
    $passport = $_POST["passport"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $purpose = $_POST["purpose"];
    $date_stay = $_POST["date_stay"];
    $duration_stay = $_POST["duration_stay"];
    $start = $_POST["start"];
    $end = $_POST["end"];

    $sql_insertar = "INSERT INTO 10
        (fecha_sys, full_name, birth, nationality, passport, address, phone, email, purpose, date_stay,
        duration_stay, start, end) 
    VALUES (now(), '".$full_name."', '".$birth."', '".$nationality."', '".$passport."', '".$address."',
    '".$phone."', '".$email."', '".$purpose."', '".$date_stay."', '".$duration_stay."', '".$start."',
    '".$end."')";

    if($dbh->query($sql_insertar))
    {
        echo "Informacion registrada correctamente";
    }else{
        echo "Error registrando la informacion";
    }
?>