<?php
require "conexion.php";

class Estudiante {
    public $nombre, $cedula, $localidad, $direccion, $telefono, $email, $notas;

    function __construct($n, $c, $l, $d, $t, $e, $notas) {
        $this->nombre = $n;
        $this->cedula = $c;
        $this->localidad = $l;
        $this->direccion = $d;
        $this->telefono = $t;
        $this->email = $e;
        $this->notas = $notas;
    }

    function promedio() {
        return round(array_sum($this->notas) / count($this->notas), 2);
    }

    function situacion() {
        $p = $this->promedio();
        if ($p <= 3) return "Examen Febrero";
        elseif ($p <= 7) return "Examen Reglamentado";
        else return "Exonerado";
    }

    function imprimirFicha() {
        echo "<div class='resultado'>";
        echo "<h2>Ficha del estudiante</h2>";
        echo "Nombre: $this->nombre <br>";
        echo "Cédula: $this->cedula <br>";
        echo "Localidad: $this->localidad <br>";
        echo "Dirección: $this->direccion <br>";
        echo "Teléfono: $this->telefono <br>";
        echo "Email: $this->email <br><br>";
        echo "Notas: " . implode(', ', $this->notas) . "<br>";
        echo "Promedio: " . $this->promedio() . "<br>";
        echo "Situación: " . $this->situacion() . "<br>";
        echo "</div>";
    }
}

$resultado = "";
$error = "";
$est = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $notas = [];
    for ($i = 1; $i <= 10; $i++) {
        $notas[] = (float)$_POST["nota$i"];
    }

    $est = new Estudiante(
        $_POST['nombre'],
        $_POST['cedula'],
        $_POST['localidad'],
        $_POST['direccion'],
        $_POST['telefono'],
        $_POST['email'],
        $notas
    );

    $jsonNotas = json_encode($notas);
    $promedio = $est->promedio();
    $situacion = $est->situacion();

    $sql = "INSERT INTO estudiantes 
            (nombre, cedula, localidad, direccion, telefono, email, notas, promedio, situacion) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ssssssssd",
        $est->nombre,
        $est->cedula,
        $est->localidad,
        $est->direccion,
        $est->telefono,
        $est->email,
        $jsonNotas,
        $promedio,
        $situacion
    );

    if ($stmt->execute()) {
        $resultado = "✅ Estudiante guardado correctamente";
    } else {
        $error = "❌ Error al guardar: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();

// cargar vista
require "vista_estudiante.php";
