<?php

function cesar($texto, $desplazamiento) {
    $resultado = '';
    for ($i = 0; $i < strlen($texto); $i++) {
        $car = $texto[$i];
        if (ctype_alpha($car)) {
            $base = ctype_upper($car) ? ord('A') : ord('a');
            $resultado .= chr((ord($car) - $base + $desplazamiento) % 26 + $base);
        } else {
            $resultado .= $car;
        }
    }
    return $resultado;
}

echo cesar("hola", 5); 




?>