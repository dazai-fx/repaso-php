<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="recibir_datos.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="asignatura">Asignatura:</label>
        <!-- Añadimos el atributo multiple y en name nombreVariable[] para permitir la selección de varias opciones -->
        <select id="asignatura" name="asignatura[]" required multiple>
            <option value="">Seleccione una asignatura</option>
            <option value="matematicas">Matemáticas</option>
            <option value="fisica">Física</option>
            <option value="quimica">Química</option>
            <option value="biologia">Biología</option>
        </select><br><br>
        <label for="opcion1">Opción 1:
            <input type="checkbox" id="opcion1" name="frutas[]" value="manzana">
            manzana  
        </label>
        <label for="opcion2">Opción 2:
            <input type="checkbox" id="opcion2" name="frutas[]" value="fresa">
            fresa  
        </label>
        <label for="opcion3">Opción 3:
            <input type="checkbox" id="opcion3"  name="frutas[]" value="uva">
            uva
        </label>
        
        <input type="submit" value="Enviar">
</body>
</html>