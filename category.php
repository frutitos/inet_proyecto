<!DOCTYPE html>
<html lang="en">
<!-- Declara el tipo de documento como HTML5 y establece el idioma del contenido en inglés -->

<head>
    <meta charset="UTF-8">
    <!-- Establece la codificación de caracteres del documento como UTF-8 para soportar caracteres especiales -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Configura la vista para que la página se ajuste al ancho del dispositivo y establezca una escala inicial del 100%, asegurando que la página sea responsive -->

    <title>Document</title>
    <!-- Define el título de la página, que se mostrará en la pestaña del navegador -->

    <link rel="stylesheet" href="./assect/layout.css">
    <!-- Vincula el archivo CSS para aplicar estilos a la página -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Preconecta a las fuentes de Google para cargar fuentes personalizadas de manera más rápida -->

    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Vincula las fuentes personalizadas "Nunito" y "Roboto" desde Google Fonts -->
</head>

<body>
    <?php
    session_start();
    require "lib/navbar.php";
    ?>
    <!-- Inicia la sesión del usuario y carga la barra de navegación desde un archivo PHP externo -->

    <main class="">
        <div class="container_categorie">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <?php

                require './lib/db.php';
                // Incluye el archivo de conexión a la base de datos

                function rederElement($id, $name, $descripcion, $precio)
                {
                    echo "<div class='card-container'><div class='card-header'><h2 class='card-title'>$name</h2></div><div class='card-content'><div class='card-description'><p class='card-text'>$descripcion</p><p class='card-price'>$$precio</p></div></div><div class='card-footer'><button class='card-pay-button' onclick='guardarProductoEnLocalStorage($id)'>Añadir</button></div></div>";
                }
                // Define una función `rederElement` que genera HTML para mostrar un producto en una tarjeta con su nombre, descripción, precio y un botón para añadirlo al carrito.

                if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                    if (isset($_GET['nombre'])) {
                        $nombre = $_GET['nombre'];
                        $stmt = $pdo->prepare('SELECT * FROM producto WHERE nombre LIKE ?');
                        $stmt->execute(["%$nombre%"]);
                        $productos = $stmt->fetchAll();
                        // Si la solicitud es de tipo GET y existe el parámetro 'nombre', prepara una consulta SQL para buscar productos cuyo nombre coincida parcialmente con el valor de 'nombre'.

                        echo $productos["id"];
                        // Imprime el id del primer producto (aunque esta línea parece estar incorrecta, ya que $productos es un array multidimensional).
                    } else {
                        $stmt = $pdo->query('SELECT * FROM producto');
                        $productos = $stmt->fetchAll();
                        // Si no se proporciona un nombre, selecciona todos los productos de la base de datos.

                        foreach ($productos as $key => $value) {
                            rederElement($value["id"], $value["nombre"], $value["descripcion"], $value["precio"]);
                        }
                        // Recorre todos los productos obtenidos y genera el HTML correspondiente para cada uno usando la función `rederElement`.
                    }
                } else {
                    $stmt = $pdo->query('SELECT * FROM producto');
                    $productos = $stmt->fetchAll();
                    echo 4124;
                    // Si la solicitud no es de tipo GET (lo cual no debería ocurrir en este caso, ya que el formulario se basa en GET), selecciona todos los productos y muestra un número (probablemente un código de depuración).
                }
                echo "</div></div>";
                require "lib/carrito.php";
                ?>
                <!-- Cierra las etiquetas div y carga el archivo PHP que maneja el carrito de compras -->
    </main>
    <?php
    require "lib/footer.php";
    ?>
    <!-- Carga el pie de página desde un archivo PHP externo -->

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- Carga los iconos de Ionicons, con soporte para módulos ECMAScript y versiones anteriores de JavaScript -->

    <script src="./assect/carrito.js"></script>
    <script src="./assect/menu.js"></script>
    <!-- Carga los scripts JavaScript para manejar el carrito de compras y el menú -->
</body>

</html>
