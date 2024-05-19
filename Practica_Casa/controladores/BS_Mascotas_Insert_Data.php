<?php
require "config/conexion.php";

$sql_mostrar = "SELECT cod, mes
FROM mascotas_mes
WHERE 1";

foreach($dbh->query($sql_mostrar) as $row){
    print "
    <option value='".$row['cod']."'>".$row['mes']."</option>
    ";
}
?>