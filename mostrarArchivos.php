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

    <h1>Descargar Archivos guardados</h1>

    <?php
    $abrir = 'ArchivosTxt'; //Carpeta de archivos

    //Preparación del archivo para descargar
    if ($open = opendir($abrir)) {
        while ($archivo = readdir($open)) {
            if ($archivo != '.' && $archivo != '..') {
                echo '<div class="card-panel teal lighten-2">
                        <a href="descargarTxt.php?file=' . $archivo . '" class="btn-floating btn-large waves-effect waves-light black">
                            <i class="fas fa-cloud-download-alt"></i>
                        </a>' . ' ' . $archivo . 
                    '</div>';

            }
        }
    }

    $abrirDirectorio = 'Directorios';

    if ($openDirectorio = opendir($abrirDirectorio)) {
        while ($archivoDirectorio = readdir($openDirectorio)) {
            if ($archivoDirectorio != '.' && $archivoDirectorio != '..') {
                echo '<div class="card-panel teal lighten-2">
                        <a href="descargarTxt.php?file=' . $archivoDirectorio . '" class="btn-floating btn-large waves-effect waves-light black">
                            <i class="fas fa-cloud-download-alt"></i>
                        </a>' . ' ' . $archivoDirectorio . 
                    '</div>';

            }
        }
    }
    
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://kit.fontawesome.com/d6ff169d2d.js" crossorigin="anonymous"></script>
</body>
</html>