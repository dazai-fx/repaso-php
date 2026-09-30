<?php

    // Array 3 dimensiones de productos con [Nombre, Precio, Stock]
    $productos = [
        ["Portátil", 850, 15],
        ["Ratón", 25, 50],
        ["Teclado", 45, 30]
    ];

    // Acceso a elementos: $productos[índice_fila][índice_columna]
    foreach ($productos as $producto) {
        echo "<p>Nombre: {$producto[0]}, Precio: {$producto[1]}, Stock: {$producto[2]}</p>";
    }

    echo "<p>Con dos bucles for</p>";
    for ($i = 0; $i < count($productos); $i++) {
        echo "<p>Producto " . ($i + 1) . ":</p>";
        for ($j = 0; $j < count($productos[$i]); $j++) {
            echo "<p>{$productos[$i][$j]}</p>";
        }
    }

    // Otro ejemplo de array multidimensional con claves asociativas
    // Lista de usuarios con información detallada
    $usuarios = [
        "usuario1" => [
            "nombre" => "Carlos",
            "email" => "carlos@example.com",
            "rol" => "admin"
        ],
        "usuario2" => [
            "nombre" => "Ana",
            "email" => "ana@example.com",
            "rol" => "editor"
        ]
    ];

    // Acceso a elementos: $usuarios['clave_principal']['clave_secundaria']
    echo $usuarios["usuario1"]["nombre"]; // Imprime: Carlos
    echo $usuarios["usuario2"]["email"];  // Imprime: ana@example.com

    // acceso con un bucle foreach
    foreach ($usuarios as $clave => $info) {    
        echo "<p>Usuario: $clave</p>";
        foreach ($info as $atributo => $valor) {
            echo "<p>$atributo: $valor</p>";
        }
    }


?>