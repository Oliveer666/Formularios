<?php 
require "config/conexion.php";

#SE CUMPLE SI HAY UNA LETRA/NUMERO MINIMO EN EL BUSCADOR
if(isset($_POST["-Variable name(X)-"]))
{
    $X = $_POST["-Variable name(X)-"];

    $sql = "SELECT *
    FROM -Nombre de la Tabla-
    WHERE -Nombre de la Columna en la Base de Datos(A)- LIKE '%".$X."%' or 
    -Nombre de la Columna en la Base de Datos(B)- LIKE '%".$X."%' or 
    -Nombre de la Columna en la Base de Datos(C)- LIKE '%".$X."%'
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
#SE CUMPLE SI NO HAY UNA LETRA/NUMERO MINIMO EN EL BUSCADOR
}else{
    $sql = "SELECT *
    FROM -Nombre de la Tabla-
    WHERE 1
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
}
?>