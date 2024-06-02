<?php 
require "config/conexion.php";

    $X = $_POST["-Variable name(X)-"];

    $sql = "SELECT *
    FROM -Nombre de la Tabla-
    WHERE -Nombre de la Columna en la Base de Datos(A)- LIKE '%".$X."%'
    LIMIT -Numero Limite-";

foreach($dbh->query($sql) as $row){
    print "
    <tr>
        <td>".$row['-columna(A)-']."</td>
        <td>".$row['-columna(B)-']."</td>
        <td>".$row['-columna(C)-']."</td>
    </tr>
    ";
}
?>