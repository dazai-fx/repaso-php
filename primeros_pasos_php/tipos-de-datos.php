<?php

    $name = "Juan"; // variable de tipo string
    $age = 25; // variable de tipo entero   
    $isStudent = true; // variable de tipo booleano
    $height = 1.75; // variable de tipo float
    $cash = null; // variable de tipo null caja vacía tipo especial de dato

    // en las nuevas versiones de php podemos decalar el tipo de dato en las funciones y en objetos.
    
    echo "<p>Mi nombre es $name y tengo $age años</p>";
    echo "<p>Mi estatura es $height metros</p>";
    echo "<p>¿Soy estudiante? " . ($isStudent ? "Sí" : "No") . "</p>";
    echo "<p>¿Tengo dinero en efectivo? " . ($cash === null ? "No" : "Sí") . "</p>";
    echo "<p>El tipo de dato de la variable \$name es: " . gettype($name) . "</p>";
?>