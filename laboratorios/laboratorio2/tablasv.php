<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tablas de Multiplicar</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <h1>Tablas de Multiplicar</h1>
    <form method="POST" action="tablas.php">
        <label for="numero">Elige un número (1-10):</label>
        <input type="number" name="numero" id="numero" min="1" max="10" required>
        <button type="submit">Generar</button>
    </form>

    <?php if (!empty($resultado)): ?>
        <div class="resultado"><?= $resultado ?></div>
    <?php endif; ?>
</div>

<?php require "../footer.php"; ?>
</body>
</html>
