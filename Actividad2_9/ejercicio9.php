<?php

# Datos de entrada
$nombre = filter_input(INPUT_POST, 'nombre');
$apellidos = filter_input(INPUT_POST, 'apellidos');
$estudios = filter_input(INPUT_POST, 'estudios');
$nota = filter_input(INPUT_POST, 'nota');

# controlar que los datos sean correctos
if (empty($nombre) || empty($apellidos) || empty($estudios) || empty($nota)) {
    echo '<p>Los datos no son correctos</p>';
    exit;
}

# Guardar datos en la base de datos local de ejercicio 8 con mysqli
$mysqli = new mysqli('localhost', 'root', '', 'ejercicio8');

# Consulta para insertar los datos
$sql = "INSERT INTO alumno (nombre, apellidos, estudios, nota) VALUES ('$nombre', '$apellidos', '$estudios', '$nota')";

# Conexión a la base de datos
if ($mysqli->connect_errno) {
    echo 'Error al conectar con la base de datos.';
    exit;
}

# Ejecutar la consulta
if (!$mysqli->query($sql)) {
    echo 'Error al ejecutar la consulta.';
    exit;
} else {
    echo 'Los datos se han guardado correctamente';
}

# Cerrar la conexión
$mysqli->close();