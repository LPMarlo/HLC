<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Home | PassThePassword</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <div class="wrapp">
    <div class="logo">
      <a href="index.html"><img src="img/logo.png" alt="PassThePassword"></a>
    </div>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="passwords.php">Passwords</a></li>
        <li><a href="about.html">About</a></li>
      </ul>
    </nav>
  </div>
</header>
<section class="main">
  <div class="wrapp">
    <div class="title">
      <h1>PASSWORD PASSED</h1>
    </div>
    <div class="generatedPasswordCard">
      <div class="options">
        <h3>How many people have your password?</h3>
        <form action="passwords.php" method="post">
            <label for="pass" id="passLabel">Password: </label>
            <br>
            <input type="text" name="password" id="pass">
            <input type="submit" name="submit" id="showPasswords" value="Show">
            <?php
            if (isset($_POST['password'])) {
                // Registro de la contraseña
                $password = $_POST['password'];
                $sql = "INSERT INTO password (password) VALUES ('$password')";
                $conn = mysqli_connect('109.106.246.51', 'u380254938_root', 'VivaElBetis7', 'u380254938_proyectohlc');
                $result = mysqli_query($conn, $sql);

                // Cantidad de registros
                $sql2 = "SELECT count(p.password) FROM password p WHERE p.password = '$password'";
                $conn = mysqli_connect('109.106.246.51', 'u380254938_root', 'VivaElBetis7', 'u380254938_proyectohlc');
                $result2 = mysqli_query($conn, $sql2);
                $row = mysqli_fetch_array($result2);
                $count = $row[0]-1;
                echo "<p style='margin-top: 20px; color: teal'>$count people have your password in our database</p>";
            }
            ?>
        </form>
      </div>
    </div>
    <aside>
      <div class="widget">
        <h3>Related Articles</h3>
        <ul>
            <li><a href="https://www.redeszone.net/noticias/seguridad/usuarios-no-utilizan-gestor-contrasenas/" target="_blank">Why not to use password managers?</a></li>
            <li><a href="https://www.lasexta.com/tecnologia-tecnoxplora/internet/tienes-muchas-contrasenas-consejos-gestionarlas-acordarte-cada_20220217620e1f2ff65b1900019bd095.html" target="_blank">Password management tips</a></li>
            <li><a href="https://www.genbeta.com/seguridad/esta-tabla-muestra-cuantos-segundos-siglos-tardaria-hacker-averiguar-tus-contrasenas" target="_blank">How long would it take a hacker to find out your passwords?</a></li>
        </ul>
      </div>
    </aside>
  </div>
</section>
<footer>
  <div class="wrapp">
    <p>© 2022 PassThePassword, Inc. All rights reserved.</p>
  </div>
</footer>
</body>
</html>