<?php
/* Técnica de optimización que consiste en guardar en caché el resultado de operaciones computacionalmente costosas asociadas a unas entradas específicas. Si la función vuelve a ser llamada con los mismos parámetros, devuelve el valor en caché directamente sin recalcularlo. */
function memoize(callable $fn): callable {
    return function (...$args) use ($fn) {
        static $cache = [];
        $key = serialize($args);

        if (!array_key_exists($key, $cache)) {
            $cache[$key] = $fn(...$args);
        }

        return $cache[$key];
    };
}

// Simulación de un cálculo pesado
$calculoPesado = function(int $n) {
    sleep(2); // Simula retardo
    return $n * 100;
};

$calculoMemoizado = memoize($calculoPesado);

echo $calculoMemoizado(5); // Tarda 2 segundos
echo $calculoMemoizado(5); // Es instantáneo (obtenido del caché)
?>