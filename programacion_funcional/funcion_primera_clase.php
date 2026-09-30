<?php
/* 
    Significa que las funciones son tratadas como ciudadanos de primera clase en el lenguaje: 
    se pueden asignar a variables, pasar como argumentos a otras funciones o retornar desde una 
    función. En PHP se implementan mediante la clase interna Closure.
*/

// Asignar una función anónima a una variable
$saludar = function(string $nombre): string {
    return "Hola, $nombre";
};

// Llamarla a través de la variable
echo $saludar("Carlos");

?>