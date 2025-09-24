<?php
// Inicializar variables para evitar warnings
$resultado = "";
$error = "";

if (isset($_POST['enviar'])) {
    $figura = $_POST['figura'];

    switch ($figura) {
        case "rectangulo":
            $base = (float)$_POST['base'];
            $altura = (float)$_POST['altura'];
            $resultado = "El área del rectángulo es: " . ($base * $altura);
            break;

        case "cuadrado":
            $lado = (float)$_POST['lado'];
            $resultado = "El área del cuadrado es: " . ($lado * $lado);
            break;

        case "triangulo":
            $base = (float)$_POST['base'];
            $altura = (float)$_POST['altura'];
            $resultado = "El área del triángulo es: " . (($base * $altura) / 2);
            break;

        case "circulo":
            $radio = (float)$_POST['radio'];
            $resultado = "El área del círculo es: " . (pi() * pow($radio, 2));
            break;

        default:
            $error = "Debes seleccionar una figura válida.";
    }
}

// Ahora incluí la vista si la tenés separada
require "figuras.php";
