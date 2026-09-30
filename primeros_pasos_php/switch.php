<?php

    $month = 5; 

    switch($month){
        case 1:
        case 2:
        case 12:
            echo "<p>Estamos en invierno</p>";
            break;
        case 3:
        case 4:
        case 5:
            echo "<p>Estamos en primavera</p>";
            break;
        case 6:
        case 7:
        case 8:
            echo "<p>Estamos en verano</p>";
            break;
        case 9:
        case 10:
        case 11:
            echo "<p>Estamos en otoño</p>";
            break;
        default:
            echo "<p>Mes no válido</p>";
            break;
    }



?>