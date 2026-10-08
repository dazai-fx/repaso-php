<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- METHOD="POST": Los datos del formulario se envían dentro
    del cuerpo de la petición HTTP. NO aparecen en la URL. En PHP, 
    para recogerlos utilizamos: $_POST['nombre_del_campo'] POST se 
    suele utilizar cuando enviamos datos para crear, modificar o
     procesar información, especialmente cuando no queremos que los 
     datos aparezcan en la URL. 
    ----------- METHOD="GET": 
    Los datos se envían como parámetros en la URL. Por ejemplo, 
    si enviamos nombre=Jose y asignatura=matematicas, 
    la URL podría quedar: recibir_datos.php?nombre=Jose&asignatura=matematicas 
    En PHP, para recogerlos utilizamos: $_GET['nombre_del_campo'] GET es apropiado 
    para consultas o búsquedas en las que los datos pueden aparecer en la URL. 
    Por ejemplo: buscar.php?nombre=Jose IMPORTANTE: GET y POST NO hacen que los datos 
    sean seguros por sí mismos. La diferencia principal es cómo se envían y para qué tipo 
    de operación suelen utilizarse. -->
    <form action="recibir_datos.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="email">Asignatura:</label>
        <select id="asignatura" name="asignatura" required>
            <option value="">Seleccione una asignatura</option>
            <option value="matematicas">Matemáticas</option>
            <option value="fisica">Física</option>
            <option value="quimica">Química</option>
            <option value="biologia">Biología</option>
        </select><br><br>
        <label for="opcion1">Opción 1:</label><br>
        <!-- Los corchetes [] en el name indican que este 
         campo puede enviar varios valores y PHP lo recibirá 
         como un array. 
         Por ejemplo: frutas[] = manzana frutas[] = pera 
         En PHP: $_POST['frutas'] contendrá un array. -->
        <input type="checkbox" id="opcion1" name="frutas[]" value="manzana">  
        <input type="submit" value="Enviar">
</body>
</html>