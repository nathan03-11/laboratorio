<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registro de Estudiante</title>
<link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container" style="max-width: 900px; display: flex; gap: 30px; margin: 40px auto; flex-wrap: wrap;">
<form method="post" action="estudiante.php" style="display: flex; gap: 30px; width: 100%; flex-wrap: wrap;">

    <div class="recuadro" style="flex: 2; min-width: 350px; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 2px 6px rgba(0,0,0,0.2);">
        <h2>Datos Personales</h2>
        <label>Nombre completo:</label><input type="text" name="nombre" required>
        <label>Cédula:</label><input type="text" name="cedula" required>
        <label>Localidad:</label><input type="text" name="localidad" required>
        <label>Dirección:</label><input type="text" name="direccion" required>
        <label>Teléfono:</label><input type="text" name="telefono" required>
        <label>Email:</label><input type="email" name="email" required>
    </div>

    <div class="recuadro compacto" style="flex: 1; min-width: 250px; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 2px 6px rgba(0,0,0,0.2);">
        <h2>Calificaciones</h2>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <div>
                    <label>Nota <?= $i ?>:</label>
                    <input type="number" name="nota<?= $i ?>" min="1" max="12" required>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <div style="width: 100%; text-align: center; margin-top: 20px;">
        <input type="submit" value="Registrar">
    </div>

</form>
</div>

<?php
if ($est) $est->imprimirFicha();
if ($resultado) echo "<div class='resultado'>$resultado</div>";
if ($error) echo "<div class='error'>$error</div>";
?>

<?php require "../footer.php"; ?>
</body>
</html>
