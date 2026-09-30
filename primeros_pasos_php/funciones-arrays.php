<?php

    $beers = [
        "Carolous",
        "Heineken",
        "Amstel"
    ];
        

    echo count($beers) . "<br>"; // Contar el número de elementos en el array principal

    array_push($beers, "Corona"); // Agregar un nuevo elemento al final del array

    $popbeer = array_pop($beers); // Eliminar el último elemento del array y lo devuelve

    echo "<p>Última cerveza eliminada: $popbeer</p>"; // imprimimos la cerveza eliminada


    print_r($beers); // Imprimir la estructura completa del array

    
    if(in_array("Heineken", $beers)) { // Verificar si un valor existe en el array
        echo "<p>La cerveza Heineken está en el array.</p>";
    } else {
        echo "<p>La cerveza Heineken no está en el array.</p>";
    }

    $beers2 = [
        "Stella Artois",
        "Estrella Galicia",
        "cruzcampo"
    ];

    $mergedBeers = array_merge($beers, $beers2); // Combinar dos arrays en uno nuevo

    // existen más métodos para trabajar con arrays, pero estas serían con programación funcional, como map, filter, reduce, etc. que se pueden implementar con funciones anónimas o callbacks.
    
?>