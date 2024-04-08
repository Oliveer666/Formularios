<?php
    require "../config/conexion.php";

    $names = $_POST["names"];
    $surnames = $_POST["surnames"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $ssn = $_POST["ssn"];
    $amount = $_POST["amount"];
    $purpose = $_POST["purpose"];
    $payment = $_POST["payment"];
    $company = $_POST["company"];
    $job = $_POST["job"];
    $income = $_POST["income"];

    $sql_insertar = "INSERT INTO 08
        (fecha_sys, names, surnames, address, phone, email, ssn, amount, purpose, payment, company, job,
        income) 
    VALUES (now(), '".$names."', '".$surnames."', '".$address."', '".$phone."', '".$email."', '".$ssn."',
    '".$amount."', '".$purpose."', '".$payment."', '".$company."' , '".$job."', '".$income."')";

    if($dbh->query($sql_insertar))
    {
        echo "Informacion registrada correctamente";
    }else{
        echo "Error registrando la informacion";
    }
?>