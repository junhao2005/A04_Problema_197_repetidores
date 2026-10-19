<?php 
require_once "desencriptador_completo.php"; 

$entrada = "";
$resultadoIntermedio = "";
$resultadoFinal = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["mensaje"])) {
    $entrada = $_POST["mensaje"];
    $resultados = desencriptarCompleto($entrada);
    
    $resultadoIntermedio = $resultados['intermedio'];
    $resultadoFinal = $resultados['final'];
}
?>

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
            <input type="text" id="mensaje" name="mensaje" placeholder="Ej: BnodJo s, dBneam" value="<?php echo htmlspecialchars($entrada); ?>" required>
            <button type="submit">Desencriptar Totalmente</button>
        </form>

        <?php if ($resultadoFinal !== "") { ?>
            <div class="resultado">
                <strong>Mensaje cifrado leído ($X''$):</strong><br>
                <span><?php echo htmlspecialchars($entrada); ?></span>
                <br><br>
                
                <strong>Paso intermedio calculado ($X'$):</strong><br>
                <span><?php echo htmlspecialchars($resultadoIntermedio); ?></span>
                <br><br>

                <strong>Mensaje original descifrado ($X$):</strong><br>
                <span><?php echo htmlspecialchars($entrada); ?> => <?php echo htmlspecialchars($resultadoFinal); ?></span>
            </div>
        <?php } ?>
        
    </div>
</body>
</html>