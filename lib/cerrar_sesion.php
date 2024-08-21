<?php
session_start();
    // Inicia una nueva sesión o reanuda la sesión actual. Esto es necesario para manipular datos de sesión.

session_unset();
    // Elimina todas las variables de sesión. Es decir, borra todos los datos almacenados en la sesión actual.

session_destroy();
    // Destruye la sesión actual. Esto elimina toda la información relacionada con la sesión, incluyendo los datos almacenados y el identificador de la sesión.

header("Location: ../cerrar_sesion.php");
    // Redirige al usuario a la página 'cerrar_sesion.php' que está en el directorio superior. El código después de esta línea no se ejecutará debido a la redirección.
?>

<a href="login.php">Iniciar sesión</a>
    <!-- Enlace que permite al usuario volver a la página de inicio de sesión. Esta línea de código no se ejecutará si la redirección del header funciona correctamente, pero se incluye aquí como fallback por si la redirección falla. -->
