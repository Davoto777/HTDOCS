<!--tengo que hacer un array que se llame animal que tenga 3 posiciones: en la 0 posicion debe ir un perro y un gato, en la 1 posicion debe ir una lombriz y un burro y en la 2 posicion debe ir un murcielago y un cocodrilo.hay que declararlo y acto seguido tengo que meter var.jump($animal)

// Declaración del array animal con 3 posiciones-->

<?php
$animal = array(
    array("perro", "gato"),
    array("lombriz", "burro"),
    array("murcielago", "cocodrilo")
);
var_dump($animal);

//ahora tengo que hacer un bucle for para recorrer el array y mostrar los animales que hay en cada posición.
for ($i = 0; $i < count($animal); $i++) {
    for ($j = 0; $j < count($animal[$i]); $j++) {
       echo $animal[$i][$j] . "<br>";
   }
}

//tengo que hacer ese bucle con foreach para recorrer el array y mostrar los animales que hay en cada posición.
foreach ($animal as $posicion => $animales) {
    foreach ($animales as $animal) {
        echo $animal . "<br>";
    }
}

//ahora un array mixto, mismo código que al principio, mostrat un array que tenga 3 posiciones, en la 0, que se llama casa, un perro(0) y un gato(1), en la 1, que se llama granja, una lombriz(0) y un burro(1), en la 2, salvaje un murcielago(0) y un cocodrilo(1).
$animal = array(
    "casa" => array("perro", "gato"),
    "granja" => array("lombriz", "burro"),
    "salvaje" => array("murcielago", "cocodrilo")
);
var_dump($animal);

//ahora tengo que hacer un bucle for simple, no foreach para recorrer el array y mostrar los animales que hay en cada posición.
for ($i = 0; $i < count($animal); $i++) { //solo usar for
    for ($j = 0; $j < count($animales); $j++) {
        echo $animales[$j] . "<br>";
    }
}

//ahora tengo que hacer un bucle foreach para recorrer el array y mostrar los animales que hay en cada posición.
foreach ($animal as $posicion => $animales) {  
    foreach ($animales as $animal) {
        echo $animal . "<br>";
    }
}

$gente = array(
    array(
    "Familia"=> "Los Simpson",
    "Padre"=> "Homero",
    "Madre"=> "Marge",
    "hijos"=> array("Bart", "Lisa", "Maggie")
),
array(
    "Familia"=> "Los Griffin",
    "Padre"=> "Peter",
    "Madre"=> "Lois",
    "hijos"=> array("Chris", "Meg", "Stewie")
),
);
//ahora tengo que hacer un bucle for para recorrer el array y mostrar los hijos de cada familia. pero encima de los hijos tiene que poner el nombre de la famila y arriba de la familia los padres y madres de cada familia y tambien quiero que se vea el nombre de el padre y la madre de cada familia.
for ($i = 0; $i < count($gente); $i++) {
    echo "Familia: " . $gente[$i]["Familia"] . "<br>";
    echo "Padre: " . $gente[$i]["Padre"] . "<br>";
    echo "Madre: " . $gente[$i]["Madre"] . "<br>";
        echo "Hijos: <br>";
        for ($j = 0; $j < count($gente[$i]["hijos"]); $j++) {
            echo "- " . $gente[$i]["hijos"][$j] . "<br>";
        }
    echo "<br>";
}


//ahora tengo que hacer un bucle foreach y con el if para recorrer el array y mostrar los hijos de cada familia. pero encima de los hijos tiene que poner el nombre de la famila y arriba de la familia los padres y madres de cada familia y tambien quiero que se vea el nombre de el padre y la madre de cada familia.
foreach ($gente as $familia) {
    echo "Familia: " . $familia["Familia"] . "<br>";
    echo "Padre: " . $familia["Padre"] . "<br>";
    echo "Madre: " . $familia["Madre"] . "<br>";
    if (isset($familia["hijos"])) {
        echo "Hijos: <br>";
        foreach ($familia["hijos"] as $hijo) {
            echo "- " . $hijo . "<br>";
        }
    }
    echo "<br>";
}

?>