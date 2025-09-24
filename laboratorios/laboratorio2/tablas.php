<?php
$resultado = "";

function generarTabla($numero) {
    $resultado = "<h2>Tabla del $numero</h2><table><tr><th>Operación</th><th>Resultado</th></tr>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado .= "<tr><td>$numero x $i</td><td>" . ($numero * $i) . "</td></tr>";
    }
    $resultado .= "</table>";
    return $resultado;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = intval($_POST['numero']);
    $resultado = generarTabla($numero);
}


require "tablasv.php";
