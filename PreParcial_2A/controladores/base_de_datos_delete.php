<script src="../js/sweetalert2@11.js"></script>
<style>
        body {
            color: #999999;
        }
</style>.

<?php
require "../config/conexion.php";

$matricula = $_POST["matricula"];

$sql_eliminar = "DELETE FROM venta_soat WHERE matricula='".$matricula."' ";
    
if($dbh->query($sql_eliminar))
{
    echo "<script>
        Swal.fire({
            title: 'SOAT ELIMINADO CORRECTAMENTE',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../Delete.html';
            }
        });
        </script>";
}else{
    echo "<script>
        Swal.fire({
            title: 'ERROR AL ELIMINAR EL SOAT',
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