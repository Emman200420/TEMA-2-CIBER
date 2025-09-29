<?php

$mensaje = "holamundo";

$strings_de_mensaje = [
    "a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"
];

$codificar = [
    "RAX","AX","AH","EBX","BL","RCX","CX","CH","R15","R14","R14W","R13","R12","R13B","R13W","R13D","R14B","R14D","R15B","CL","ECX","BH","BX","RBX","AL","EAX"
];


$codificado = codificacion($mensaje, $strings_de_mensaje, $codificar);
echo "Codificado: $codificado\n";


$descodificado = decodify($codificado, $strings_de_mensaje, $codificar);
echo "Descodificado: $descodificado\n";


function codificacion($mensaje, $strings_de_mensaje, $codificar){
    $result = [];
    for ($i = 0; $i < strlen($mensaje); $i++){
        $caracter = $mensaje[$i];
        $pos = array_search($caracter, $strings_de_mensaje);
        if ($pos !== false){
            $result[] = $codificar[$pos];
        }
        
    }
    return implode(" ", $result);
}



function decodify($mensaje_codificado, $strings_de_mensaje, $codificar){
    $result = [];
    $mensaje_array = explode(" ", $mensaje_codificado);
    foreach ($mensaje_array as $descodificacion){
        $descodificar = array_search($descodificacion, $codificar);
        if ($descodificar !== false){
            $result[] = $strings_de_mensaje[$descodificar];
        }
    }
    return implode("", $result); 
    
}

?>



