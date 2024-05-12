<?php 
require "config/conexion.php";

$sql = "SELECT cod, nombre, ciudad
FROM datos
WHERE 1";

foreach($dbh->query($sql) as $row){
    print "
    <tr>
       <td>".$row['cod']."</td>
       <td>".$row['nombre']."</td>
       <td>".$row['ciudad']."</td>
    </tr>
    ";
}
?>