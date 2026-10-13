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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 50px;
            display: flex;
            justify-content: center;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
        }
        h2 {
            color: #333;
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
        .resultado {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9ecef;
            border-left: 4px solid #007bff;
            border-radius: 4px;
            word-break: break-all;
        }
    </style>
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