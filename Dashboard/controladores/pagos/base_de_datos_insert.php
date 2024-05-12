<script src="../../js/sweetalert2@11.js"></script>.
<?php
    require "../../config/conexion.php";

    $nombre_completo = $_POST["text_name"];
    $documento = $_POST["cc_document"];
    $fecha_nacimiento = $_POST["birth_date"];
    $celular = $_POST["number_phone"];
    $genero = $_POST["gender"];

    $sql_insertar = "INSERT INTO personas 
        (fecha_sys, nombre, documento, fecha_nacimiento, celular, genero) 
    VALUES (now(), '".$nombre_completo."', '".$documento."', '".$fecha_nacimiento."', '".$celular."', '".$genero."')";

    if($dbh->query($sql_insertar)) {
        echo "<script>
        Swal.fire({
            title: 'INSCRIPCION REGISTRADA CORRECTAMENTE',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../../Index.html';
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
                window.location.href = '../../Index.html';
            }
        });
        </script>";
    }
?>