<?php
session_start();
    // Inicia una nueva sesión o reanuda la sesión actual. Esto es necesario para manejar los datos de sesión del usuario.

require 'db.php';
    // Incluye el archivo `db.php` que contiene la configuración de conexión a la base de datos.

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica si el método de solicitud es POST, lo que indica que el formulario de inicio de sesión se ha enviado.

    $email = $_POST['email'];
        // Recupera el correo electrónico enviado en el formulario de inicio de sesión.

    $pass = $_POST['pass'];
        // Recupera la contraseña enviada en el formulario de inicio de sesión.

    $login_success = "false";
        // Inicializa una variable para indicar el éxito del inicio de sesión. Inicialmente se establece en "false".

    $error_message = "";
        // Inicializa una variable para almacenar un mensaje de error si el inicio de sesión falla.

    $stmt = $pdo->prepare('SELECT * FROM usuario WHERE email = ?');
        // Prepara una declaración SQL para seleccionar todos los campos del usuario con el correo electrónico proporcionado.

    $stmt->execute([$email]);
        // Ejecuta la declaración SQL con el correo electrónico como parámetro.

    $usuario = $stmt->fetch();
        // Recupera los resultados de la consulta. `fetch` devuelve un array asociativo con los datos del usuario si se encuentra uno.

    if ($usuario && password_verify($pass, $usuario['pass'])) {
        // Verifica si el usuario existe y si la contraseña proporcionada coincide con la almacenada en la base de datos usando `password_verify`.

        $_SESSION['usuario_id'] = $usuario['id'];
            // Establece el ID del usuario en la sesión.

        $_SESSION['email'] = $email;
            // Establece el correo electrónico en la sesión.

        $_SESSION['user_id'] = $usuario['id'];
            // Establece el ID del usuario en la sesión nuevamente (parece redundante con la línea anterior).

        $_SESSION['nombre'] = $usuario['nombre'];
            // Establece el nombre del usuario en la sesión.

        $_SESSION['apellido'] = $usuario['apellido'];
            // Establece el apellido del usuario en la sesión.

        $login_success = "true";
            // Establece la variable de éxito del inicio de sesión a "true" ya que la autenticación fue exitosa.

    } else {
        $error_message = "Correo electrónico o contraseña incorrectos.";
            // Establece el mensaje de error si la autenticación falla.
    }

    header("Location: ../validar.php?success=$login_success&message=$error_message");
        // Redirige al usuario a la página `validar.php` con parámetros de éxito y mensaje de error en la URL.
}
?>
