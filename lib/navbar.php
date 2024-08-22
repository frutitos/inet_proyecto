<header>
    <nav>
        <ul>
            <li class="logo"><a href="index.php"><img class="logo_header" src="./assect/logo2.png"></a></li>
            <li class="items"><a href="index.php">Inicio</a></li>
            <li class="items"><a href="category.php">Catalogo</a></li>
            <?php
            if (!isset($_SESSION['usuario_id'])) {
                echo "<li class='items'><a href='login.php'> Iniciar Sesión</a></li>";
                echo "<script>var login = 'false'</script>";
            } else {
                $userId =  $_SESSION['usuario_id'];
                echo "<li class='items'><a href='historica.php'>Historica</a></li>";
                echo "<li class='items'><a href='./lib/cerrar_sesion.php'>Cerrar Sesión</a></li>";
                echo "<script>var login = 'true'</script>";
                echo "<script>var id_user = '$userId'</script>";
            }
            ?>

        </ul>
        <div class="menu_desplegrable move">
            <ul>
                <li class="menu_desplegrable__items"><a href="index.php">Inicio</a></li>
                <li class="menu_desplegrable__items penultimo"><a href="category.php">Catalogo</a></li>
                <?php
                if (!isset($_SESSION['usuario_id'])) {
                    echo "<li class='menu_desplegrable__items'><a href='login.php'> Iniciar Sesión</a></li>";
                } else {
                    echo "<li class='menu_desplegrable__items'><a href='./lib/cerrar_sesion.php'>Cerrar Sesión</a></li>";
                }
                ?>

            </ul>
        </div>
        <button id="btn-menu">
            <ion-icon name="menu"></ion-icon>
        </button>
    </nav>
</header>