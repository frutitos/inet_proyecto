<!DOCTYPE html>
<html lang="en">
<!-- Declara el tipo de documento como HTML5 y establece el idioma del contenido en inglés -->

<head>
    <meta charset="UTF-8">
    <!-- Establece la codificación de caracteres del documento como UTF-8 para soportar caracteres especiales -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Configura la vista para que la página se ajuste al ancho del dispositivo y establezca una escala inicial del 100%, asegurando que la página sea responsive -->

    <title>SportivaFit</title>
    <!-- Define el título de la página, que se mostrará en la pestaña del navegador -->

    <link rel="stylesheet" href="./assect/layout.css">
<<<<<<< HEAD
    <!-- Enlaza una hoja de estilos externa para el diseño general de la página -->

    <link rel="stylesheet" href="./assect/carrusel.css">
    <!-- Enlaza otra hoja de estilos externa específica para el carrusel -->

=======
    <link rel="stylesheet" href="./assect/carrusel.css">
>>>>>>> 285274fb993e1ca0bac8bd329d8c2ddf082d01c1
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Preconecta a Google Fonts para mejorar la velocidad de carga de las fuentes -->

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Preconecta a Google Fonts y especifica que se permite compartir recursos entre diferentes orígenes (cross-origin) -->

    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Enlaza las fuentes "Nunito" y "Roboto" desde Google Fonts con diferentes estilos y pesos -->

    <link rel="icon" href="./media/favicon.png" type="image/x-icon">
    <!-- Establece un favicon para la página, que es el pequeño icono que aparece en la pestaña del navegador -->
</head>

<body>
    <?php
    session_start();
    require "lib/navbar.php"
    ?>
    <!-- Inicia una sesión en PHP y carga el archivo "navbar.php" para mostrar la barra de navegación -->

    <main>
        <?php
        require "lib/carrito.php"
        ?>
<<<<<<< HEAD
        <!-- Carga el archivo "carrito.php" para manejar el carrito de compras -->

        <!-- Slideshow container -->
        <div class="slideshow-container">
            <!-- Contenedor para el carrusel de imágenes -->

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <!-- Texto que muestra el número de la imagen actual sobre el total -->

                <img src="./media/pateando.jpg" style="width:100%">
                <!-- Imagen que ocupa el 100% del ancho del contenedor -->
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <!-- Texto que muestra el número de la imagen actual sobre el total -->

                <img src="./media/basket.jpg" style="width:100%">
                <!-- Imagen que ocupa el 100% del ancho del contenedor -->
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <!-- Texto que muestra el número de la imagen actual sobre el total -->

                <img src="./media/rugby.jpg" style="width:100%">
                <!-- Imagen que ocupa el 100% del ancho del contenedor -->
            </div>

            <!-- Next and previous buttons
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            -->
            <!-- Botones para navegar entre las imágenes del carrusel. Actualmente están comentados -->

        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <!-- Indicadores de puntos que permiten al usuario seleccionar y navegar a una imagen específica del carrusel -->
        </div>
=======
    <!-- Slideshow container -->
    <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="./media/pateando.jpg" style="width:100%">
        <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="./media/basket.jpg" style="width:100%">
        <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="./media/rugby.jpg" style="width:100%">
        <div class="text">Caption Three</div>
    </div>

    <!-- Next and previous buttons
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br> -->

    <!-- The dots/circles -->
    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    </div>
>>>>>>> 285274fb993e1ca0bac8bd329d8c2ddf082d01c1
    </main>

    <?php
    require "lib/footer.php"
    ?>
    <!-- Carga el archivo "footer.php" para mostrar el pie de página -->

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <!-- Enlaza un script modular para cargar los iconos de Ionicons desde un CDN -->

    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- Enlaza un script no modular para cargar los iconos de Ionicons, para navegadores que no soportan módulos -->

    <script src="./assect/carrito.js"></script>
<<<<<<< HEAD
    <!-- Enlaza un archivo JavaScript externo para manejar las funciones del carrito de compras -->

    <script src="./assect/carrusel.js"></script>
    <!-- Enlaza un archivo JavaScript externo para manejar el funcionamiento del carrusel -->

    <script src="./assect/menu.js"></script>
    <!-- Enlaza un archivo JavaScript externo para manejar el menú de navegación -->
=======
    <script src="./assect/carrusel.js"></script>
>>>>>>> 285274fb993e1ca0bac8bd329d8c2ddf082d01c1
</body>

</html>
