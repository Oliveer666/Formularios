<script src="../js/sweetalert2@11.js"></script>.
<?php
require "../config/conexion.php";

$nombre_estudiante = $_POST["nombre_estudiante"];
$semestre = $_POST["semestre"];

$sql_insertar = "INSERT INTO asistencia_clases
    (fecha_sys, nombre_estudiante, semestre)
VALUES (now(), '".$nombre_estudiante."', '".$semestre."')";

if($dbh->query($sql_insertar)){
    echo "<script>
        Swal.fire({
            title: 'INSCRIPCION REGISTRADA CORRECTAMENTE',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../Asistencias_Insert.php';
            }
        });
    </script>";
}else{
    echo "<script>
        Swal.fire({
            title: 'ERROR AL PROCESAR LA INSCRIPCION.',
            icon: 'error',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../Asistencias_Insert.php';
            }
        });
    </script>";
}
?>