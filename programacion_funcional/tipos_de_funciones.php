<?php

    // Impura (depende de una variable global / externa)
    $factor = 2;
    function multiplicarImpura(int $n): int {
        global $factor;
        return $n * $factor;
    }

    // Pura (solo depende de sus argumentos y no modifica el entorno)
    /* 
        Una función es pura si cumple dos condiciones fundamentales:

    Determinismo: Para las mismas entradas, siempre devuelve exactamente el mismo resultado.

    Sin efectos secundarios (side effects): No modifica variables fuera de su ámbito, 
    no altera parámetros recibidos por referencia, ni realiza entrada/salida (I/O) como 
    escribir en BD, modificar archivos o imprimir en pantalla.
    */
    function multiplicarPura(int $n, int $factor): int {
        return $n * $factor;
    }

?>