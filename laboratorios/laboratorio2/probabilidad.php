<?php
// Factorial iterativo (sin recursividad)
function factorial($n) {
    $resultado = 1;
    for ($i = 2; $i <= $n; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

// Función para calcular combinaciones y probabilidad
function calcularProbabilidad() {
    $combinaciones = factorial(48) / (factorial(5) * factorial(48 - 5));
    $probabilidad = 1 / $combinaciones;

    return [
        'combinaciones' => number_format($combinaciones, 0, ',', '.'),
        'probabilidad'  => number_format($probabilidad, 10)
    ];
}

$datos = null;
$numeros = [];
$mensajeError = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    for ($i = 1; $i <= 5; $i++) {
        $num = intval($_POST["num$i"]);

        // Validaciones con switch
        switch (true) {
            case ($num < 1 || $num > 48):
                $mensajeError = "Los números deben estar entre 1 y 48.";
                break 2; // corta el for y el switch
            case in_array($num, $numeros):
                $mensajeError = "No puede repetir números.";
                break 2;
            default:
                $numeros[] = $num;
        }
    }

    if (!$mensajeError) {
        $datos = calcularProbabilidad();
    }
}
require "probabilidadv.php";