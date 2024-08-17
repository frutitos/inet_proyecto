<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Responsive Navigation Bar</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class="logo"><img class="logo_header" src="../zzoro.gif"></li>
                <li class="items"><a href="home.php">Inicio</a></li>
                <li class="items"><a href="#">Contact</a></li>
                <li class="items"><a href="#">Feedback</a></li>
                <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>hola</h1>
    </main>
    <footer>
        <div class="pie">
            <p>hola</p>
        </div>
    </footer>
</body>
</html>
<script>
    $(document).ready(function(){
        $('.btn').click(function(){
            $('.items').toggleClass("show");
            $('ul li').toggleClass("hide");
        });
        });
</script>