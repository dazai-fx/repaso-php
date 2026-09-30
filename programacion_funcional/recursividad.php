<?php
/* (Recursion)
Técnica donde una función se llama a sí misma para resolver un problema
 dividiéndolo en subproblemas más pequeños. Siempre requiere un caso base que detenga la ejecución y evite un bucle infinito (stack overflow). */

 function factorial(int $n): int {
    // Caso base
    if ($n <= 1) {
        return 1;
    }
    // Lógica recursiva
    return $n * factorial($n - 1);
}

echo factorial(5); // 120

?>