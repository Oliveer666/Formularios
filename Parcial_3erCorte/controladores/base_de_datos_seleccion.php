<?php 
require "config/conexion.php";

$sql = "SELECT tipo_carne
FROM carne_categoria
WHERE 1";

foreach($dbh->query($sql) as $row){
    print "
    <option value='".$row['tipo_carne']."'>".$row['tipo_carne']."</option>
    ";
}
?>