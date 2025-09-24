<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Conversor de Bases</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">
    <h1>Conversor de Bases</h1>
    <form method="post" action="conversor.php">
        <label for="numero">Número:</label>
        <input type="text" id="numero" name="numero" required>

        <label for="base">Base a convertir:</label>
        <select id="base" name="base" required>
            <option value="2">Binario</option>
            <option value="8">Octal</option>
            <option value="16">Hexadecimal</option>
        </select>

        <input type="submit" value="Convertir" name="envio">
    </form>

    <?php if (!empty($resultado)): ?>
        <div class="resultado">
            <p><strong>Número original:</strong> <?= htmlspecialchars($numero) ?></p>
            <p><strong>Convertido a <?= $base_texto ?>:</strong> <?= $resultado ?></p>
        </div>
    <?php endif; ?>
</div>

<?php require "../footer.php"; ?>

</body>
</html>
