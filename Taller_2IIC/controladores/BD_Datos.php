<?php
require "config/conexion.php";

$sql_mostrar = "SELECT cod, facultades
FROM semilleros_facultades
WHERE 1";

foreach($dbh->query($sql_mostrar) as $row){
    print "
    <option value='".$row['facultades']."'>".$row['facultades']."</option>
    ";
}
?>