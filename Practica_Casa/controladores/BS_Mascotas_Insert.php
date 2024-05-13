<script src="../js/sweetalert2@11.js"></script>.

<?php
require "../config/conexion.php";

$documento = $_POST["documento"];
$nombre_dueño = $_POST["nombre_dueño"];
$nombre_mascota = $_POST["nombre_mascota"];
$fecha_mascota = $_POST["fecha_mascota"];

$sql_insertar = "INSERT INTO mascotas
    (fecha_sys, documento, nombre_dueño, nombre_mascota, fecha_mascota)
VALUES (now(), '".$documento."', '".$nombre_dueño."', '".$nombre_mascota."', '".$fecha_mascota."')";

try{
    if($dbh->query($sql_insertar)){
        echo "<script>
            Swal.fire({
                title: 'INSCRIPCION REGISTRADA CORRECTAMENTE',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../Mascotas_Insert.html';
                }
            });
        </script>";
    }else{
        echo "<script>
            Swal.fire({
                title: 'ERROR AL PROCESAR LA INSCRIPCION.',
                icon: 'error',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../Mascotas_Insert.html';
                }
            });
        </script>";
    }
}catch(PDOException $e){
    if ($e->getCode() == 23000 && $e->errorInfo[1] == 1062) {
            echo "<script>
                Swal.fire({
                    title: 'SE HA DETECTADO UNA DUPLICACIÓN',
                    text: 'Ya existe un registro con ese documento en la base de datos.',
                    icon: 'error',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Aceptar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '../Index.html';
                    }
                });
            </script>";
    }else{
            echo "<script>
            Swal.fire({
                title:'ERROR AL REGISTRAR.',
                text: '¿Error?..',
                icon: 'error',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../Index.html';
                }
            });
        </script>";
    }
}
?>