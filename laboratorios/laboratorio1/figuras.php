<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Calculadora de Áreas</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <div class="container">
    <h1>Calculadora de Áreas</h1>
    <form method="post" action="areas.php">
      <label for="figura">Seleccione una figura:</label>
      <select id="figura" name="figura" required onchange="mostrarCampos()">
        <option value="">--Elige una opción--</option>
        <option value="rectangulo">Rectángulo</option>
        <option value="cuadrado">Cuadrado</option>
        <option value="triangulo">Triángulo</option>
        <option value="circulo">Círculo</option>
      </select>

      <div id="campos"></div>
      <input type="submit" value="Calcular Área" name="enviar">
    </form>

    <!-- Mostramos el resultado solo si existe -->
    <?php if (!empty($resultado)): ?>
      <div class="resultado"><?= htmlspecialchars($resultado) ?></div>
    <?php endif; ?>

    <?php if (!empty($error)): ?>
      <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
  </div>

  <script>
    function mostrarCampos() {
      const figura = document.getElementById("figura").value;
      const campos = document.getElementById("campos");
      campos.innerHTML = "";

      if (figura === "rectangulo") {
        campos.innerHTML = "<label>Base:</label><input type='number' name='base' min='1' required>" +
                           "<label>Altura:</label><input type='number' name='altura' min='1' required>";
      } else if (figura === "cuadrado") {
        campos.innerHTML = "<label>Lado:</label><input type='number' name='lado' min='1' required>";
      } else if (figura === "triangulo") {
        campos.innerHTML = "<label>Base:</label><input type='number' name='base' min='1' required>" +
                           "<label>Altura:</label><input type='number' name='altura' min='1' required>";
      } else if (figura === "circulo") {
        campos.innerHTML = "<label>Radio:</label><input type='number' name='radio' min='1' required>";
      }
    }
  </script>

  <?php require "../footer.php"; ?>
</body>
</html>
