<script src="../js/sweetalert2@11.js"></script>.

<?php
    require "config/conexion.php";

    $sql_datos_personales = "INSERT INTO datos_personales
        (fecha_sys, nombre_completo, correo, celular, direccion, perfil_profesional)
    VALUES (now(), '".$nombre_completo."', '".$correo."', '".$celular."', '".$direccion."', '".$perfil_profesional."')";

    $sql_datos_personales = "INSERT INTO educacion
        (fecha_sys, institucion, grado, fecha_inicio, fecha_final)
    VALUES (now(), '".$institucion."', '".$grado."', '".$fecha_inicio."', '".$fecha_final."')";

try{
    if($dbh->query($sql_insertar)){
    echo "<script>
            Swal.fire({
                title: 'DATOS REGISTRADOS CORRECTAMENTE',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../Experiencia_Laboral.html';
                }
            });
        </script>";
    }else{
        echo "<script>
            Swal.fire({
                title: 'ERROR AL REGRISTRAR LOS DATOS',
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