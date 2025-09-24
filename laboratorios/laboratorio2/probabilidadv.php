<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Probabilidad 5 de Oro</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">
    <form method="POST" action="probabilidad.php">
        <p>Ingrese 5 números diferentes (del 1 al 48):</p>
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <input type="number" 
                   name="num<?= $i ?>" 
                   min="1" max="48" 
                   placeholder="Número <?= $i ?>" 
                   required 
                   value="<?= isset($numeros[$i-1]) ? htmlspecialchars($numeros[$i-1]) : '' ?>">
        <?php endfor; ?>
        <input type="submit" value="Calcular">
    </form>

    <?php if (!empty($mensajeError)): ?>
        <div class="error"><?= $mensajeError ?></div>
    <?php elseif (!empty($datos)): ?>
        <div class="resultado">
            <p><strong>Tus números:</strong> <?= implode(', ', $numeros) ?></p>
            <p><strong>Combinaciones posibles:</strong> <?= $datos['combinaciones'] ?></p>
            <p><strong>Probabilidad de ganar:</strong> <?= $datos['probabilidad'] ?></p>
        </div>
    <?php endif; ?>
</div>

<?php require "../footer.php"; ?>
</body>
</html>
