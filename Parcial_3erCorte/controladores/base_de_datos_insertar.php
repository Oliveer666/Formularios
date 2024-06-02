<script src="../js/sweetalert2@11.js"></script>.
<?php
require "../config/conexion.php";

$cantidad = $_POST["cantidad"];
$carne = $_POST["carne"];

$valor = 9200;
$valor_total = $valor * $cantidad; 

if($cantidad > 0){
    $sql = "INSERT INTO carne
    (fecha_sys, kilo, tipo_carne, valor, valor_total) 
VALUES (now(), '".$cantidad."', '".$carne."', '".$valor."', '".$valor_total."')";

if($dbh->query($sql)) {
    echo "<script>
    Swal.fire({
        title: 'Su Venta se Registro Correctamente ',
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
        text: 'Error al Registrar la Venta',
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