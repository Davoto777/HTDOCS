<?php
$familias = array(
    "Los simpsons" => array(
        "Padre" => "Homero",
        "Madre" => "Marge",
        "Hijos" => array("Bart", "Lisa", "Maggie")
    ),
    "Los griffin" => array(
        "Padre" => "Peter",
        "Madre" => "Lois",
        "Hijos" => array("Chris", "Meg", "Stewie")
    ),
);

echo "<ul>";
foreach ($familias as $familia => $miembros) {
    $hijos = $miembros["Hijos"];
    $ultimo_hijo = array_pop($hijos);
    $texto_hijos = count($hijos) > 0 ? implode(", ", $hijos) . " y " . $ultimo_hijo : $ultimo_hijo;

echo "<li>Famlia \"$familia\": Padre: {$miembros['Padre']}, Madre: {$miembros['Madre']}, Hijos: $texto_hijos</li>";
}
echo "</ul>";
?>