<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora en PHP</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <h1>Calculadora</h1>
    <form method="POST" action="resultado.php">

        <input type="number" name="numero1" placeholder="Primer número" required>
        <input type="number" name="numero2" placeholder="Segundo número" required>
        <button type="submit" name="envio">Calcular</button>
    </form>

    <?php if (!empty($resultados)) : ?>
        <?php foreach ($resultados as $res) : ?>
            <div class="resultado"><?= $res ?></div>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if (!empty($error)) : ?>
        <div class="error"><?= $error ?></div>
    <?php endif; ?>
</div>

<?php require "../footer.php"; ?>
</body>
</html>
