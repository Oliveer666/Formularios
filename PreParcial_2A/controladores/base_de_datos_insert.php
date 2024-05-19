<script src="../js/sweetalert2@11.js"></script>.
<?php
require "../config/conexion.php";

$documento = $_POST["documento"];
$matricula = $_POST["matricula"];
$vehiculo = $_POST["vehiculo"];

$sql_insertar = "INSERT INTO venta_soat
    (fecha_sys, documento, matricula, vehiculo) 
VALUES (now(), '".$documento."', '".$matricula."', '".$vehiculo."')";

if($dbh->query($sql_insertar)) {
    echo "<script>
        Swal.fire({
            title: 'SOAT REGISTRADA CORRECTAMENTE',
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
            title: 'ERROR AL REGISTRAR EL SOAT.',
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