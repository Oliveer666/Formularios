<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Proyecto</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <main class="col">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">TABLA DE REGISTROS</h1>
        </div>
        <section class="text-center container">
            <form method="post" id="searchForm">
                <div>
                    <label>Buscar por Nombre</label>
                    <input type="text" name="buscar" class="form-control">
                </div><br>
            </form>
            <table id="resultTable" class="table table-bordered table-striped">
                <tr>
                    <td>Cod</td>
                    <td>Nombre Proyecto</td>
                    <td>Nombre Dueño</td>
                    <td>Celular</td>
                    <td>Correo</td>
                    <td>Facultad</td>
                </tr>
            </table>
        </section>
    </main>

    <script src="scripts/search.js"></script>
</body>
</html>