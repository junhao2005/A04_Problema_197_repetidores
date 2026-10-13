<?php
// Función para desencriptar el mensaje cifrado X'' a X'
require_once __DIR__ . '/desencriptador.php';

$resultado = ""; // para guardar el mensaje ya descifrado
$entrada = "";  // para guardar el mensaje cifrado que se ha escrito el user

// Comprobamos si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entrada = $_POST["mensaje_cifrado"];
    
    // Llamamos función para desencriptar (X'' -> X')
    $resultado = desencriptar($entrada);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desencriptador - Problema 197</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>

<div class="container">
    <h2>Desencriptador de Mensajes (X'' -> X')</h2>
    
    <form method="POST" action="">
        <label for="mensaje_cifrado">Introduce el mensaje cifrado ($X''$):</label>
        <input type="text" id="mensaje_cifrado" name="mensaje_cifrado" value="<?php echo htmlspecialchars($entrada); ?>" placeholder="Ej: BnodJos, dBneam" required>
        
        <button type="submit">Desencriptar</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="resultado">
            <strong>Resultado intermedio ($X'$):</strong><br>
            <span><?php echo htmlspecialchars($resultado); ?></span>
        </div>
    <?php endif; ?>
</div>

</body>
</html>