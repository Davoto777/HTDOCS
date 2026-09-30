<?php
/*Instrucciones paso a paso: 1. Crea un archivo llamado `matematicas.php` e inicia la primera línea
con `declare(strict_types=1);`.
 2. Define una función `calcularPromedio(array $numeros): float` que reciba un array de números
float y devuelva la media aritmética.
 3. Define una función `modificarNotas(array &$notas, float $puntos): void` que modifique POR
REFERENCIA el array de notas sumando el bonus indicado a cada elemento.
 4. Comprueba el funcionamiento invocando ambas funciones desde un script de prueba y verifica
que el modo estricto lanza un TypeError si se pasa un string.*/


declare(strict_types=1);
function calcularPromedio(array $numeros): float { return array_sum($numeros) / count($numeros); }
function modificarNotas(array &$notas, float $puntos): void { foreach ($notas as &$nota) $nota += $puntos; }