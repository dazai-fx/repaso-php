<?php

    echo strtoupper("hola mundo"); // convierte a mayúsculas, pero no tiene en cuenta la codificación de caracteres

    echo mb_strtoupper("hola mundo"); // convierte a mayúsculas teniendo en cuenta la codificación de caracteres

    echo mb_strlen("hola mundo"); // devuelve la longitud de la cadena, pero no tiene en cuenta la codificación de caracteres

    // los acentos en PHP son problematicos, ya que no los reconoce como caracteres válidos, por lo tanto, si queremos contar la longitud de una cadena con acentos, debemos usar mb_strlen

    echo rand(1, 100); // devuelve un número aleatorio entre 1 y 100

?>