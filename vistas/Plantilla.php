<?php
session_start(); ?>
<?php
    if (isset($_GET["pagina"])) {
        if (
            $_GET["pagina"] == "iniciar" ||
            $_GET["pagina"] == "registro" ||
            $_GET["pagina"] == "tablas" ||
            $_GET["pagina"] == "home" ||
            $_GET["pagina"] == "service-single" ||
            $_GET["pagina"] == "service" ||
            $_GET["pagina"] == "form" ||
            $_GET["pagina"] == "salir" ||
            $_GET["pagina"] == "about" ||
            $_GET["pagina"] == "blog-single" ||
            $_GET["pagina"] == "blog" ||
            $_GET["pagina"] == "contact" ||
            $_GET["pagina"] == "error" ||
            $_GET["pagina"] == "event" ||
            $_GET["pagina"] == "gallery" ||
            $_GET["pagina"] == "story" ) {
                include "paginas/" . $_GET["pagina"] . ".php";}
            else{
                include "paginas/error.php";}}
        else {
            include "paginas/home.php";}
?>
    <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="author" content="NextGenerationDev">
                    <title>Wedding - GGT - 4B</title>
                        <link rel="shortcut icon" href="styles/assets/img/favicon/favicon.png">
                        <link rel="stylesheet" href="styles/assets/css/bootstrap.min.css">
                        <link rel="stylesheet" href="styles/assets/css/bootstrap.css.map">
                        <link rel="stylesheet" href="styles/assets/css/owl.min.css">
                        <link rel="stylesheet" href="styles/assets/css/owl.theme.default.min.css">
                        <link rel="stylesheet" href="styles/assets/css/all.min.css">
                        <link rel="stylesheet" href="styles/assets/css/animate.css">
                        <link rel="stylesheet" href="styles/assets/css/magnific-popup.css">
                        <link rel="stylesheet" href="styles/assets/css/swiper-bundle.min.css">
                        <link rel="stylesheet" href="styles/assets/css/main.css">
            </head>
                    <body>
                        <header class="header-section">
                            <div class="container">
                                <div class="header-wrapper">
                                    <div class="logo-menu">
                                        <a href="index.php?pagina=home" class="logo">
                                        <img src="styles/assets/img/logo/logo1.png" alt="img">
                                        </a>
                                    </div>
                                <div class="header-bar d-lg-none">
                            </div>
                                <ul class="main-menu">
                                    <li>
                                        <a href="#0">User<i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=iniciar">
                                            <span>Iniciar Sesion</span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=registro">
                                            <span>Registtarte</span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=tablas">
                                            <span>Administrador</span>
                                        </a>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=salir">
                                            <span>Salir</span>
                                        </a>
                                    </li>
                                </li>
                            </ul>
                        </li>
                                    <li class="active">
                                        <a href="index.php?pagina=home">Home</a>
                                    </li>
                                    <li>
                                        <a href="index.php?pagina=about">About</a>
                                    </li>
                                    <li>
                                        <a href="#0">Service <i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=service">
                                            <span>Service</span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=service-single">
                                            <span>Service Single</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                                    <li>
                                        <a href="index.php?pagina=story">Our story</a>
                                    </li>
                                    <li>
                                        <a href="#0">Pages <i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=event">
                                            <span>Our event</span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=gallery">
                                            <span>Gallery</span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=error">
                                            <span>Error 404</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                                    <li>
                                        <a href="#0">Blog <i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=blog">
                                            <span>Blog</span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=blog-single">
                                            <span>Blog Single</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                                    <li>
                                        <a href="index.php?pagina=contact">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <div class="footer__section">
        <div class="container">
            <div class="border__area">
                <div class="container">
                    <div class="footer__logo center">
                        <a href="index.php?Inicio=home">
                            <img src="styles/assets/img/logo/logo.png" alt="footer__logo">
                        </a>
                    </div>
                    <div class="footer__bottom center">
                        <p>© 2023 All Rights Reserved. Designed by <a href="#0" class="text-base-2">NextGenerationDev</a></p>
                            <ul class="footer__icon">
                                <li>
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fa-brands fa-twitter"></i></a>
                                </li>
                                <li class="active">
                                    <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                                </li>
                                <li class="mr-none">
                                    <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                            </ul>
                            <ul class="footer__menu">
                                <li>
                                    <a href="index.php?pagina=home">home</a>
                                </li>
                                <li>
                                    <a href="index.php?pagina=about">about</a>
                                </li>
                                <li>
                                    <a href="index.php?pagina=service">service</a>
                                </li>
                                <li>
                                    <a href="index.php?pagina=story">Story</a>
                                </li>
                                <li>
                                    <a href="index.php?pagina=gallery">gallery</a>
                                </li>
                                <li>
                                    <a href="index.php?pagina=blog">blog</a>
                                </li>
                                <li class="mr-none">
                                    <a href="index.php?pagina=contact">contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <script src="styles/assets/js/jquery-3.6.0.min.js"></script>
            <script src="styles/assets/js/bootstrap.bundle.min.js"></script>
            <script src="styles/assets/js/viewport.jquery.js"></script>
            <script src="styles/assets/js/wow.min.js"></script>
            <script src="styles/assets/js/owl.min.js"></script>
            <script src="styles/assets/js/swiper-bundle.min.js"></script>
            <script src="styles/assets/js/jquery.magnific-popup.min.js"></script>
            <script src="styles/assets/js/main.js"></script>
    </body>
</html>