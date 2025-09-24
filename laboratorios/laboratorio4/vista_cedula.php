<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Dígito Verificador CI</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">
    <h2>Calcular Dígito Verificador</h2>
    <form method="post" action="cedula.php">
      <label for="cedula7">Ingresa los primeros 7 dígitos:</label>
      <input type="text" id="cedula7" name="cedula7" maxlength="7" required>
      <input type="submit" value="Calcular" name="enviar">
    </form>

    <?php if ($resultado !== ""): ?>
      <div class="resultado">Dígito verificador: <?= htmlspecialchars($resultado) ?></div>
    <?php endif; ?>

    <?php if (!empty($error)): ?>
      <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
</div>

<?php require "../footer.php"; ?>
</body>
</html>
