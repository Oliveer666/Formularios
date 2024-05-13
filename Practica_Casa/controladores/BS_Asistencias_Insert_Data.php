<?php
require "config/conexion.php";

$sql_mostrar = "SELECT cod, semestre
FROM asistencia_semestre
WHERE 1";

foreach($dbh->query($sql_mostrar) as $row){
    print "
    <option value='".$row['semestre']."'>".$row['semestre']."</option>
    ";
}
?>