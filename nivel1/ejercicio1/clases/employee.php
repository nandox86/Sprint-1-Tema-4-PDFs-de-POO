<?php
declare(strict_types=1);
/**- Ejercicio 1
Crea una clase Employee, define como atributos su nombre y sueldo. Definir un método 
initialize que reciba como parámetros el nombre y sueldo. Plantear un segundo método print que 
imprima el nombre y un mensaje si debe pagar o no impuestos (si el sueldo supera 6000, paga impuestos).
 */
class Employee {
    // propiedades privadas para encapsular los datos
    private string $name;
    private int $salary;

    // constante para el umbral de impuestos
    private const TAX_THRESHOLD = 6000;

    // constructor para inicializar las propiedades al crear una instancia
    public function __construct(string $name, int $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    // método para imprimir la información del empleado
    public function printDetails(): void {
        if ($this->salary < self::TAX_THRESHOLD) {
            echo "Nombre: " . $this->name . "<br>";
            echo "Impuestos: No tiene que pagar impuestos.<br>";
        } else {
            echo "Nombre: " . $this->name . "<br>";
            echo "Impuestos: Hay que pagar impuestos.<br>";
        }
    }
}
?>