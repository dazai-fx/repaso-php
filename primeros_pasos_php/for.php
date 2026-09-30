<?php

    for($i=1; $i<10; $i++){
        if($i % 2 == 0){
            //break // si el número es par, se rompe el bucle y no se ejecuta más código dentro del bucle
            continue; // si el número es par, se salta a la siguiente iteración del bucle
        } 
         echo $i; // imprimie los números impares del 1 al 9
    }

?>