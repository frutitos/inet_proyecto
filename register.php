<!DOCTYPE html>
<html lang="en">
<!-- Declara el tipo de documento como HTML5 y establece el idioma del contenido en inglés -->

<head>
    <meta charset="UTF-8">
    <!-- Establece la codificación de caracteres del documento como UTF-8 para soportar caracteres especiales -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Configura la vista para que la página se ajuste al ancho del dispositivo y establezca una escala inicial del 100%, asegurando que la página sea responsive -->

    <title>Formulario de Registro</title>
    <!-- Define el título de la página, que se mostrará en la pestaña del navegador -->

    <link rel="stylesheet" href="./assect/register.css">
    <!-- Enlaza una hoja de estilos externa para el diseño específico de la página de registro -->
</head>

<body>
<div class="container">
    <!-- Contenedor principal para la estructura del formulario de registro -->

    <!-- Formulario de registro -->
    <form method="post" action="lib/registrar.php">
        <!-- Formulario para el registro; se enviará a "registrar.php" usando el método POST -->

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" class="input-field" required>
        <!-- Campo de entrada para el nombre; se asegura que el campo es obligatorio -->

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" class="input-field" required>
        <!-- Campo de entrada para el apellido; se asegura que el campo es obligatorio -->

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="input-field" required>
        <!-- Campo de entrada para el email; se asegura que el campo es obligatorio y valida que el contenido sea un email -->

        <label for="pass">Contraseña:</label>
        <input type="password" id="pass" name="pass" class="input-field" required>
        <!-- Campo de entrada para la contraseña; se asegura que el campo es obligatorio y oculta el contenido al escribir -->

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" class="input-field" required>
        <!-- Campo de entrada para la dirección; se asegura que el campo es obligatorio -->

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" class="input-field" required>
        <!-- Campo de entrada para el teléfono; se asegura que el campo es obligatorio -->

        <button type="submit" class="register-button">Registrarse</button>
        <!-- Botón para enviar el formulario y completar el registro -->
    </form>

    <a href="login.php" class="login-link">¿Ya tienes cuenta? Inicia sesión</a>
    <!-- Enlace para los usuarios que ya tienen una cuenta, redirigiéndolos a la página de inicio de sesión -->
</div>
</body>
</html>
