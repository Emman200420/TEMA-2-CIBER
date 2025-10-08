<?php
function transposicion($texto, $clave) {
    $columnas = intval($clave);
    $resultado = array_fill(0, $columnas, '');
    
    for ($i = 0; $i < strlen($texto); $i++) {
        $col = $i % $columnas;
        $resultado[$col] .= $texto[$i];
    }

    return implode('', $resultado);
}


$texto = "holaamigos";
$clave = 4; 
$cifrado = transposicion($texto, $clave);

echo "Texto original: $texto\n";
echo "Clave: $clave\n";
echo "Cifrado: $cifrado\n";

?>