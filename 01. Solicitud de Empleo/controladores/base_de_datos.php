<?php
    require "../config/conexion.php";

    $full_name = $_POST["full-name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $profile = $_POST["profile"];
    $institution = $_POST["institution"];
    $degree = $_POST["degree"];
    $graduation1 = $_POST["graduation1"];
    $graduation2 = $_POST["graduation2"];
    $company = $_POST["company"];
    $job = $_POST["job"];
    $duration1 = $_POST["duration1"];
    $duration2 = $_POST["duration2"];
    $skills = $_POST["skills"];
    $project = $_POST["project"];
    $role = $_POST["role"];
    $references = $_POST["references"];

    $sql_insertar = "INSERT INTO 01
        (fecha_sys, full_name, email, phone, address, profile, institution, degree, graduation1,
        graduation2, company, job, duration1, duration2, skills, project, role, references)
    VALUES (now(), '".$full_name."', '".$email."', '".$phone."', '".$address."', '".$profile."',
    '".$institution."', '".$degree."', '".$graduation1."', '".$graduation2."', '".$company."',
    '".$job."', '".$duration1."', '".$duration2."', '".$skills."', '".$project."', '".$role."',
    '".$references."')";

    if($dbh->query($sql_insertar))
    {
        echo "Informacion registrada correctamente";
    }else{
        echo "Error registrando la informacion";
    }
?>