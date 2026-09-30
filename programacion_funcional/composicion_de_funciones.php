<?php
/* Concepto matemático ($f(g(x))$) donde combinas dos o más funciones para crear una nueva función. A diferencia del pipe (que ejecuta un valor de izquierda a derecha), la composición tradicional suele evaluar de derecha a izquierda o empaquetar funciones para usarlas en cualquier momento. */
// Crea una nueva función combinando $f y $g -> f(g(x))
function componer(callable $f, callable $g): callable {
    return fn($x) => $f($g($x));
}

$duplicar = fn($n) => $n * 2;
$sumarDiez = fn($n) => $n + 10;

// Primero suma 10, luego duplica el resultado
$duplicarTrasSumarDiez = componer($duplicar, $sumarDiez);

echo $duplicarTrasSumarDiez(5); // (5 + 10) * 2 = 30
?>