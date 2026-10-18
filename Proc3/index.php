<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desencriptador Completo X'' a X</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
    <div class="container">

        <h2>Desencriptador Total</h2>

        <form method="post" action="">
            <label for="mensaje">Introduce el mensaje cifrado ($X''$):</label>
            <input type="text" id="mensaje" name="mensaje" placeholder="Ej: BnodJo s, dBneam" value="<?php echo htmlspecialchars($entrada); ?>">
            <button type="submit">Desencriptar Totalmente</button>
        </form>
        
        <br><br>

    <a class="boton" href="../index.php">Volver al menú principal</a>
    </div>
</body>
</html>