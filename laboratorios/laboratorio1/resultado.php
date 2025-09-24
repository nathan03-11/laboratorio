<?php
$resultados = [];
$error = "";

if (isset($_POST['envio'])) {  
    $num1 = (int)$_POST['numero1'];
    $num2 = (int)$_POST['numero2'];

    $resultados[] = "La suma es: " . ($num1 + $num2);
    $resultados[] = "La resta es: " . ($num1 - $num2);
    $resultados[] = "La multiplicación es: " . ($num1 * $num2);

    if ($num2 != 0) {
        $resultados[] = "La división es: " . ($num1 / $num2);
    } else {
        $error = "No se puede dividir entre 0";
    }
}


require "calculadorav.php";
