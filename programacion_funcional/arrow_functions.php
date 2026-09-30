<?php
/* 
Introducidas en PHP 7.4, son una sintaxis concisa para escribir funciones anónimas de una sola línea.
Tienen dos características clave:

Utilizan la palabra reservada fn.

Tienen un retorno implícito (no hace falta escribir return).

Capturan automáticamente las variables del ámbito externo por valor. 
*/
$factor = 3;

// Sintaxis corta
$multiplicar = fn($n) => $n * $factor;

echo $multiplicar(5); // Output: 15

/* 
en PHP no es posible que las arrow function sean multilinea como en javascript. Las arrow functions de PHP (fn) están diseñadas para ser estrictamente de una sola expresión con un retorno implícito. No aceptan llaves {} ni la palabra reservada return.

Si intentas poner llaves o escribir más de una línea en una arrow function de PHP, obtendrás un error de sintaxis (Parse error).
*/

?>