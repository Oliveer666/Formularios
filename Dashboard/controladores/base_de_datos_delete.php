<script src="../js/sweetalert2@11.js"></script>
<style>
        body {
            color: #999999;
        }
</style>.

<?php
    require "../config/conexion.php";

    $code = $_POST["text_code"];

    $sql_borrar = "DELETE FROM pago WHERE cod='".$code."' ";

    if($dbh->query($sql_borrar)) {
        echo "<script>
        Swal.fire({
            title: 'EL USUARIO HA SIDO BORRADO CORRECTAMENTE',
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
            text: 'ERROR AL BORRAR EL USUARIO.',
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