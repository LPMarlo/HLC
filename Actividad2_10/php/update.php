<?php
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $estudios = $_POST['estudios'];
    $nota = $_POST['nota'];
    $id = $_POST['id'];

    echo "hola";
    $conn = new mysqli('localhost', 'root', '', 'ejercicio8');
    $sql = "UPDATE alumno SET nombre='$nombre', apellidos='$apellidos', estudios='$estudios', nota=$nota WHERE id=$id";

    $result = mysqli_query($conn, $sql);
    if ($result) echo "Registro eliminado";
    else echo "Error al eliminar el registro";

    $conn->close();
    header("Location: ../html/update.html");