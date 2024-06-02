<?php 
require "config/conexion.php";

if(isset($_POST["buscar"]))
{
    $buscar = $_POST["buscar"];

    $sql = "SELECT *
    FROM carne
    WHERE cod LIKE '%".$buscar."%' or
    fecha_sys LIKE '%".$buscar."%' or
    kilo LIKE '%".$buscar."%' or
    tipo_carne LIKE '%".$buscar."%' or
    valor LIKE '%".$buscar."%' or
    valor_total LIKE '%".$buscar."%'
    LIMIT 20";

foreach($dbh->query($sql) as $row){
    print "
    <tr>
        <td>".$row['cod']."</td>
        <td>".$row['fecha_sys']."</td>
        <td>".$row['kilo']."</td>
        <td>".$row['tipo_carne']."</td>
        <td>".$row['valor']."</td>
        <td>".$row['valor_total']."</td>
    </tr>
    ";
}
}else{
    $sql = "SELECT *
    FROM carne
    WHERE 1
    LIMIT 20";

    foreach($dbh->query($sql) as $row){
        print "
        <tr>
            <td>".$row['cod']."</td>
            <td>".$row['fecha_sys']."</td>
            <td>".$row['kilo']."</td>
            <td>".$row['tipo_carne']."</td>
            <td>".$row['valor']."</td>
            <td>".$row['valor_total']."</td>
        </tr>
        ";
    }
}
?>