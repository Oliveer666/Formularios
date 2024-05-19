<script src="../js/sweetalert2@11.js"></script>.
<?php
require "../config/conexion.php";

$matricula = $_POST["matricula"];
$vehiculo = $_POST["vehiculo"];

$sql_actualizar = "UPDATE venta_soat SET vehiculo='".$vehiculo."' WHERE matricula='".$matricula."' ";

if($dbh->query($sql_actualizar)) {
    echo "<script>
    Swal.fire({
        title: 'CAMBIO DE CARRERA ACTUALIZADO CORRECTAMENTE',
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '../Update.html';
        }
    });
    </script>";
} else {
    echo "<script>
    Swal.fire({
        title: 'Oops...',
        text: 'ERROR AL REGISTRAR EL CAMBIO DE CARRERA.',
        icon: 'error',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '../Update.html';
        }
    });
    </script>";
}
?>