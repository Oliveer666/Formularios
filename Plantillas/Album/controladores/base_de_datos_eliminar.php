<script src="js/sweetalert2@11.js"></script>.
<?php
require "config/conexion.php";

$X = $_POST["-Variable name-"];

$sql = "DELETE FROM -Nombre de la Tabla-
        WHERE -Nombre de la Columna(C) o Cod/ID- = '".$X."'";

if($dbh->query($sql)) {
    echo "<script>
    Swal.fire({
        title: 'CORRECTO',
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'Ejemplo.html';
        }
    });
    </script>";
} else {
    echo "<script>
    Swal.fire({
        title: 'Oops...',
        text: 'INCORRECTO',
        icon: 'error',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'Ejemplo.html';
        }
    });
    </script>";
}
?>