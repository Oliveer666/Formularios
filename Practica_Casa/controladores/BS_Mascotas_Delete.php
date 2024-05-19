<script src="../js/sweetalert2@11.js"></script>.
<?php
require "../config/conexion.php";

$documento = $_POST["documento"];

$sql_eliminar = "DELETE FROM mascotas WHERE documento='".$documento."' ";

if($dbh->query($sql_eliminar)){
    echo "<script>
        Swal.fire({
            title: 'INSCRIPCION ELIMANDA CORRECTAMENTE',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../Mascotas_Delete.html';
            }
        });
    </script>";
}else{
    echo "<script>
        Swal.fire({
            title: 'ERROR AL ELIMINAR LA INSCRIPCION.',
            icon: 'error',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../Mascotas_Delete.html';
            }
        });
    </script>";
}
?>