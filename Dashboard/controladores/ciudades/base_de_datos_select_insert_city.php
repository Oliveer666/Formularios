<script src="../../js/sweetalert2@11.js"></script>.
<?php
    require "../../config/conexion.php";

    $nombre = $_POST["nombre"];
    $ciudad = $_POST["ciudad"];

    $sql_insertar = "INSERT INTO datos 
        (fecha_sys, nombre, ciudad) 
    VALUES (now(), '".$nombre."', '".$ciudad."')";

    if($dbh->query($sql_insertar)) {
        echo "<script>
        Swal.fire({
            title: 'INSCRIPCION REGISTRADA CORRECTAMENTE',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../../Insert_Ciudades.php';
            }
        });
        </script>";
    } else {
        echo "<script>
        Swal.fire({
            title: 'Oops...',
            text: 'ERROR AL REGISTRAR LOS DATOS.',
            icon: 'error',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../../Insert_Ciudades.php';
            }
        });
        </script>";
    }
?>