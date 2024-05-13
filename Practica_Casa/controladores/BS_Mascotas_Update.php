<script src="../js/sweetalert2@11.js"></script>.

<?php
require "../config/conexion.php";

$documento = $_POST["documento"];
$nombre_dueño = $_POST["nombre_dueño"];
$nombre_mascota = $_POST["nombre_mascota"];
$fecha_mascota = $_POST["fecha_mascota"];

$sql_actualizar = "UPDATE mascotas SET nombre_dueño='".$nombre_dueño."', nombre_mascota='".$nombre_mascota."', fecha_mascota='".$fecha_mascota."' WHERE documento='".$documento."' ";

try{
    if($dbh->query($sql_actualizar)){
        echo "<script>
            Swal.fire({
                title: 'INSCRIPCION ACTUALIZADA CORRECTAMENTE',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../Mascotas_Update.html';
                }
            });
        </script>";
    }else{
        echo "<script>
            Swal.fire({
                title: 'ERROR AL ACTUALIZAR LA INSCRIPCION.',
                icon: 'error',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../Mascotas_Update.html';
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