<?php 
require "config/conexion.php";

$sql = "SELECT -Nombre de la Columna(X)-
FROM -Nombre de la Tabla-
WHERE 1";

foreach($dbh->query($sql) as $row){
    print "
    <option value='".$row['-Nombre de la Columna(X) a Interpretar-']."'>".$row['-Nombre de la Columna(X) a Mostrar en Vista-']."</option>
    ";
}
?>