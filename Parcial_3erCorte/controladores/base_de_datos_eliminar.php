<script src="../js/sweetalert2@11.js"></script>.
<?php
require "../config/conexion.php";

$code = $_POST["code"];

$sql = "DELETE FROM carne
        WHERE cod = '".$code."'";

if($dbh->query($sql)) {
    echo "<script>
    Swal.fire({
        title: 'Su Venta se Elimino Correctamente',
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '../Delete.html';
        }
    });
    </script>";
} else {
    echo "<script>
    Swal.fire({
        title: 'Oops...',
        text: 'Error al Eliminar la Venta',
        icon: 'error',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '../Delete.html';
        }
    });
    </script>";
}
?>