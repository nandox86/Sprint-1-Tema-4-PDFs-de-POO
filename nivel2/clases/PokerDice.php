<?php
/**Crea la clase PokerDice. Las caras de un dado de póquer tienen las siguientes figuras: As, K, Q, J, 7 y 8.
Crea el método throw que no hace otra cosa que echar el dado, es decir, genera un valor aleatorio para el objeto 
al que se le aplica el método.
Crea también el método shapeName, que diga cuál es la figura que ha salido en el último tirón del dado en cuestión.
Realiza una aplicación que permita echar cinco dados de póquer a la vez.
Además, programa el método getTotalThrows que debe mostrar el número total de tiradas entre todos los dados.
 */

class PokerDice {
    // propiedad para almacenar la figura actual
    private $currentShape = null;

    // propiedad estatica para contar el total de tiradas
    private static $totalThrows = 0;

    // array con las caras del dado  (debo anexar un static)
    private static $shapes = ["As", "K", "Q", "J", "7", "8"];

    // metodo para lanzar el dado
    public function throwDice() {
        // seleccionar una figura aleatoria
        $this->currentShape = self:: $shapes[array_rand(self::$shapes)];
        // incrementar el contador de tiradas totales
        self::$totalThrows++;
    }

    // metodo para obtener la figura actual
    public function shapeName() {
        return $this->currentShape;
    }

    // metodo estatico para obtener el total de tiradas
    public static function getTotalThrows() {
        return self::$totalThrows;
    }
}
?>