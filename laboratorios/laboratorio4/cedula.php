<?php
$resultado = "";
$error = "";

function calcularDigitoVerificador($numero) {
    // Asegurarse de que sean exactamente 7 dígitos
    $numero = str_pad($numero, 7, "0", STR_PAD_LEFT);

    // Multiplicadores oficiales de izquierda a derecha
    $multiplicadores = [2, 9, 8, 7, 6, 3, 4];
    $suma = 0;

    for ($i = 0; $i < 7; $i++) {
        $suma += intval($numero[$i]) * $multiplicadores[$i];
    }

    $resto = $suma % 10;
    $digito_verificador = ($resto === 0) ? 0 : 10 - $resto;

    return $digito_verificador;
}

if (isset($_POST['enviar'])) {
    $cedula7 = preg_replace('/\D/', '', $_POST["cedula7"]); // limpiar no numéricos

    if (strlen($cedula7) == 7) {
        $resultado = calcularDigitoVerificador($cedula7);
    } else {
        $error = "Debes ingresar exactamente 7 dígitos numéricos.";
    }
}

// cargar vista
require "vista_cedula.php";
