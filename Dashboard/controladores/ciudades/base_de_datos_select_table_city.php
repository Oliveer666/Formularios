<?php 
require "config/conexion.php";

if(isset($_POST["buscar"]))
{
    $buscar = $_POST["buscar"];

    $sql = "SELECT cod, nombre, ciudad
    FROM datos
    WHERE nombre LIKE '%".$buscar."%'
    LIMIT 25";

foreach($dbh->query($sql) as $row){
    print "
    <tr>
        <td>".$row['cod']."</td>
        <td>".$row['nombre']."</td>
        <td>".$row['ciudad']."</td>
    </tr>
    ";
}
}else{
    $sql = "SELECT cod, nombre, ciudad
    FROM datos
    WHERE 1
    LIMIT 25";

    foreach($dbh->query($sql) as $row){
        print "
        <tr>
        <td>".$row['cod']."</td>
        <td>".$row['nombre']."</td>
        <td>".$row['ciudad']."</td>
        </tr>
        ";
    }
}
?>