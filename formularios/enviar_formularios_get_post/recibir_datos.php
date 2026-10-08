<?php

/*
Como utilizamos method="POST", tendremos 
que utilizar $_POST para recoger los datos. */

$nombre = $_POST['nombre'];
$asignatura = $_POST['asignatura'];
$frutas = $_POST['frutas'];

echo "Nombre: " . $nombre . "<br>";
echo "Asignatura: " . $asignatura . "<br>"; 
echo "Frutas seleccionadas: " . implode(", ", $frutas) . "<br>";