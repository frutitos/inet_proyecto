<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Inicio</title>
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
                <li class="logo"><img class="logo_header" src="../img/zzoro.gif"></li>
                <li class="items"><a href="home.php">Inicio</a></li>
                <li class="items"><a href="catalogo.php">Catalogo</a></li>
                <li class="items"><a href="#">Feedback</a></li>
                <li class="items"><a href="catalogo.php"><img class="user_icon" src="../img/usericon1.png" alt=""></a></li>
                <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <!-- Carousel wrapper -->
        <div
        id="carouselVideoExample"
        data-mdb-carousel-init class="carousel slide carousel-fade"
        data-mdb-ride="carousel"
        >
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button data-mdb-button-init
            type="button"
            data-mdb-target="#carouselVideoExample"
            data-mdb-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
            ></button>
            <button data-mdb-button-init
            type="button"
            data-mdb-target="#carouselVideoExample"
            data-mdb-slide-to="1"
            aria-label="Slide 2"
            ></button>
            <button data-mdb-button-init
            type="button"
            data-mdb-target="#carouselVideoExample"
            data-mdb-slide-to="2"
            aria-label="Slide 3"
            ></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
            <video class="img-fluid" autoplay loop muted>
                <source src="../img/rugby.mp4" type="video/mp4" />
            </video>
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>
                Nulla vitae elit libero, a pharetra augue mollis interdum.
                </p>
            </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
            <video class="img-fluid" autoplay loop muted>
                <source src="../img/fulbo.mp4" type="video/mp4" />
            </video>
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
            <video class="img-fluid" autoplay loop muted>
                <source src="../img/basket.mp4" type="video/mp4"/>
            </video>
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>
                Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                </p>
            </div>
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button data-mdb-button-init
            class="carousel-control-prev"
            type="button"
            data-mdb-target="#carouselVideoExample"
            data-mdb-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button data-mdb-button-init
            class="carousel-control-next"
            type="button"
            data-mdb-target="#carouselVideoExample"
            data-mdb-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
        <!-- Carousel wrapper -->
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
<script>
    document.addEventListener( 'DOMContentLoaded', function () {
        new Splide( '#image-slider' ).mount();
    } );
</script>