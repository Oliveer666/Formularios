<script src="js/sweetalert2@11.js"></script>.
<?php
require "config/conexion.php";

$X = $_POST["-Variable name-"];
$Y = $_POST["-Variable name-"];

$sql = "INSERT INTO -Nombre de la Tabla-
    (fecha_sys, -Nombre de la Columna(A)-, -Nombre de la Columna(B)-) 
VALUES (now(), '".$X."', '".$Y."')";

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