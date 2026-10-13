<?php

// Comprobamos si el caracter es una vocal
function esVocal($caracter) {

    return $caracter == "a" || $caracter == "e" || $caracter == "i" || $caracter == "o" || $caracter == "u" || $caracter == "A" || $caracter == "E" || $caracter == "I" || $caracter == "O" || $caracter == "U";

}


// Desencriptación
function desencriptar($mensajeEncriptado) {

    $resultado = "";
    $grupo = "";
    $i = 0;

    // Recorre el mensaje encriptado caracter por caracter
    while (isset($mensajeEncriptado[$i])) {

        $caracter = $mensajeEncriptado[$i];

        if (esVocal($caracter)) {

            // Si es una vocal, se agrega al resultado, el grupo invertido y la vocal
            $resultado = $resultado . $grupo . $caracter;
            $grupo = "";

        } else {

            // Si no es una vocal, se va agregando al grupo desde el inicio
            $grupo = $caracter . $grupo;

        }

        $i = $i + 1;
    }

    // Si al final del mensaje no hay vocal, se agrega todo
    $resultado = $resultado . $grupo;

    return $resultado;
}


// Procesamiento del formulario
$mensaje = "";
$resultado = "";


if (isset($_POST["mensaje"])) {

    $mensaje = $_POST["mensaje"];
    $resultado = desencriptar($mensaje);

}

?>