<?php 
require "config/conexion.php";

$sql = "SELECT cod, cod_prestamo, valor_pagado
FROM pago
limit 100";

foreach($dbh->query($sql) as $row){
    print "
    <tr>
        <td>".$row[0]."</td>
        <td>".$row['valor_pagado']."</td>
        <td>".$row['cod_prestamo']."</td>
    </tr>    
    ";
}
?>