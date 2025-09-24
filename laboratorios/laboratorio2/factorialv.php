<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Factorial</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <h1>Cálculo de Factorial</h1>
    <form method="POST" action="factorial.php">
        <label for="numero">Ingrese un número:</label>
        <input type="number" name="numero" id="numero" min="0" required value="<?= htmlspecialchars($numero) ?>">
        <button type="submit">Calcular</button>
    </form>

    <?php if (!empty($resultado)): ?>
        <div class="resultado"><?= $resultado ?></div>
    <?php endif; ?>
</div>

<?php require "../footer.php"; ?>
</body>
</html>
