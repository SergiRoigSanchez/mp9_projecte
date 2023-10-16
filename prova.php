<?php
// Variables primaries
$numero = 57;
$decimal = 3.14;
$nom = "Sergi";

// Array
$colors = array("roig", "verd", "blau");

// Matriu
$empleats = array(
    array("Sergi", 27, "Desenvolupador"),
    array("Axel", 28, "Diseñador"),
    array("Nasim", 35, "Gerente")
);

$columnes = array("Nom", "Edat", "Ocupació");

// Estructura condicional (if-else)
if ($numero > 50) {
    echo "El número es major que 50.";
} else {
    echo "El número es menor o igual a 50.";
}

// Estructura condicional (switch)
$dia = "dimarts";
switch ($dia) {
    case "dilluns":
        echo "Avui és dilluns.";
        break;
    case "dimarts":
        echo "Avui és dimarts.";
        break;
    default:
        echo "Avui és algún día de la setmana.";
}

// Funció que imprimeix una taula amb els seus noms de columnes
function imprimirTaula($taula, array $columnes) {
    $mida = count($taula);

    // Comprova si l'array està buit
    if ($mida === 0) {
        echo "La taula està buida.";
        return;
    }

    // Imprimeix noms de columnes
    echo "<table border='1'>";
    echo "<tr>";
    for ($i = 0; $i < $mida; $i++) {
        if ($columnes == null)
            echo "<th>Columna $i</th>";
        else
            echo "<th>" . $columnes[$i] . "</th>";
    }
    echo "</tr>";

    // Imprimeix contingut de columnes
    foreach ($taula as $i) {
        echo "<tr>";
        for ($j = 0; $j < $mida; $j++) {
            echo "<td>" . $i[$j] . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}

imprimirTaula($empleats, $columnes);
?>




