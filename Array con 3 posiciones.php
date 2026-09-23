<!--tengo que hacer un array que se llame animal que tenga 3 posiciones: en la 0 posicion debe ir un perro y un gato, en la 1 posicion debe ir una lombriz y un burro y en la 2 posicion debe ir un murcielago y un cocodrilo.hay que declararlo y acto seguido tengo que meter var.jump($animal)

// Declaración del array animal con 3 posiciones-->

<?php
$animal = array(
    array("perro", "gato"),
    array("lombriz", "burro"),
    array("murcielago", "cocodrilo")
);

//hacer un bucle for que recorra el array y muestre por pantalla cada animal de cada posición del array
for ($i = 0; $i < count($animal); $i++) {
    for ($j = 0; $j < count($animal[$i]); $j++) {
        echo $animal[$i][$j] . "<br>";
    }
}

//en vez de usar for usar foreach
foreach ($animal as $posicion) {
    foreach ($posicion as $animal) {
        echo $animal . "<br>";
    }
}

?>