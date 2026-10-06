<?php

// MD5 y SHA-1 no deben utilizarse para almacenar contraseñas.
// SHA-256 tampoco es adecuado para almacenar contraseñas directamente,
// porque es demasiado rápido para este propósito.
//
// Para almacenar contraseñas se recomienda utilizar:
// password_hash() -> crea un hash seguro de la contraseña.
// password_verify() -> comprueba si una contraseña coincide con el hash.
//
// IMPORTANTE:
// Un hash NO se puede desencriptar. Es un proceso de una sola dirección.
// Si necesitamos recuperar el texto original, debemos utilizar CIFRADO,
// no hashing.

$clave = "HolaMundo123";

echo "Clave original: " . $clave . "\n";


// ---------------------------------------------------------
// HASHES ANTIGUOS / NO RECOMENDADOS PARA CONTRASEÑAS
// ---------------------------------------------------------

echo md5($clave);
// Genera un hash MD5.
// MD5 es demasiado rápido y tiene vulnerabilidades.
// NO debe utilizarse para almacenar contraseñas.

echo sha1($clave);
// Genera un hash SHA-1.
// SHA-1 tampoco debe utilizarse para almacenar contraseñas.

echo hash('md5', $clave);
// Hace lo mismo que md5(), pero utilizando la función hash().
// Tampoco debe utilizarse para contraseñas.

echo hash('sha256', $clave);
// Genera un hash SHA-256.
// SHA-256 es criptográficamente seguro para otros usos,
// pero no es adecuado para almacenar contraseñas directamente
// porque es demasiado rápido.


// ---------------------------------------------------------
// VER LOS ALGORITMOS DISPONIBLES
// ---------------------------------------------------------

// hash_algos() devuelve los algoritmos de hashing disponibles
// en la instalación actual de PHP.

foreach (hash_algos() as $algo) {

    echo $algo . "\n";
}


// ---------------------------------------------------------
// HASH SEGURO DE UNA CONTRASEÑA
// ---------------------------------------------------------

// password_hash() está diseñado específicamente para almacenar
// contraseñas de forma segura.
//
// PASSWORD_DEFAULT hace que PHP utilice el algoritmo recomendado
// por defecto. Además, genera automáticamente un salt.
//
// El hash resultante es lo que deberíamos guardar en la base de datos.

$hashGuardado = password_hash($clave, PASSWORD_DEFAULT);

echo $hashGuardado;


// También podemos indicar explícitamente Argon2id si está disponible.
// Argon2id es un algoritmo diseñado específicamente para proteger
// contraseñas.

$hashArgon2 = password_hash($clave, PASSWORD_ARGON2ID);


// ---------------------------------------------------------
// COMPROBAR / VERIFICAR UNA CONTRASEÑA
// ---------------------------------------------------------

// password_verify() NO desencripta el hash.
//
// Recibe:
// 1. La contraseña que introduce el usuario.
// 2. El hash que tenemos almacenado en la base de datos.
//
// Devuelve true si coinciden y false si no coinciden.

if (password_verify($clave, $hashGuardado)) {

    echo "La contraseña es correcta.";

} else {

    echo "La contraseña es incorrecta.";
}


// ---------------------------------------------------------
// IMPORTANTE: LOS HASHES NO SE DESENCRIPTAN
// ---------------------------------------------------------

// Esto NO existe:
//
// password_decrypt($hashGuardado);
//
// No podemos recuperar "HolaMundo123" a partir del hash.
//
// En su lugar, cuando el usuario inicia sesión:
//
// contraseña introducida
//          ↓
// password_verify()
//          ↓
// hash almacenado en la base de datos
//
// Si coinciden → contraseña correcta.
// Si no coinciden → contraseña incorrecta.