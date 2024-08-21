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

    <link rel="stylesheet" href="./assect/login.css">
    <!-- Enlaza una hoja de estilos externa para el diseño específico de la página de inicio de sesión -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Preconecta a Google Fonts para mejorar la velocidad de carga de las fuentes -->

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Preconecta a Google Fonts y especifica que se permite compartir recursos entre diferentes orígenes (cross-origin) -->

    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Enlaza las fuentes "Nunito" y "Roboto" desde Google Fonts con diferentes estilos y pesos -->
</head>

<body>
    <div class="login-container">
        <!-- Contenedor principal para la estructura de la página de inicio de sesión -->

        <h2>Inicio de sesión</h2>
        <!-- Título que indica que la página es para el inicio de sesión -->

        <form id="loginForm" action="lib/iniciar_sesion.php" method="post">
            <!-- Formulario para el inicio de sesión; se enviará a "iniciar_sesion.php" usando el método POST -->

            <div class="input-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
                <!-- Grupo de entrada para el correo electrónico; se asegura que el campo es obligatorio y valida que el contenido sea un email -->
            </div>

            <div class="input-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="pass" required>
                <!-- Grupo de entrada para la contraseña; se asegura que el campo es obligatorio y oculta el contenido al escribir -->
            </div>

            <button type="submit" class="btn">Iniciar sesión</button>
            <!-- Botón para enviar el formulario e intentar iniciar sesión -->

            <p>No tienes una cuenta? <a href="register.php">Regístrate aquí</a></p>
            <!-- Mensaje para los usuarios que no tienen cuenta, proporcionando un enlace para registrarse -->
        </form>
    </div>
</body>
</html>
