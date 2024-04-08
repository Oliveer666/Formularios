<script src="../js/sweetalert2@10.js"></script>

<?php
    require "../config/conexion.php";

    $code = $_POST["text_code"];

    $sql_borrar = "DELETE FROM `personas` WHERE cod='".$code."' ";

    if($dbh->query($sql_borrar))
    {
        echo "<script>
                document.getElementById('boton').addEventListener('click', function() {
                    Swal.fire({
                        title: 'Borrando...',
                        text: 'La persona ha sido borrada. Seras redirigido a otro archivo.',
                        icon: 'success',
                        timer: 2000, // Tiempo de espera antes de la redirección (en milisegundos)
                        showConfirmButton: false
                    }).then(function() {
                        // Redirigir a otro archivo después de mostrar SweetAlert
                        window.location.href = '../index.html';
                    });
                });
            </script>";
    }else{
        echo "Error borrando la persona";
    }
?>