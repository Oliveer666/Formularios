<script src="../../js/sweetalert2@11.js"></script>.
<?php
    require "../../config/conexion.php";

    $id = $_POST["id"];
    $nuevo_valor = $_POST["nuevo_valor"];
    $restante = $_POST["restante"];

    $sql_actualizar = "UPDATE pago SET valor_pagado='".$nuevo_valor."', valor_restante='".$restante."' WHERE cod='".$id."' ";

    if($dbh->query($sql_actualizar)) {
        echo "<script>
        Swal.fire({
            title: 'NUEVO VALOR DE PAGO REGISTRADO CORRECTAMENTE',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../../Update.html';
            }
        });
        </script>";
    } else {
        echo "<script>
        Swal.fire({
            title: 'Oops...',
            text: 'ERROR AL REGISTRAR EL NUEVO VALOR DE PAGO.',
            icon: 'error',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../../Update.html';
            }
        });
        </script>";
    }
?>