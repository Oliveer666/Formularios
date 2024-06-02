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
            <form method="post" action="Experiencia_Laboral.php">
                <div class="form-group">
                    <h2 class="form-title">EDUCACIÓN</h2>
                </div>

                <div class="form-group">
                    <label>Institución</label>
                    <input type="text" class="form-control item" name="institucion" placeholder="Nombre de la institución">
                </div>
                <div class="form-group">
                    <label>Grado Profesional</label>
                    <select class="form-control item custom-select" name="grado">
                        <option disabled selected>Seleccione una opción</option>
                        <option>Tecnico</option>
                        <option>Tecnologo</option>
                        <option>Profesional</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Fecha de Inicio y Final</label>
                    <div class="row">
                        <div class="col">
                            Desde <input type="date" class="form-control item col" name="fecha_inicio">
                        </div>
                        <div class="col">
                            Hasta <input type="date" class="form-control item col" name="fecha_final">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <button type="submit" id="finalizacion" class="btn btn-block create-account">Siguiente</button>
                </div>
            </form>
            <?php
                include "controladores/Base_de_Datos.php";

                $institucion = $_POST["institucion"];
                $grado = $_POST["grado"];
                $fecha_inicio = $_POST["fecha_inicio"];
                $fecha_final = $_POST["fecha_final"];
            ?>
        </div>
    </body>
</html>