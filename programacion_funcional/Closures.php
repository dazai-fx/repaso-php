<?php
    function crearContador(): callable {
        $contador = 0;
        
        // El closure captura &$contador por referencia
        return function() use (&$contador) {
            $contador++;
            return $contador;
        };
    }

    $miContador = crearContador();
    echo $miContador(); // Output: 1
    echo $miContador(); // Output: 2
?>