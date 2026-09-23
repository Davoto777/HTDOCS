<!--tengo que hacer un array que se llame animal que tenga 3 posiciones: en la 0 posicion debe ir un perro y un gato, en la 1 posicion debe ir una lombriz y un burro y en la 2 posicion debe ir un murcielago y un cocodrilo.hay que declararlo y acto seguido tengo que meter var.jump($animal)

// Declaración del array animal con 3 posiciones-->

<?php
$animal = array(
    0 => array("perro", "gato"),
    1 => array("lombriz", "burro"),
    2 => array("murcielago", "cocodrilo")
);
var_dump($animal);

?>