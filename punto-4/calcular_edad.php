<?php
if (isset($_POST['submit'])) {
    $fecha_nacimiento = $_POST['fecha_nacimiento'];

    $fecha_nacimiento = new DateTime($fecha_nacimiento);
    $hoy = new DateTime();
    $edad = $hoy->diff($fecha_nacimiento)->y;

    if ($edad < 18) {
        echo "Su edad es " . $edad . ", por tanto: No es mayor de edad";
    } else {
        echo "Su edad es " . $edad . ", por tanto: Es mayor de edad";
    }
}
?>

