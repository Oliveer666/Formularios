<script src="../js/sweetalert2@11.js"></script>
<style>
        body {
            color: #999999;
        }
</style>.

<?php
require "../config/conexion.php";

$documento = $_POST["documento"];
$carrera = $_POST["carrera"];

$sql_actualizar_ventas = "UPDATE carrera_atletica SET carrera='".$carrera."' WHERE documento='".$documento."' ";

if($dbh->query($sql_actualizar_ventas)) {
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