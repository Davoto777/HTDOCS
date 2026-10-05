<?php

function esPalindromo($cadena) {
    // 1. Convertir a minúsculas y quitar espacios
    $cadenaLimpia = strtolower(str_replace(' ', '', $cadena));
    
    // 2. Invertir la cadena
    $cadenaInvertida = strrev($cadenaLimpia);
    
    // 3. Comprobar si son iguales
    return $cadenaLimpia === $cadenaInvertida;
}

// ==========================================
// EJEMPLOS DE USO
// ==========================================

$texto1 = "Ana";
$texto2 = "Atar a la rata";
$texto3 = "Hola mundo";

echo "'$texto1' es palíndromo: " . (esPalindromo($texto1) ? "Sí" : "No") . "<br>";
echo "'$texto2' es palíndromo: " . (esPalindromo($texto2) ? "Sí" : "No") . "<br>";
echo "'$texto3' es palíndromo: " . (esPalindromo($texto3) ? "Sí" : "No") . "<br>";

?>