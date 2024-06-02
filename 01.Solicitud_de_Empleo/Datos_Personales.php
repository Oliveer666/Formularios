<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>01. Solicitud de Empleo</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/dashboard_style.css">
    </head>
    <body>
        <div class="registration-form">
            <form method="post" action="Educacion.php">
                <div class="form-group">
                    <h2 class="form-title">DATOS PERSONALES</h2>
                </div>

                <div class="form-group">
                    <label>Nombre Completo (*)</label>
                    <input type="text" class="form-control item" name="nombre_completo" placeholder="Ingresa tu nombre completo" required>
                </div>
                <div class="form-group">
                    <label>Correo (*)</label>
                    <input type="email" class="form-control item" name="correo" placeholder="Ingresa tu correo electronico" required>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Celular (*)</label>
                        <input type="tel" class="form-control item" name="celular" placeholder="Ingresa tu numero celular" required>
                    </div>
                    <div class="col">
                        <label>Dirección (*)</label>
                        <input type="text" class="form-control item" name="direccion" placeholder="Ingresa tu dirección" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Sobre Mí</label><br>
                    <textarea name="perfil_profesional" class="form-control item" placeholder="Habla sobre tu perfil profesional" maxlength="2000"></textarea>
                </div>
                
                <div class="form-group">
                    <button type="submit" id="finalizacion" class="btn btn-block create-account">Siguiente</button>
                </div>
            </form>
            <?php
                include "controladores/Base_de_Datos.php";

                $nombre_completo = $_POST["nombre_completo"];
                $correo = $_POST["correo"];
                $celular = $_POST["celular"];
                $direccion = $_POST["direccion"];
                $perfil_profesional = $_POST["perfil_profesional"];
            ?>
        </div>
    </body>
</html>