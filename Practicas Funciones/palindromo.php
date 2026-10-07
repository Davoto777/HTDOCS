<?php

function esPalindromo($cadena) {
    $cadenaLimpia = strtolower(str_replace(' ', '', $cadena));
    
    $cadenaInvertida = strrev($cadenaLimpia);
    
    return $cadenaLimpia === $cadenaInvertida;
}

$texto1 = "Ana";
$texto2 = "Atar a la rata";
$texto3 = "Hola mundo";

echo "'$texto1' es palíndromo: " . (esPalindromo($texto1) ? "Sí" : "No") . "<br>";
echo "'$texto2' es palíndromo: " . (esPalindromo($texto2) ? "Sí" : "No") . "<br>";
echo "'$texto3' es palíndromo: " . (esPalindromo($texto3) ? "Sí" : "No") . "<br>";

?>