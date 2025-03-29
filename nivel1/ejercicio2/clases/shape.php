<?php
/**- Ejercicio 2
Escribe un programa que defina una clase Shape con un constructor que reciba como parámetros el ancho y alto. 
Define dos subclases; Triángulo y Rectángulo que hereden de Shape y que calculen respectivamente el área de la forma area().
 */
define("EJERCICIO2", "Ejercicio 2");
echo "<h1>" . EJERCICIO2 . "</h1>";
// clase base shape que define las propiedades comunes
class shape {
    // propiedades 
    protected $width;
    protected $height;

    // constructor que recibe el ancho y alto
    public function __construct($width, $height) {
        // validamos que los valores sean numericos y positivos
        if (!is_numeric($width) || $width <= 0) {
            throw new InvalidArgumentException('el ancho debe ser un numero positivo');
        }
        if (!is_numeric($height) || $height <= 0) {
            throw new InvalidArgumentException('el alto debe ser un numero positivo');
        }

        // asignamos los valores validados
        $this->width = $width;
        $this->height = $height;
    }
}

// clase triangulo que hereda de shape
class triangulo extends shape {
    // metodo para calcular el area del triangulo
    public function area() {
        // formula: (base * altura) / 2
        return ($this->width * $this->height) / 2;
    }
}

// clase rectangulo que hereda de shape
class rectangulo extends shape {
    // metodo para calcular el area del rectangulo
    public function area() {
        // formula: base * altura
        return $this->width * $this->height;
    }
}
?>