<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Calculadora Matemática</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <h2>Calculadora Matemática</h2>
    <form method="post" action="avanzados.php">
      <label for="operacion">Seleccione operación:</label>
      <select id="operacion" name="operacion" required onchange="mostrarCampos()">
        <option value="">--Elige una opción--</option>
        <option value="cuadratica">Ecuación cuadrática (Bhaskara)</option>
        <option value="raiz">Raíz cuadrada</option>
        <option value="potencia">Potencia</option>
      </select>

      <div id="campos"></div>
      <input type="submit" value="Calcular" name="enviar">
    </form>

    <!-- Mostrar resultado solo si existe -->
    <?php if (!empty($resultado)): ?>
      <div class="resultado"><?= htmlspecialchars($resultado) ?></div>
    <?php endif; ?>

    <?php if (!empty($error)): ?>
      <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
</div>

<script src="app.js"></script>

<?php require "../footer.php"; ?>
</body>
</html>
