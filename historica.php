<?php
session_start();
require "lib/navbar.php";

if (!isset($_SESSION['usuario_id'])) {
    header("Location: error404.php");
    exit();
}
// Asegura que el usuario haya iniciado sesión

$userId = $_SESSION['usuario_id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assect/layout.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200..1000&family=Roboto:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    <main class="">
        <div class="container_categorie">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <?php

                require './lib/db.php';

                function renderElement($id, $name, $descripcion, $precio)
                {
                    echo "<div class='card-container'>
                            <div class='card-header'>
                                <h2 class='card-title'>$name</h2>
                            </div>
                            <div class='card-content'>
                                <div class='card-description'>
                                    <p class='card-text'>$descripcion</p>
                                    <p class='card-price'>$$precio</p>
                                </div>
                            </div>
                            <div class='card-footer'>
                                <button type='button' class='card-pay-button disabled' disabled>Comprado</button>
                            </div>
                          </div>";
                }

                if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                    if (isset($_GET['nombre'])) {
                        $nombre = $_GET['nombre'];
                        $stmt = $pdo->prepare('SELECT h.* FROM historica h INNER JOIN usuario u ON h.usuario_id = u.id WHERE u.id = ? AND nombre LIKE ?');
                        $stmt->execute([$userId, "%$nombre%"]);
                        $productos = $stmt->fetchAll();
                    } else {
                        $stmt = $pdo->prepare('SELECT h.* FROM historica h INNER JOIN usuario u ON h.usuario_id = u.id WHERE u.id = ?');
                        $stmt->execute([$userId]);
                        $productos = $stmt->fetchAll();
                    }

                    foreach ($productos as $producto) {
                        renderElement($producto["id"], $producto["nombre"], $producto["descripcion"], $producto["precio"]);
                    }
                } else {
                    // Este bloque no debería ejecutarse en este contexto
                    $stmt = $pdo->prepare('SELECT h.* FROM historica h INNER JOIN usuario u ON h.usuario_id = u.id WHERE u.id = ?');
                    $stmt->execute([$userId]);
                    $productos = $stmt->fetchAll();

                    foreach ($productos as $producto) {
                        renderElement($producto["id"], $producto["nombre"], $producto["descripcion"], $producto["precio"]);
                    }
                }

                echo "</div></div>";
                require "lib/carrito.php";
                ?>
    </main>

    <?php require "lib/footer.php"; ?>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./assect/carrito.js"></script>
    <script src="./assect/menu.js"></script>
</body>

</html>