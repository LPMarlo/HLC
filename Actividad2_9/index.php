<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario Alumno</title>
    <link rel="stylesheet" href="ejercicio9.css">
</head>
<body>
    <!--- Titulo -->
    <h1>Formulario Alumno</h1>
    <hr>
    <br>
    <div>

        <!-- ¡IMPORTANTE! Con este formulario se realiza el registro de un alumno.
        Se muestra el resultado de ejercicio9.php -->
        <form action="ejercicio9.php" method="post">
            <!--- Nombre -->
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
            <br>

            <!--- Apellidos -->
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos">
            <br>

            <!-- Estudios -->
            <label for="estudios">Estudios:</label>
            <select name="estudios" id="estudios">
                <option value="fp">Formación Profesional</option>
                <option value="universidad">Universidad</option>
                <option value="otros">Otros</option>
            </select>
            <br>

            <!-- Nota -->
            <label for="nota">Nota:</label>
            <input type="number" name="nota" id="nota" min="0" max="10">
            <br>

            <!-- Submit -->
            <input name="enviar" type="submit" value="Enviar">

        </form>

        <!-- ¡IMPORTANTE! Con este boton en un formulario independiente se obtiene los alumnos registrados.
        Se muestra el resultado del codigo php de este documento -->
        <form>
            <input type="button" value="Mostrar Alumnos" onclick="mostrar()">
        </form>

        <?php
        $conexion = mysqli_connect("localhost", "root", "", "ejercicio8");
        $consulta = "SELECT * FROM alumno";
        $resultado = mysqli_query($conexion, $consulta);


        echo "<nav id='mostrarAlumnos' style='display:none'>";
        echo "<p>Número de alumnos registrados: ".mysqli_num_rows($resultado)."</p>";

        echo "<table>";
        echo "<tr><th>Nombre</th><th>Apellidos</th><th>Estudios</th><th>Nota</th></tr>";
        while ($fila = mysqli_fetch_array($resultado)) {
            echo "<tr><td>".$fila['nombre']."</td><td>".$fila['apellidos']."</td><td>".$fila['estudios']."</td><td>".$fila['nota']."</td></tr>";
        }
        echo "</table>";
        echo "</nav>";
        ?>
    </div>
    <script>
        function mostrar(){
            var btn = document.getElementById("mostrarAlumnos");
            if(btn.style.display === "none"){
                btn.style.display = "block";
            }else{
                btn.style.display = "none";
            }
        }
    </script>
</body>
</html>