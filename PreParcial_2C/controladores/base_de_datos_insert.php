<script src="../js/sweetalert2@11.js"></script>.
<?php
require "../config/conexion.php";

$documento = $_POST["documento"];
$nombre = $_POST["nombre"];
$celular = $_POST["celular"];
$carrera = $_POST["carrera"];

$sql_insertar_ventas = "INSERT INTO carrera_atletica
    (fecha_sys, documento, nombre, celular, carrera)
VALUES (now(), '".$documento."', '".$nombre."', '".$celular."', '".$carrera."')";

if($dbh->query($sql_insertar_ventas)) {
    echo "<script>
        Swal.fire({
            title: 'INSCRIPCION REGISTRADA CORRECTAMENTE',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../Insert.html';
            }
        });
    </script>";
} else {
    echo "<script>
        Swal.fire({
            title: 'ERROR AL REGISTRAR LA INSCRIPCION.',
            icon: 'error',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../Insert.html';
            }
        });
    </script>";
    }
?>