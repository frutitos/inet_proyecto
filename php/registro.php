<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
<div class="container">
    <?php
        // Verificar si se ha enviado el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Procesar los datos del formulario
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "proyecto_inet";

            $conn = mysqli_connect($servername, $username, $password, $database);

            if (!$conn) {
                die("Conexión fallida: " . mysqli_connect_error());
            }

            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $email = $_POST["email"];
            $pass = $_POST["pass"];
            $direccion = $_POST["direccion"];
            $telefono = $_POST["telefono"];

            // Verificar si el email ya está registrado
            $sql = "SELECT id FROM usuario WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo "<p class='error'>El correo electrónico ya está registrado.</p>";
            } else {
                // Hashear la contraseña antes de guardarla
                $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

                // Insertar nuevo usuario en la base de datos
                $sql = "INSERT INTO usuario (nombre, apellido, email, pass, direccion, telefono) VALUES ('$nombre', '$apellido', '$email', '$hashedPassword', '$direccion', '$telefono')";
                
                if (mysqli_query($conn, $sql)) {
                    echo "<p class='success-message' id='success-message'>Registro exitoso. Redirigiendo al inicio...</p>";
                    echo "<script>
                            document.getElementById('success-message').style.display = 'block';
                            setTimeout(function(){
                                window.location.href = 'home.php';
                            }, 3000); // 3 segundos de espera
                            </script>";
                } else {
                    echo "Error al registrar usuario: " . mysqli_error($conn);
                }
            }

            mysqli_close($conn);
        }
    ?>


    <!-- Formulario de registro -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" class="input-field" required>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" class="input-field" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="input-field" required>

        <label for="pass">Contraseña:</label>
        <input type="password" id="pass" name="pass" class="input-field" required>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" class="input-field" required>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" class="input-field" required>

        <button type="submit" class="register-button">Registrarse</button>
    </form>

    <a href="../index.php" class="login-link">¿Ya tienes cuenta? Inicia sesión</a>
</div>
</body>
</html>
