<?php
    require "../config/conexion.php";

    $full_name = $_POST["full_name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $ice_cream = $_POST["ice_cream"];
    $pop_corn = $_POST["pop_corn"];
    $coca_cola = $_POST["coca_cola"];
    $coffee = $_POST["coffee"];
    $hot_dog = $_POST["hot_dog"];
    $hamburger = $_POST["hamburger"];
    $french_fries = $_POST["french_fries"];
    $pizza = $_POST["pizza"];

    $sql_insertar = "INSERT INTO 13
        (fecha_sys, full_name, address, phone, ice_cream, pop_corn, coca_cola, coffee, hot_dog, hamburger,
        french_fries, pizza) 
    VALUES (now(), '".$full_name."', '".$address."', '".$phone."', '".$ice_cream."', '".$pop_corn."',
    '".$coca_cola."', '".$coffee."', '".$hot_dog."', '".$hamburger."', '".$french_fries."', '".$pizza."')";

    if($dbh->query($sql_insertar))
    {
        echo "Informacion registrada correctamente";
    }else{
        echo "Error registrando la informacion";
    }
?>