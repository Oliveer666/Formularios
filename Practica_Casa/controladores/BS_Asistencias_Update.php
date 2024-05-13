<script src="../js/sweetalert2@11.js"></script>.

<?php
require "../config/conexion.php";

$codigo = $_POST["codigo"];
$nombre_estudiante = $_POST["nombre_estudiante"];
$semestre = $_POST["semestre"];

$sql_actualizar = "UPDATE asistencia_clases SET nombre_estudiante='".$nombre_estudiante."', semestre='".$semestre."' WHERE cod='".$codigo."' ";

if($dbh->query($sql_actualizar)){
    echo "<script>
        Swal.fire({
            title: 'ASISTENCIA ACTUALIZADA CORRECTAMENTE',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../Asistencias_Update.php';
            }
        });
    </script>";
}else{
    echo "<script>
        Swal.fire({
            title: 'ERROR AL ACTUALIZAR LA ASISTENCIA.',
            icon: 'error',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../Asistencias_Update.php';
            }
        });
    </script>";
}
?>