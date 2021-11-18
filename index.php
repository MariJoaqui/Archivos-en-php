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

    <h1>Creación de Archivos txt</h1>

    <div class="row">
        <form class="col s12" action="creandoArchivos.php" method="POST">
            <div class="row">
                <div class="input-field col s6">
                    <input id="input_text" type="text" data-length="10" name="nombreArchivo" required>
                    <label for="input_text">Nombre del Archivo</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea id="textarea2" class="materialize-textarea" data-length="120" name="contenidoArchivo"></textarea>
                    <label for="textarea2">Contenido</label>
                </div>
            </div>

            <input type="hidden" name="formulario">
            <button class="btn waves-effect waves-light" type="submit" name="action btn">Crear Archivo</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://kit.fontawesome.com/d6ff169d2d.js" crossorigin="anonymous"></script>
</body>
</html>