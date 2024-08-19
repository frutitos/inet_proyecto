<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
    <link rel="stylesheet" href="../css/catalogo.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" defer></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js" defer></script>
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar">
        <div class="logo">
            <img src="img/logo2.png" alt="Logo">
        </div>
        <div class="nav-links">
            <a href="#inicio">Inicio</a>
            <a href="#catalogo">Catálogo</a>
            <a href="#asistencia">Asistencia al Cliente</a>
        </div>
        <div class="user-icon">
            <img src="img/usericon1.png" alt="Usuario">
        </div>
    </nav>
    <div class="cart-icon">
        <a href="#carrito"><ion-icon name="cart-outline"></ion-icon></a>
    </div>

    <!-- Filtro del catálogo debajo de la barra de navegación -->
    <aside class="sidebar">
        <h3>Filtrar por:</h3>
        <ul>
            <li><input type="checkbox"> Ropa</li>
            <li><input type="checkbox"> Calzado</li>
            <li><input type="checkbox"> Accesorios</li>
            <li><input type="checkbox"> Ofertas</li>
        </ul>
    </aside>

    <!-- Sección de productos -->
    <section class="products">
        <h2>Productos Destacados</h2>
        <div class="product-list">
            <div class="product">
                <ion-icon name="basketball-outline"></ion-icon>
                <p>$100</p>
            </div>
            <div class="product">
                <ion-icon name="tennisball-outline"></ion-icon>
                <p>$150</p>
            </div>
            <div class="product">
                <p>$200</p>
            </div>
            <div class="product">
                <ion-icon name="football-outline"></ion-icon>
                <p>$200</p>
            </div>
            <div class="product">
                <img src="producto3.jpg" alt="Producto 3">
                <p class="product-name">Producto 3</p>
                <p>$200</p>
            </div>
            <div class="product">
                <img src="producto3.jpg" alt="Producto 3">
                <p class="product-name">Producto 3</p>
                <p>$200</p>
            </div>
            <div class="product">
                <img src="producto3.jpg" alt="Producto 3">
                <p class="product-name">Producto 3</p>
                <p>$200</p>
            </div>
            <!-- Añadir más productos según sea necesario -->
        </div>
    </section>

    <!-- Pie de página -->
    <footer class="footer">
        <p>© 2024 Nuestra Empresa. Todos los derechos reservados.</p>
        <p>Información de contacto: contacto@empresa.com | Tel: +1 (234) 567-890</p>
    </footer>
</body>
</html>

