<?php

    $age = 34;

    $output = match (true) {
        $age <2 => "Eres un bebe",
        $age<10 => "Eres un niño",
        $age<18 => "Eres un adolescente",
        $age == 18 => "Eres mayor de edad",
        $age <40 => "Eres un adulto joven",
        $age <60 => "Eres un adulto viejo",
        default => "Hueles más a madera que a fruta",
    };

    echo $output;

    

?>