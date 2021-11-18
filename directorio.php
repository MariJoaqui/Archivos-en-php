<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos y Directorios</title>

    <link rel="stylesheet" href="css/estilos.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="row">

        <h1>Crear directorio</h1>

        <form class="col s12" action="creacionDeDirectorios.php" method="POST">
            <div class="row">
                <div class="input-field col s6">
                    <input id="input_text" type="text" data-length="10" name="nombreDirectorio" required>
                    <label for="input_text">Nombre del Directorio</label>
                </div>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action btnD">Crear Directorio</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://kit.fontawesome.com/d6ff169d2d.js" crossorigin="anonymous"></script>
</body>
</html>