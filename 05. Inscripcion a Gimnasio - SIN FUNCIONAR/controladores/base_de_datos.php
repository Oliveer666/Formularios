<?php
    require "../config/conexion.php";

    $full_name = $_POST["full_name"];
    $phone = $_POST["phone"];
    $age = $_POST["age"];
    $membership_plan = $_POST["membership_plan"];
    $membership_time = $_POST["membership_time"];
    $personal_training = $_POST["personal_training"];
    $group_classes = $_POST["group_classes"];

    $sql_insertar = "INSERT INTO 05 
        (fecha_sys, full_name, phone, age, membership_plan, membership_time, personal_training,
        group_classes) 
    VALUES (now(), '".$full_name."', '".$phone."', '".$age."', '".$membership_plan."',
    '".$membership_time."', '".$personal_training."', '".$group_classes."')";

    if($dbh->query($sql_insertar))
    {
        echo "Informacion registrada correctamente";
    }else{
        echo "Error registrando la informacion";
    }
?>