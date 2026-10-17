<?php

// Función auxiliar para comprobar si el caracter es una vocal
function esVocal($caracter) {
    return $caracter == "a" || $caracter == "e" || $caracter == "i" || $caracter == "o" || $caracter == "u" || 
           $caracter == "A" || $caracter == "E" || $caracter == "I" || $caracter == "O" || $caracter == "U";
}

// Fase 1: Desencriptar de X'' a X' (Deshacer la alternancia de principio a fin)
function desencriptarFase1($x_dos) {
    $n = strlen($x_dos);
    $x_uno = str_repeat(" ", $n); 
    $izquierda = 0; 
    $derecha = $n - 1;

    for ($i = 0; $i < $n; $i++) {
        if ($i % 2 == 0) {
            $x_uno[$izquierda] = $x_dos[$i];
            $izquierda++;
        } else {
            $x_uno[$derecha] = $x_dos[$i];
            $derecha--;
        }
    }
    return $x_uno;
}

// Fase 2: Desencriptar de X' a X (Deshacer la inversión de los grupos de no-vocales)
function desencriptarFase2($x_uno) {
    $resultado = "";
    $grupo = "";
    $i = 0;

    while (isset($x_uno[$i])) {
        $caracter = $x_uno[$i];

        if (esVocal($caracter)) {
            // Se agrega el grupo invertido y luego la vocal
            $resultado = $resultado . $grupo . $caracter;
            $grupo = ""; 
        } else {
            // Se antepone el caracter para invertir el orden del grupo de no-vocales
            $grupo = $caracter . $grupo;
        }
        $i++;
    }
    
    // Añadimos el último grupo si el mensaje no termina en vocal
    $resultado = $resultado . $grupo;

    return $resultado;
}

// Función principal que une ambos pasos
function desencriptarCompleto($mensajeCifrado) {
    // Primero obtenemos el mensaje intermedio X'
    $pasoIntermedio = desencriptarFase1($mensajeCifrado);
    
    // Luego obtenemos el mensaje final X
    $mensajeFinal = desencriptarFase2($pasoIntermedio);
    
    // Devolvemos ambos para poder mostrarlos en la vista si queremos
    return [
        'intermedio' => $pasoIntermedio,
        'final' => $mensajeFinal
    ];
}
?>