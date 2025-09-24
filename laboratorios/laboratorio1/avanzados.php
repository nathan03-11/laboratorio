<?php



$resultado = "";
$error = "";


if (isset($_POST['enviar'])) {
    $operacion = $_POST['operacion'];

    switch ($operacion) {
    case "cuadratica":
        $a = (float)$_POST['a'];
        $b = (float)$_POST['b'];
        $c = (float)$_POST['c'];

        $discriminante = $b*$b - 4*$a*$c;

        if ($discriminante > 0) {
            $x1 = (-$b + sqrt($discriminante)) / (2*$a);
            $x2 = (-$b - sqrt($discriminante)) / (2*$a);
            $resultado = "Raíces reales: x1 = $x1, x2 = $x2";
        } elseif ($discriminante == 0) {
            $x = -$b / (2*$a);
            $resultado = "Raíz única: x = $x";
        } else {
            $resultado = "No hay raíces reales.";
        }
        break;

    case "raiz":
        $num = (float)$_POST['number'];
        if ($num >= 0) {
            $resultado = "La raíz cuadrada de $num es: " . sqrt($num);
        } else {
            $error = "No se puede calcular la raíz cuadrada de un número negativo.";
        }
        break;

    case "potencia":
        $base = (float)$_POST['base'];
        $exponente = (float)$_POST['exponente'];
        $resultado = "$base elevado a la $exponente es: " . pow($base, $exponente);
        break;

    default:
        $error = "Debes seleccionar una operación válida.";
        break;
}

}


require "avanzadosv.php";
