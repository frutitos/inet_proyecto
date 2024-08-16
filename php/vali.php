<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    session_start();

    // Datos de conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "proyecto_inet";

    // Conexión a la base de datos
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    // Inicializar variables para manejar mensajes
    $login_success = false;
    $error_message = "";

    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $pass = $_POST["password"];

        // Consultar la base de datos para obtener el usuario y el hash de la contraseña
        $sql = "SELECT id, nombre, apellido, pass FROM usuarios WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            // Verificar la contraseña ingresada con el hash almacenado
            if (password_verify($pass, $row['pass'])) {
                // Contraseña correcta, iniciar sesión
                $_SESSION['email'] = $email;
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['apellido'] = $row['apellido'];

                $login_success = true;
            } else {
                $error_message = "Correo electrónico o contraseña incorrectos.";
            }
        } else {
            $error_message = "Correo electrónico o contraseña incorrectos.";
        }
    }

    mysqli_close($conn);
    ?>

    <div class="login-container">
        <?php if ($login_success) : ?>
            <p class="success-message">Inicio de sesión exitoso. Redirigiendo...</p>
            <script>
                setTimeout(function() {
                    window.location.href = 'inicio.php'; // Cambiar a la página de inicio correspondiente
                }, 3000); // Redirigir después de 3 segundos
            </script>
        <?php else : ?>
            <p class="error-message"><?php echo $error_message; ?></p>
            <script>
                setTimeout(function() {
                    window.location.href = '../index.php'; // Redirigir después de 1 segundo
                }, 1000);
            </script>
        <?php endif; ?>
    </div>

</body>

</html>
