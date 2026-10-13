<?php require_once "desencriptador.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desencriptador X' a X</title>
</head>
<body>
    <div>

        <h1>Desencriptador</h1>

        <form method="post">

            <input type="text" name="mensaje" placeholder="Escribe el mensaje encriptado" value="<?php echo htmlspecialchars($mensaje); ?>">
            <button type="submit">Desencriptar</button>

        </form>

        <?php if ($resultado !== "") { ?>

            <p>Mensaje original: <?php echo htmlspecialchars($resultado); ?></p>
        
        <?php } ?>
        
    </div>
</body>
</html>