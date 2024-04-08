<?php
    require "../config/conexion.php";

    $team_name = $_POST["team_name"];
    $captain_name = $_POST["captain_name"];
    $age = $_POST["age"];
    $contact_info = $_POST["contact_info"];
    $coach_name = $_POST["coach_name"];
    $goalkeeper = $_POST["goalkeeper"];
    $defender = $_POST["defender"];
    $midfielder = $_POST["midfielder"];
    $striker = $_POST["striker"];
    $skills = $_POST["skills"];
    $player1_name = $_POST["player1_name"];
    $player1_age = $_POST["player1_age"];
    $player1_position = $_POST["player1_position"];
    $player2_name = $_POST["player2_name"];
    $player2_age = $_POST["player2_age"];
    $player2_position = $_POST["player2_position"];
    $player3_name = $_POST["player3_name"];
    $player3_age = $_POST["player3_age"];
    $player3_position = $_POST["player3_position"];

    $sql_insertar = "INSERT INTO 02 
        (fecha_sys, team_name, captain_name, age, contact_info, coach_name, goalkeeper, defender,
        midfielder, striker, player1_name, player1_age, player1_position, player2_name, player2_age,
        player2_position, player3_name, player3_age, player3_position) 
    VALUES (now(), '".$team_name."', '".$captain_name."', '".$age."', '".$contact_info."',
    '".$coach_name."', '".$goalkeeper."', '".$defender."', '".$midfielder."', '".$striker."',
    ".$skills."', '".$player1_name."', '".$player1_age."', '".$player1_position."', '".$player2_name."',
    '".$player2_age."', '".$player2_position."', '".$player3_name."', '".$player3_age."',
    '".$player3_position."')";

    if($dbh->query($sql_insertar))
    {
        echo "Informacion registrada correctamente";
    }else{
        echo "Error registrando la informacion";
    }
?>