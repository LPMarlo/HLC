<?php
    $id = $_POST['id'];

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "ejercicio8";

    $conn = mysqli_connect($host, $user, $pass, $db);
    $sql = "DELETE FROM alumno WHERE id = $id";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Registro eliminado";
    }
    else {
        echo "Error al eliminar el registro";
    }

    $conn->close();
    header('Location: ../html/delete.html');