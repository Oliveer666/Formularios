<script src="../js/sweetalert2@11.js"></script>.
<?php
    require "../config/conexion.php";

    $nombre_proyecto = $_POST["nombre_proyecto"];
    $nombre_dueño = $_POST["nombre_dueño"];
    $celular = $_POST["celular"];
    $correo = $_POST["correo"];
    $facultad = $_POST["facultad"];


    $sql_insertar = "INSERT INTO semilleros 
        (fecha_sys, nombre_proyecto, nombre_dueño, celular, correo, facultad) 
    VALUES (now(), '".$nombre_proyecto."', '".$nombre_dueño."', '".$celular."', '".$correo."', '".$facultad."')";

    if($dbh->query($sql_insertar)) {
        echo "<script>
        Swal.fire({
            title: 'INSCRIPCION REGISTRADA CORRECTAMENTE',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../Registrar.php';
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
                window.location.href = '../Registrar.php';
            }
        });
        </script>";
    }
?>