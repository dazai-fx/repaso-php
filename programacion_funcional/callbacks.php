<?php
/* Un callback es una función que se pasa a otra función como parámetro para que sea ejecutada ("llamada de vuelta") en un momento posterior. En PHP se usa habitualmente el tipo callable. */
$numeros = [1, 2, 3, 4, 5];

// 'array_filter' recibe como callback una función que evalúa si un número es par
$pares = array_filter($numeros, function($n) {
    return $n % 2 === 0;
});

print_r($pares); // [2, 4]
?>