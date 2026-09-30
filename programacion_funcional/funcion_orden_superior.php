<?php
/* 
    Es cualquier función que cumple al menos una de estas dos condiciones:

    Recibe una o más funciones como argumentos.

    Retorna una función como resultado.
*/
// Recibe una función ($transformacion) como parámetro
function aplicarOperacion(array $numeros, callable $transformacion): array {
    $resultado = [];
    foreach ($numeros as $n) {
        $resultado[] = $transformacion($n);
    }
    return $resultado;
}

$doble = fn($n) => $n * 2;
print_r(aplicarOperacion([1, 2, 3], $doble)); // [2, 4, 6]
?>