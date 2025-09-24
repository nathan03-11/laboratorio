<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Laboratorio 4</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>

  <header>
    <h1>Laboratorio 4</h1>
    <nav>
      <a href="cedula.php">Cedula</a>
    </nav>
  </header>

  <div class="contenido">
    <h2>CONSIGNA</h2>
    <p>
      <h3>Parte 1</h3>
      Se desea implementar por medio de una aplicación web un sistema comprobador de
      cédulas de identidad uruguayas. Los números de las mismas no son meros números
      aleatorios sin sentido, sino que el dígito verificador (último dígito) resulta de una
      operación matemática entre los primeros 7 dígitos.  
      Se pretende en esta sección contar con un comprobador de dígitos verificadores dada
      una CI cualquiera, es decir, el programa debe comprobar que una CI es válida o no.
      <br><br>
      <h3>Parte 2</h3>
      En paralelo y dentro de la misma app, se desea implementar un sistema generador de
      dígitos verificadores. Dados los primeros 7 números de una CI, el software debe
      informar cuál es el dígito correspondiente correcto.
    </p>
  </div>

  <?php require "../footer.php"; ?>
</body>
</html>
