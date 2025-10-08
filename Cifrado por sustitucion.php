<?php
function sustitucion($texto, $alfabetoClave) {
    $alfabetoNormal = range('a', 'z');
    $texto = strtolower($texto);
    $resultado = '';

    for ($i = 0; $i < strlen($texto); $i++) {
        $car = $texto[$i];
        if (ctype_alpha($car)) {
            $pos = array_search($car, $alfabetoNormal);
            $resultado .= $alfabetoClave[$pos];
        } else {
            $resultado .= $car; 
        }
    }
    return $resultado;
}


$clave = str_split("qwertyuiopasdfghjklzxcvbnm"); 
echo sustitucion("hola", $clave); 
