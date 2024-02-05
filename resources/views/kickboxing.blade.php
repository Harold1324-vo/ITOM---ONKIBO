<!DOCTYPE html>
<html lang="en-MX">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="Taekwondo, Kick boxing, ITOM, ONKI-BO, Teziutlán">
    <meta name="description"
        content="ITOM la institución que forma a los mejores taekwondoines y kick boxers de México.">
    <meta name="author" content="Equipo Mictlán">
    <meta name="copyright" content="ITOM - ONKI-BO">
    <title>ITOM - ONKIBO</title>

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('home2/assets/img/logos/taekwondo.png')}}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('home2/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('home2/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('home2/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('home2/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('home2/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('home2/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <div class="logo me-auto">
                <h1>
                    <img src="{{ asset('home2/assets/img/logos/taekwondo.png')}}" alt="" class="img-fluid">
                    <a href="/">ITOM - ONKIBO</a>
                    <img src="{{ asset('home2/assets/img/logos/kickboxing.png')}}" alt="" class="img-fluid">
                </h1>
            </div>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="/">Inicio</a></li>
                    <li><a class="nav-link scrollto" href="/historia-TK">ITOM-ONKIBO</a></li>
                    <li class="dropdown"><a href="#"><span>Diciplinas</span><i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/TK">Taekwondo</a></li>
                            <li><a href="/KB">Kick Boxing</a></li>
                        </ul>
                    <li class="dropdown"><a href="#"><span>Eventos</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/Seminarios">Seminarios</a></li>
                            <li><a href="/Torneos">Torneos</a></li>
                        </ul>
                    <li><a class="nav-link scrollto" href="/Escuelas">Escuela</a></li>
                    </li>
                    <li><a class="nav-link scrollto" href="/Informacion">Acerca de nosotros</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <div class="header-social-links d-flex align-items-center">
                <div
                    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                        @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">
                            <img src="{{ asset('home2/assets/img/logos/usuario.png')}}"></a>
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
    </header>

    <!-- ======= Hero Section ======= -->
    <section id="hero3" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <h1>Kick Boxing</h1>
            <h2>キックボクシング</h2>
            <a href="#about" class="btn-get-started scrollto">Empecemos</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <br>
                    <div class="col-md-5 order-1 order-md-6" data-aos="fade-left">
                        <img src="{{ asset('home2/assets/img/logos/mono1.jpg')}}" width="400" height="400" alt="">
                    </div>

                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <br>
                        <h3>¿Qué es el Kick Boxing?</h3>
                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            El kick boxing como tal es la combinación de dos disciplinas ya existentes
                                            previamente: el karate japonés y el boxeo occidental.<i
                                                class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Se trata de un deporte de contacto que alterna golpes propios del boxeo y
                                            patadas de artes marciales. <i
                                                class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            En el kick boxing se puede utilizar las piernas para lanzar patadas a parte
                                            de los brazos, mientras que en el boxeo esto no está permitido. <i
                                                class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            En la época de sus inicios, surge como el deseo de los artistas marciales de
                                            mantener contacto en las competiciones. <i
                                                class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->
                            </div><br><br>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
        </section><!-- End About Section -->

        <!-- ======= Equipo Section ======= -->
        <section id="what-we-do" class="what-we-do">
            <div class="container">

                <div class="section-title">
                    <h2>Equipo de entrenamiento</h2>
                </div>
                <!-- ======= Equipo pt2 Section ======= -->
                <section id="about" class="about">
                    <div class="container">
                        <div class="row">
                            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0"
                                class="scrollspy-example" tabindex="0">
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="{{ asset('home2/assets/img/uniforme/uniformeKick.jpg')}}"
                                                class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">Dobok</h5>
                                                <p class="card-text">El Dobok es el uniforme oficial que se utiliza en
                                                    la organización ONKI-BO, este va acompañada de su cinta en el grado
                                                    correspondiente del estudiante.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="{{ asset('home2/assets/img/uniforme/protectorB.jpg')}}"
                                                class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">Protector Bucal</h5>
                                                <p class="card-text">El protector bucal tiene la función de proteger
                                                    la
                                                    dentatura, legua, piel interna de la boca y quijada de todos los
                                                    competidores de lesiones derivadas de golpes o patadas.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="{{ asset('home2/assets/img/uniforme/vendaje.jpg')}}"
                                                class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">Vendas</h5>
                                                <p class="card-text">Las vendas pueden ser normales, o de marca. Hay
                                                    diferente tipo de vendaje, pero en el Kick Boxing solo se necesitan
                                                    dos vendas de 5cm de largo y 5 cm de ancho.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="{{ asset('home2/assets/img/uniforme/GuantesB.jpg')}}"
                                                class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">Guantes de Boxeo</h5>
                                                <p class="card-text">Para el Kick Boxing se utilizan los guantes de
                                                    boxeo, dependiendo del peso del estudiante es que se le piden de
                                                    onzas específicas.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="{{ asset('home2/assets/img/uniforme/concha.jpg')}}"
                                                class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">Concha</h5>
                                                <p class="card-text">La concha protege los genitales de los
                                                    competidores de
                                                    patadas accidentales de su adversario.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="{{ asset('home2/assets/img/uniforme/Espinillera.jpg')}}"
                                                class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">Espinilleras</h5>
                                                <p class="card-text">Las espinilleras protegen desde el empeine hasta
                                                    abajo de la rodilla a los competidores, para evitar graves lesiones
                                                    en esas zonas.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- End Equipo Section -->
            </div>
        </section><!-- End Equipo pt2 Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">
                <h2>Asociasiones</h2>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <a href="https://www.facebook.com/aptkdoficial/" target="_blank"><img
                                src="{{ asset('home2/assets/img/pie/APTKD.jpg')}}" class="img-fluid" alt=""></a>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <a href="http://www.worldtaekwondo.org/index.html" target="_blank"><img
                                src="{{ asset('home2/assets/img/pie/WT.png')}}" class="img-fluid" alt=""></a>
                    </div>

                    <div class="col-lg-15 col-md-4 col-7 d-flex align-items-center justify-content-center">
                        <a href="https://www.femextkdoficial.mx/" target="_blank"><img
                                src="{{ asset('home2/assets/img/pie/client-3.png')}}" class="img-fluid" alt=""></a>
                    </div>
                </div>
            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Footer ======= -->
        <footer id="footer">

            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h2>Contáctos</h2>
                        </div>
                        <div class="center">
                            <img src="{{ asset('home2/assets/img/pie/olimpicos.jpg')}}" class="align-center" alt="">
                        </div>
                    </div>
                    <br>
                    <p>
                        Josefa Ortiz de Domínguez 21 <br>
                        73800 Teziutlán, Pue.<br>
                        <br>
                        <strong>Phone:</strong> 222 612 0527<br>
                        <strong>Email:</strong> doyangtkdgrasfer@gmail.com<br>
                    </p>
                </div>

                <div class="container d-md-flex py-4">

                    <div class="me-md-auto text-center text-md-start">
                        <div class="copyright">
                            &copy; Copyright <strong><span>Equipo Mictlan</span></strong>. All Rights Reserved
                        </div>
                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/lumia-bootstrap-business-template/ -->
                        </div>
                    </div>
                    <div class="social-links text-center text-md-right pt-3 pt-md-0">
                        <a href="https://www.facebook.com/ITOMcentral/" class="facebook" target="_blank"><i
                                class="bx bxl-facebook"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=5212311221733&text=Hola%2C%20vi%20su%20p%C3%A1gina%20web.%20Me%20puede%20dar%20informes%20sobre%20las%20clases%20porfavor."
                            class="whatsapp" target="_blank"><i class="bx bxl-whatsapp"></i></a>
                    </div>
                </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('home2/assets/vendor/bootstrap/js/bootstrap.bundle.min.')}}"></script>
        <script src="{{ asset('home2/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{ asset('home2/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{ asset('home2/assets/vendor/php-email-form/validate.js')}}"></script>
        <script src="{{ asset('home2/assets/vendor/purecounter/purecounter.js')}}"></script>
        <script src="{{ asset('home2/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{ asset('home2/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('home2/assets/js/main.js')}}"></script>

</body>

</html>