<?php

    $age = 60;

    if($age == 18){
        echo "<p>Eres mayor de edad</p>";
    }elseif($age > 18 && $age < 60){
        echo "<p>Eres mayor de edad</p>";
    }elseif($age >= 60){
        echo "<p>Eres una persona de tercera edad</p>";
    }else {
        echo "<p>Eres menor de edad</p>";
    }

?>