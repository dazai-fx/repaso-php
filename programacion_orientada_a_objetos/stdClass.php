<?php

    /* 
        se usa para crear objetos “genéricos” cuando no quieres definir una clase propia.

        En palabras simples
        Sirve para crear objetos dinámicos

        Se usa mucho cuando:

        no sabes de antemano qué propiedades tendrá un objeto
        vas a recibir datos desde una API o base de datos
        quieres crear un objeto de forma rápida
        necesitas estructura flexible

    */ 
    $beer = new stdClass();

    $beer->name = "Erdinger";
    $beer->alcohol = 8.5;

    $beer->name = "Erdinger Pikantus";

    echo gettype($beer)."<br>";
    print_r($beer);
    echo "<br>".$beer->name;

    $array = (array) $beer;

    echo gettype($array);

    echo $array["name"];
    echo $array["alcohol"];

    $arrayLocation = [
        "address" => "Calle del Mal # 15",
        "country" => "España"

    ];
    
    $objLocation = (object) $arrayLocation;

    print_r($objLocation); // los objetos casteados de un array son stdClass




?>