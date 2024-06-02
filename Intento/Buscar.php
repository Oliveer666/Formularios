<?php 
require "config/conexion.php";

header('Content-Type: application/json'); 

$registros = array();

if (isset($_POST["buscar"]) && !empty($_POST["buscar"])) {
    $buscar = $_POST["buscar"];

    $sql = "SELECT cod, nombre_proyecto, nombre_dueño, celular, correo, facultad
            FROM semilleros
            WHERE nombre_proyecto LIKE ? OR
                  nombre_dueño LIKE ? OR 
                  celular LIKE ? OR
                  correo LIKE ? OR
                  facultad LIKE ?
            LIMIT 25";

    $stmt = $dbh->prepare($sql);
    $param = "%" . $buscar . "%";
    $stmt->execute(array($param, $param, $param, $param, $param));

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $registros[] = $row;
    }
} else {
    $sql = "SELECT cod, nombre_proyecto, nombre_dueño, celular, correo, facultad
            FROM semilleros
            LIMIT 25";

    foreach ($dbh->query($sql) as $row) {
        $registros[] = $row;
    }
}

echo json_encode($registros);
?>