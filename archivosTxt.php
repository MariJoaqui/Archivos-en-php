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
    
    <div class="card-panel">
        <span class="teal-text text-lighten-3">Archivo creado exitosamente</span>
    </div>

    <div class="row">
        <form class="col s12" action="creandoDirectorios.php" method="POST">

            <h1>¿Qué desea hacer?</h1>

            <div class="row">
                <div class="col s2">
                </div>
                <div class="col s2">
                <button class="btn waves-effect waves-light" type="submit" name="a" value="inicio">ArchivosTxt</button>
                </div>
                <div class="col s2">
                    <button class="btn waves-effect waves-light" type="submit" name="si" value="ir">Directorios</button>
                </div>
                <div class="col s6">
                    <button class="btn waves-effect waves-light" type="submit" name="no" value="volver">Descargas</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://kit.fontawesome.com/d6ff169d2d.js" crossorigin="anonymous"></script>
</body>
</html>