<?php
    /* 
    Un dato es inmutable si su valor no puede ser modificado después de su creación.
     En lugar de alterar el objeto o variable original, se genera una nueva copia con
      los datos actualizados. Esto evita errores de estado inesperados. 
    */

    // Mutabilidad (estilo imperativo)
    $arrayOriginal = [1, 2, 3];
    array_push($arrayOriginal, 4); // Modifica la variable original

    // Inmutabilidad (estilo funcional)
    $arrayOriginal = [1, 2, 3];
    $nuevoArray = [...$arrayOriginal, 4]; // $arrayOriginal sigue intacto

?>