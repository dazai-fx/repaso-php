<?php

    $names = array("John", "Manuel", "Ana");

    $names[] = "Julian"; // Agregar un nuevo elemento al final del array
    $names[] = "Maria"; // Agregar otro elemento al final del array
    
    $names[0] = "Carlos"; // Modificar el valor del primer elemento del array

    //echo $names[0]; // salida: Carlos
    
    // recorrer el array y mostrar todos los nombres
    foreach ($names as $name) {
        echo "<p>$name</p>";
    }

?>