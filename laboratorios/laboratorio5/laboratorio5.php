<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Laboratorio 5</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>

  <header>
    <h1>Laboratorio 5</h1>
    <nav>
      <a href="estudiante.php">Registro Estudiante</a>
    </nav>
  </header>

  <div class="contenido">
    <h2>CONSIGNA</h2>
    <p>
      Se desea implementar por medio de una aplicación web un sistema de registro de
      datos de un estudiante de bachillerato.
      <br><br>
      Importarán los datos: nombre completo, cédula de identidad, localidad, dirección,
      teléfono, email. El sistema permitirá cargar todos estos datos además de las 10
      calificaciones obtenidas por el estudiante. Es importante que el sistema pueda procesar
      toda esta información, calcular el promedio general del estudiante y conocer la
      situación académica en la que queda:
      <br><br>
      Calif. 1 - 3: Examen Febrero  
      Calif. 4 - 7: Examen Reglamentado  
      Calif. 8 - 12: Exonerado
      <br><br>
      El sistema deberá imprimir la ficha del estudiante resultante de estos datos más
      los cálculos descritos y la leyenda correspondiente de acuerdo a los
      resultados obtenidos.
    </p>
  </div>

  <?php require "../footer.php"; ?>
</body>
</html>
