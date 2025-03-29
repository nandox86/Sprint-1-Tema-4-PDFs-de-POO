<?php
/*Ejercicio 2
Escribe un programa que defina una clase Shape con un constructor que reciba como parámetros el ancho y alto.
Define dos subclases; Triángulo y Rectángulo que hereden de Shape y que calculen respectivamente el área de la forma area().
*/ 

define("EJERCICIO2", "Ejercicio 2");
 echo "<h1>" . EJERCICIO2 . "</h1>";

 // index.php - archivo principal para probar las clases
 
 // incluimos las clases necesarias
 require_once 'shape.php';
 require_once 'triangulo.php';
 require_once 'rectangulo.php';
 
 // funcion para mostrar resultados de forma limpia
 function mostrarResultado($forma, $tipo) {
     echo "el area del $tipo es: " . $forma->area() . "\n";
 }
 
 try {
     // creamos un triangulo con base 5 y altura 3
     $triangulo = new triangulo(5, 3);
     mostrarResultado($triangulo, 'triangulo');
 
     // creamos un rectangulo con base 5 y altura 3
     $rectangulo = new rectangulo(5, 3);
     mostrarResultado($rectangulo, 'rectangulo');
 
     // ejemplo con valores decimales
     $triangulo2 = new triangulo(4.5, 2.5);
     mostrarResultado($triangulo2, 'triangulo');
 
 } catch (InvalidArgumentException $e) {
     // mostramos mensaje de error si los datos no son validos
     echo "error: " . $e->getMessage() . "\n";
 }
 ?>