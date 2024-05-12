<?php
    require "../config/conexion.php";

    $teacher = $_POST["teacher"];
    $class = $_POST["class"];
    $today = $_POST["today"];
    $student1 = $_POST["student1"];
    $status1 = $_POST["status1"];
    $attendance1 = $_POST["attendance1"];
    $student2 = $_POST["student2"];
    $status2 = $_POST["status2"];
    $attendance2 = $_POST["attendance2"];
    $student3 = $_POST["student3"];
    $status3 = $_POST["status3"];
    $attendance3 = $_POST["attendance3"];
    $student4 = $_POST["student4"];
    $status4 = $_POST["status4"];
    $attendance4 = $_POST["attendance4"];
    $student5 = $_POST["student5"];
    $status5 = $_POST["status5"];
    $attendance5 = $_POST["attendance5"];
    $student6 = $_POST["student6"];
    $status6 = $_POST["status6"];
    $attendance6 = $_POST["attendance6"];
    $student7 = $_POST["student7"];
    $status7 = $_POST["status7"];
    $attendance7 = $_POST["attendance7"];
    $student8 = $_POST["student8"];
    $status8 = $_POST["status8"];
    $attendance8 = $_POST["attendance8"];
    $student9 = $_POST["student9"];
    $status9 = $_POST["status9"];
    $attendance9 = $_POST["attendance9"];
    $student10 = $_POST["student10"];
    $status10 = $_POST["status10"];
    $attendance10 = $_POST["attendance10"];


    $sql_insertar = "INSERT INTO -
        (fecha_sys, teacher, class, today, student1, status1, attendance1, student2, status2, attendance2,
        student3, status3, attendance3, student4, status4, attendance4, student5, status5, attendance5,
        student6, status6, attendance6, student7, status7, attendance7, student8, status8, attendance8,
        student9, status9, attendance9, student10, status10, attendance10) 
    VALUES (now(), '".$teacher."', '".$class."', '".$today."', '".$student1."', '".$status1."',
    '".$attendance1."', '".$student2."', '".$status2."', '".$attendance2."', '".$student3."',
    '".$status3."', '".$attendance3."', '".$student4."', '".$status4."', '".$attendance4."',
    '".$student5."', '".$status5."', '".$attendance5."', '".$student6."', '".$status6."',
    '".$attendance6."', '".$student7."', '".$status7."', '".$attendance7."', '".$student8."',
    '".$status8."', '".$attendance8."', '".$student9."', '".$status9."', '".$attendance9."',
    '".$student10."', '".$status10."', '".$attendance10."')";

    if($dbh->query($sql_insertar))
    {
        echo "Informacion registrada correctamente";
    }else{
        echo "Error registrando la informacion";
    }
?>