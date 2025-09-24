<?php
class Factorial {
    public function calcular($n) {
        if ($n < 0) return "No existe factorial para números negativos";
        return ($n <= 1) ? 1 : $n * $this->calcular($n - 1);   
    }
}

$resultado = "";
$numero = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = intval($_POST['numero']);
    $fact = new Factorial();
    $resultado = "El factorial de $numero es: " . $fact->calcular($numero);
}


require "factorialv.php";
