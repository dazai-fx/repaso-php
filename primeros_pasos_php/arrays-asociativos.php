<?php

    // arrays asociativos funcionan de manera similar a los arrays indexados, 
    // pero en lugar de usar índices numéricos, utilizan claves asociativas para acceder a los valores.
    $beer = [
        "name" => "Heineken",
        "Alcohol" => 8.5,
        "Country" => "Netherlands"
    ];

    $beer["name"] = "Corona"; // Modificar el valor de la clave "name"

    foreach ($beer as $key => $value) {
        echo "<p>$key: $value</p>";
    }

?>