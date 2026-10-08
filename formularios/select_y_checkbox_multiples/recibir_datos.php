<?php

//var_dump($_POST['asignatura']);

foreach($_POST['asignatura'] as $asignatura){
    echo $asignatura . "<br>";
}

$frutas = $_POST['frutas'];

foreach($frutas as $fruta){
    echo $fruta . "<br>";
}
