<?php
/* En las funciones anónimas tradicionales (function() {}), para acceder a una variable del ámbito padre (parent scope) es obligatorio importarla de forma explícita mediante la sintaxis use (...). */
$mensaje = "Hola";

// Sin "use", $mensaje no estaría disponible dentro de la función
$saludo = function(string $nombre) use ($mensaje) {
    return "$mensaje, $nombre";
};

echo $saludo("Ana"); // Output: Hola, Ana

?>