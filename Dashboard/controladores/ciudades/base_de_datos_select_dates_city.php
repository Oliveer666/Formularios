<?php 
require "config/conexion.php";

$sql = "SELECT cod, ciudad
FROM ciudad
WHERE 1";

foreach($dbh->query($sql) as $row){
    print "
    <option value='".$row['ciudad']."'>".$row['ciudad']."</option>
    ";
}
?>