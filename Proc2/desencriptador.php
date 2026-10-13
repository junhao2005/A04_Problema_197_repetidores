<?php
// Función para desencriptar el mensaje cifrado X'' a X'
function desencriptar($x_dos) {
    $n = strlen($x_dos); // Obtenemos la longitud del mensaje cifrado
    $x_uno = str_repeat(" ", $n); // Creamos el espacio de la misma longitud

    $izquierda = 0; 
    $derecha = $n - 1;

    for ($i = 0; $i < $n; $i++) {// Recorremos cada carácter del mensaje cifrado
        if ($i % 2 == 0) {
           // Posición par: va al principio de X'
            $x_uno[$izquierda] = $x_dos[$i];
            $izquierda++;
        } else {
            // Posición impar: va al final de X'
            $x_uno[$derecha] = $x_dos[$i];
            $derecha--;
        }
    }

    return $x_uno;
}
