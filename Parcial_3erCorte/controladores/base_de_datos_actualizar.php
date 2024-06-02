<script src="../js/sweetalert2@11.js"></script>.
<?php
require "../config/conexion.php";

$codigo = $_POST["code"];
$cantidad = $_POST["cantidad"];

$valor = 9200;
$cantidad_total = $valor * $cantidad; 

if($cantidad > 0){
    $sql = "UPDATE carne
        SET kilo = '".$cantidad."', valor_total = '".$cantidad_total."' 
        WHERE cod = '".$codigo."' ";

    if($dbh->query($sql)) {
        echo "<script>
        Swal.fire({
            title: 'Su Venta se Actualizo Correctamente',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../Insert.php';
            }
        });
        </script>";
    } else {
        echo "<script>
        Swal.fire({
            title: 'Oops...',
            text: 'Error al Actualizar la Venta',
            icon: 'error',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../Insert.php';
            }
        });
        </script>";
    }
    }else{
        echo "<script>
        Swal.fire({
            title: 'Oops...',
            text: '¡Su Venta debe ser mayor a 0!',
            icon: 'error',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../Insert.php';
            }
        });
        </script>";
    }
?>