<?php
    require "../config/conexion.php";

    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $rooms = $_POST["rooms"];
    $room1 = $_POST["room1"];
    $room2 = $_POST["room2"];
    $room3 = $_POST["room3"];
    $start = $_POST["start"];
    $end = $_POST["end"];
    $comments = $_POST["comments"];

    $sql_insertar = "INSERT INTO 07
        (fecha_sys, full_name, email, phone, rooms, room1, room2, room3, start, end, comments) 
    VALUES (now(), '".$full_name."', '".$email."', '".$phone."', '".$rooms."', '".$room1."', '".$room2."',
    '".$room3."', '".$start."', '".$end."', '".$comments."')";

    if($dbh->query($sql_insertar))
    {
        echo "Informacion registrada correctamente";
    }else{
        echo "Error registrando la informacion";
    }
?>