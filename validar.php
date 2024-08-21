<!DOCTYPE html>
<html lang="en">
<!-- Declara el tipo de documento como HTML5 y establece el idioma del contenido en inglés -->

<head>
    <meta charset="UTF-8">
    <!-- Establece la codificación de caracteres del documento como UTF-8 para soportar caracteres especiales -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Configura la vista para que la página se ajuste al ancho del dispositivo y establezca una escala inicial del 100%, asegurando que la página sea responsive -->

    <title>Login</title>
    <!-- Define el título de la página, que se mostrará en la pestaña del navegador -->
</head>

<body>
    <?php
    // Inicializar variables para manejar mensajes
    $login_success = false;
    $error_message = "";
    // Inicializa dos variables: una para indicar el éxito del inicio de sesión (por defecto `false`) 
    // y otra para almacenar mensajes de error (inicialmente vacía).

    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $login_success = $_GET["success"];
        $error_message = $_GET["message"];
    }
    // Comprueba si el método de solicitud es "GET". Si lo es, obtiene los valores de "success" y "message" de los parámetros de la URL 
    // y los asigna a las variables `$login_success` y `$error_message`, respectivamente.
    ?>

    <div class="login-container">
        <?php if ($login_success === "true") : ?>
            <!-- Si `$login_success` es igual a "true", se muestra el mensaje de éxito y se redirige a la página principal después de 3 segundos. -->

            <p class="success-message">Inicio de sesión exitoso. Redirigiendo...</p>
            <!-- Muestra un mensaje indicando que el inicio de sesión fue exitoso y que se redirigirá al usuario -->

            <script>
                setTimeout(function() {
                    window.location.href = 'index.php'; // Cambiar a la página de inicio correspondiente
                }, 3000); // Redirigir después de 3 segundos
            </script>
        <?php else : ?>
            <!-- Si `$login_success` no es "true", se muestra el mensaje de error y se redirige a la página de inicio de sesión después de 1 segundo. -->

            <p class="error-message"><?php echo $error_message; ?></p>
            <!-- Muestra un mensaje de error basado en el valor de `$error_message`. -->

            <script>
                setTimeout(function() {
                   window.location.href = 'login.php'; // Redirigir después de 1 segundo
                }, 1000);
            </script>
        <?php endif; ?>
        <!-- Termina la verificación de la condición y cierra el bloque PHP -->
    </div>

</body>

</html>
