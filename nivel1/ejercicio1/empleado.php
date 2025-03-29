<?php
define("EJERCICIO1", "Ejercicio 1");
echo "<h1>" . EJERCICIO1. "</h1>";
//declare(strict_types=1)
require 'employee.php';

// crear instancias de la clase Employee
$employee1 = new Employee("Jose", 4900);
$employee2 = new Employee("Luisa", 6700);

// imprimir los detalles de cada empleado
$employee1->printDetails();
$employee2->printDetails();
?>