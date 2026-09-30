<?php

    require "Utils\Operations.php";

    // esto sería la forma de importarlo normalmente pero con namespace podemos ahorrarnos esto
    //$op = new Utils\Operations();

    use Utils\Operations;
    // Para usar "use", la clase Operations debe estar declarada dentro del namespace Utils
    
    $op = new Operations();

    echo "2+3=".$op->add(2,3);

?>