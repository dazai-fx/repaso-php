<?php

$variable1 = null;
$variable2 = "";
$variable3 = "Hola";
$variable4 = 0;
$variable5 = false;

// -------------------------
// is_null()
// -------------------------
// Comprueba si el valor es exactamente NULL.

var_dump(is_null($variable1)); // true
var_dump(is_null($variable2)); // false


// -------------------------
// empty()
// -------------------------
// Comprueba si una variable está "vacía".
// Considera vacíos valores como:
// "", 0, "0", false, null, [], etc.

var_dump(empty($variable1)); // true
var_dump(empty($variable2)); // true
var_dump(empty($variable3)); // false
var_dump(empty($variable4)); // true
var_dump(empty($variable5)); // true


// -------------------------
// isset()
// -------------------------
// Comprueba si una variable existe Y además NO es NULL.

var_dump(isset($variable1)); // false
var_dump(isset($variable2)); // true
var_dump(isset($variable3)); // true
var_dump(isset($variable4)); // true
var_dump(isset($variable5)); // true


// Variable que ni siquiera existe
var_dump(isset($variable6)); // false
var_dump(empty($variable6)); // true