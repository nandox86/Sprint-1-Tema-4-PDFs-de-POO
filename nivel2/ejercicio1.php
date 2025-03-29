<?php
require 'PokerDice.php';
define("EJERCICIO1", "Ejercicio 1");
echo "<h1>" . EJERCICIO1 . "</h1>";
// crear un array para los cinco dados
$diceArray = [];

// inicializar y lanzar los dados
for ($i = 0; $i < 5; $i++) {
    $dice = new PokerDice(); // crear un dado
    $dice->throwDice(); // lanzar el dado
    $diceArray[] = $dice; // guardar el dado en el array
}

// mostrar los resultado
echo "<h1>Resultados de los dados:</h1>";
foreach ($diceArray as $index => $dice) {
    echo "Dado " . ($index + 1) . ": " . $dice->shapeName() . "<br>";
}


echo "<h2>Total de tiradas:</h2>";
echo "Se han realizado " . PokerDice::getTotalThrows() . " tiradas en total.";
?>