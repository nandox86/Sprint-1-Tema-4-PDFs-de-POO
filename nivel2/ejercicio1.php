<?php
require 'PokerDice.php';

define("EJERCICIO1", "Ejercicio 1");
define("NUM_DADOS", 5); //numero de dados

echo "<h1>" . EJERCICIO1 . "</h1>";

// inicializar y lanzar los 
echo "<h1>REsultados de los dados</h1>";
for ($i = 0; $i < NUM_DADOS; $i++) {
    $dice = new PokerDice(); // crear un dado
    $dice->throwDice(); // lanzar el dado
    echo "Dado " . ($i + 1) . ": " . $dice->shapeName() . "<br>"; 
}

// mostrar el total de tiradas
echo "<h2>Total de tiradas:</h2>";
echo "Se han realizado " . PokerDice::getTotalThrows() . " tiradas en total.";
?>