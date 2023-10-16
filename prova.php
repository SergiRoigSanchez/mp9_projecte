<?php
// Variables escalares
$numero = 57; // Entero
$decimal = 3.14; // Punto flotante
$nombre = "Juan"; // Cadena de texto

// Array
$colores = array("rojo", "verde", "azul");

// Matriz
$empleados = array(
    array("Juan", 30, "Desarrollador"),
    array("María", 28, "Diseñador"),
    array("Pedro", 35, "Gerente")
);

$columnes = array("Nom", "Edat", "Ocupació");

// Estructura condicional (if-else)
if ($numero > 50) {
    echo "El número es mayor que 50.\n";
} else {
    echo "El número es menor o igual a 50.\n";
}

// Estructura condicional (switch)
$dia = "martes";
switch ($dia) {
    case "lunes":
        echo "Hoy es lunes.\n";
        break;
    case "martes":
        echo "Hoy es martes.\n";
        break;
    default:
        echo "Hoy es otro día de la semana.\n";
}

function imprimirTaula($taula, array $columnes) {
    // Comprova si l'array està buit
    $mida = count($taula);

    if ($mida === 0) {
        echo "La taula està buida.\n";
        return;
    }

    echo "<table border='1'>";
    echo "<tr>";
    for ($i = 0; $i < $mida; $i++) {
        if ($columnes == null)
            echo "<th>Columna $i</th>";
        else
            echo "<th>$columnes[0][0]</th>";
    }
    echo "</tr>";

    foreach ($taula as $i) {
        echo "<tr>";
        echo "<td>" . $i[0] . "</td>";
        echo "<td>" . $i[1] . "</td>";
        echo "<td>" . $i[2] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}

imprimirTaula($empleados, $columnes);
?>




