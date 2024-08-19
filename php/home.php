<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../js/script.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class="logo"><a href="home.php"><img class="logo_header" src="../media/logo2.png"></a></li>
                <li class="items"><a href="home.php">Inicio</a></li>
                <li class="items"><a href="catalogo.php">Catalogo</a></li>
                <li class="items"><a href="#">Feedback</a></li>
                <li class="items"><a href="catalogo.php"><img class="user_icon" src="../media/usericon1.png" alt=""></a></li>
                <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
            </ul>
        </nav>
    </header>
    <!-- Slideshow container -->
    <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="../media/zzoro.gif" style="width:100%">
    <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img2.jpg" style="width:100%">
    <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img3.jpg" style="width:100%">
    <div class="text">Caption Three</div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    </div>
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
<script>
    document.addEventListener( 'DOMContentLoaded', function () {
        new Splide( '#image-slider' ).mount();
    } );
</script>