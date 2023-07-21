<?php
if (isset($_POST['submit'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacion = $_POST['operacion'];

    switch ($operacion) {
        case 'suma':
            $resultado = $numero1 + $numero2;
            break;
        case 'resta':
            $resultado = $numero1 - $numero2;
            break;
        case 'multiplicacion':
            $resultado = $numero1 * $numero2;
            break;
        case 'division':
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                echo 'Error: División por cero.';
                exit;
            }
            break;
        default:
            echo 'Error: Operación no válida.';
            exit;
    }

    echo 'El resultado es: ' . $resultado;
}
?>
