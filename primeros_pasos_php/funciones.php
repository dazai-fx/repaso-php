<?php 
    
    declare(strict_types=1);
    /* En este caso, PHP no intentará convertir nada.
     Al ver que envías un decimal (float) o un string 
     donde se pedía un int, lanzará un TypeError inmediatamente 
     y detendrá la ejecución del script a menos que lo captures. */
    
     //echo "<p>La suma de 20 + 30 es: " . SuM("a", "b") . "</p>";
     // si ejecutasemos la línea anterior, nos daría un error de tipo y romperia todo el programa 
    hi("Juan");
    hi("Pedro");
    hi("María");
    
    echo "<p>La suma de 5 + 10 es: " . sum(5, 10) . "</p>";
    // a diferencia de las variables que son keysensitive las funciones no, por lo tanto podemos llamarlas con mayúsculas o minúsculas
    echo "<p>La suma de 20 + 30 es: " . SuM(20, 30) . "</p>";
    
    //echo "<p>La suma de 20 + 30 es: " . SuM("a", "b") . "</p>";
    // aqui rompería el programa pero el resto si se mostraría


    function hi($name){
        echo "<p>Hola $name</p>";
    }

    // las funciones pueden recibir parámetros y retornar valores, en este caso la función sum recibe dos parámetros de tipo entero y retorna la suma de ambos
    // el tipo de dato de los parámetros es opcional, pero es recomendable especificarlo para evitar errores
    function sum(int $a, int $b): int{
        return $a + $b;
    }

?>