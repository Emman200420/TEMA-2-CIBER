<?php
function vigenere($texto, $clave, $modo = 'cifrar') {
    $resultado = '';
    $texto = strtolower($texto);
    $clave = strtolower($clave);
    $longClave = strlen($clave);
    $j = 0;

    for ($i = 0; $i < strlen($texto); $i++) {
        $car = $texto[$i];

        if (ctype_alpha($car)) {
            $letraTexto = ord($car) - ord('a');
            $letraClave = ord($clave[$j % $longClave]) - ord('a');

            if ($modo === 'descifrar') {
                $nuevo = ($letraTexto - $letraClave + 26) % 26;
            } else {
                $nuevo = ($letraTexto + $letraClave) % 26;
            }

            $resultado .= chr($nuevo + ord('a'));
            $j++;
        } else {
            $resultado .= $car; 
        }
    }

    return $resultado;
}


$texto = "hola";
$clave = "clave";

$cifrado = vigenere($texto, $clave, 'cifrar');
$descifrado = vigenere($cifrado, $clave, 'descifrar');

echo "Texto original: $texto\n";
echo "Clave: $clave\n";
echo "Cifrado: $cifrado\n";
echo "Descifrado: $descifrado\n";
