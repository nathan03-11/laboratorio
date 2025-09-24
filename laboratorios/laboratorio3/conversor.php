<?php
$resultado = "";
$base_texto = "";
$numero = "";

if (isset($_POST['envio'])) {
    $numero = $_POST['numero']; // número ingresado
    $base = $_POST['base'];     // base destino

    switch ($base) {
        case '2':
            $resultado = base_convert($numero, 10, 2);
            $base_texto = "Binario";
            break;

        case '8':
            $resultado = base_convert($numero, 10, 8);
            $base_texto = "Octal";
            break;

        case '16':
            $resultado = strtoupper(base_convert($numero, 10, 16));
            $base_texto = "Hexadecimal";
            break;

        default:
            $resultado = "";
            $base_texto = "";
    }
}

// cargar la vista
require "vista_conversor.php";
