<?php
/* Una función pipe toma el resultado de una función y lo pasa como argumento a la siguiente, procesando un valor a través de una cadena secuencial de izquierda a derecha. */
function pipe(mixed $valorInicial, callable ...$funciones): mixed {
    return array_reduce(
        $funciones,
        fn($acumulado, $fn) => $fn($acumulado),
        $valorInicial
    );
}

// Transformaciones:
$limpiarEspacios = fn($s) => trim($s);
$aMayusculas     = fn($s) => strtoupper($s);
$agregarExclam   = fn($s) => $s . "!";

$resultado = pipe("  hola php  ", $limpiarEspacios, $aMayusculas, $agregarExclam);
echo $resultado; // Output: HOLA PHP!
?>