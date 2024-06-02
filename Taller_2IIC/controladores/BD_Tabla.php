<?php 
require "config/conexion.php";

if(isset($_POST["buscar"]))
{
    $buscar = $_POST["buscar"];

    $sql = "SELECT cod, nombre_proyecto, nombre_dueño, celular, correo, facultad
    FROM semilleros
    WHERE nombre_proyecto LIKE '%".$buscar."%' or
    nombre_dueño LIKE '%".$buscar."%' or 
    celular LIKE '%".$buscar."%' or
    correo LIKE '%".$buscar."%' or
    facultad LIKE '%".$buscar."%'
    LIMIT 25";

foreach($dbh->query($sql) as $row){
    print "
    <tr>
       <td>".$row['cod']."</td>
       <td>".$row['nombre_proyecto']."</td>
       <td>".$row['nombre_dueño']."</td>
       <td>".$row['celular']."</td>
       <td>".$row['correo']."</td>
       <td>".$row['facultad']."</td>
    </tr>
    ";
}
}else{
    $sql = "SELECT cod, nombre_proyecto, nombre_dueño, celular, correo, facultad
    FROM semilleros
    WHERE 1
    LIMIT 25";

    foreach($dbh->query($sql) as $row){
        print "
        <tr>
            <td>".$row['cod']."</td>
            <td>".$row['nombre_proyecto']."</td>
            <td>".$row['nombre_dueño']."</td>
            <td>".$row['celular']."</td>
            <td>".$row['correo']."</td>
            <td>".$row['facultad']."</td>
        ";
    }
}
?>