<?php require_once "desencriptador.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desencriptador X' a X</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
    <div class="container">

        <h2>Desencriptador</h2>

        <form method="post">

            <label for="mensaje">Introduce el mensaje cifrado:</label>
            <input type="text" id="mensaje" name="mensaje" placeholder="Escribe el mensaje encriptado" value="<?php echo htmlspecialchars($mensaje); ?>">
            <button type="submit">Desencriptar</button>

        </form>

        <?php if ($resultado !== "") { ?>

            <div class="resultado">
                <strong>Mensaje original:</strong><br>
                <span><?php echo htmlspecialchars($resultado); ?></span>
            </div>
        
        <?php } ?>
        
    </div>
</body>
</html>