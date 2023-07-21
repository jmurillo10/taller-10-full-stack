<?php
if (isset($_GET['nombre']) && isset($_GET['apellido']) && isset($_GET['cedula'])) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $cedula = $_GET['cedula'];

    echo "Nombre: $nombre <br/>";
    echo "Apellido: $apellido <br/>";
    echo "Cedula: $cedula";
} else {
    echo "Por favor, completa el formulario.";
}
?>


