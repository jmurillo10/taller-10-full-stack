<?php
if (isset($_POST['submit'])) {
    $edad = $_POST['edad'];

    if ($edad < 18) {
        echo "No es mayor de edad";
    } else {
        echo "Es mayor de edad";
    }
}
?>

