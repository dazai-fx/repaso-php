<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Recordando PHP</h1>
    <?php
        echo "Hola mundo desde PHP";
        /* Si trabajamos con html y php es necesario cerrar las etiquetas de PHP en caso contrario 
        con poner la etiqueta de apertura bastaría <?php */
        
        // comentario de una sola línea
        # otra forma de hacer un comentario de una sola línea

        $age = 25; // variable de tipo entero
        $name = "Juan"; // variable de tipo string
        // las variables en php son de tipo debil y dinamico es decir podemos modificar su tipo o valor en cualquier momento
        $name = "Pedro"; 
        // en php no es necesario backsticks ni concatenar las variables como en javascript o java
        echo "<p>Mi nombre es $name y tengo $age años</p>";
        // si queremos concatenar podemos hacerlo con el operador punto .
        echo "<p>Ejemplo de concatenación</p>"."<p>Mi primera chamba</p>"; 
    ?>
</body>
</html>
