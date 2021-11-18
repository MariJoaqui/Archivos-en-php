<?php

//Direccionamiento de los botones
if (isset($_POST['si']) && $_POST['si'] == 'ir') {
    header("Location: directorio.php");
}
else if (isset($_POST['no']) && $_POST['no'] == 'volver') {
    header("Location: mostrarArchivos.php");
}
else if (isset($_POST['a']) && $_POST['a'] == 'inicio') {
    header("Location: index.php");
}

?>