<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

<body class="antialiased">

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
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <h1>Instituto Taekwondo Olímpico de México</h1>
            <h1>y Organización Nacional de Kick Boxing</h1><br>
            <a href="#what-we-do" class="btn-get-started scrollto">Empecemos</a>
        </div>
    </section>

    <main id="main">
        <!-- ======= Quienes somos Section ======= -->
        <section id="what-we-do" class="what-we-do">
            <div class="container">
                <div class="section-title">
                    <h2>¿Quiénes Somos?</h2>
                    <p>El Instituto de Taekwondo Olímpico de México “Doyang Grasfer” es la escuela iniciadora de la
                        práctica del taekwondo en Teziutlán desde 1988.</p>
                    <br>
                    <p>El 14 de Julio del 2014 se inició la práctica del Kick Boxing siendo impartida por el
                        profesor
                        Víctor Manuel Vázquez Cruz, comenzando con un curso de verano con duración de un mes pero
                        que
                        desde ese día se ha trabajado con el objetivo de dar a conocer y difundir estas artes
                        marciales.
                    </p>
                </div>
                <section id="get-started" class="padd-section text-center">
                    <div class="container" data-aos="fade-up">
                        <div class="section-title text-center">
                            <h2>Durante este tiempo se han formado:</h2>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                                <div class="feature-block">
                                    <img src="{{ asset('home2/assets/img/inicio/Practicantes.jpg')}}" width="300"
                                        height="200" alt="img">
                                    <h4>Practicantes</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                                <div class="feature-block">
                                    <img src="{{ asset('home2/assets/img/inicio/Docente.jpg')}}" width="300"
                                        height="200" alt="img">
                                    <h4>Instructores</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                                <div class="feature-block">
                                    <img src="{{ asset('home2/assets/img/inicio/Competidores.jpg')}}" width="300"
                                        height="200" alt="img">
                                    <h4>Competidores</h4>
                                </div>
                            </div>
                            <br>
                            <p>A nivel estatal, regional, nacional e internacional.</p>
                            <br><br><br>
                            <p>El propósito fundamental es poder guiar al alumno hacia su propio desarrollo físico y
                                mental a través de un aprendizaje gradual y sistemático que te lleve a comprender el
                                verdadero significado de las artes marciales.</p>
                            <br>
                            <p>Esto requiere esfuerzo, sacrificio, constancia, dedicación, humildad y otros factores
                                para mejorar la preparación.</p>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                                <div class="feature-block">
                                    <img src="{{ asset('home2/assets/img/logos/mono2.jpg')}}" width="300" height="300"
                                        alt="img">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                                <div class="feature-block">
                                    <img src="{{ asset('home2/assets/img/logos/kickboxing.png')}}" width="300"
                                        height="300" alt="img">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                                <div class="feature-block">
                                    <img src="{{ asset('home2/assets/img/logos/mono1.jpg')}}" width="300" height="300"
                                        alt="img">
                                </div>
                            </div>
                        </div>
                    </div><br>
                </section><!-- End What We Do Section -->

                <!--Comienzo de Noticias-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-15 col-lg-15" data-aos="zoom-in" data-aos-delay="100">
                            <div class="feature-block">
                                <div class="container">
                                    <div class="section-title">
                                        <h2>Noticias</h2>
                                    </div>
                                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="testimonial-item">
                                                    <img src="{{ asset('home2/assets/img/noticias/Promocion.jpeg')}}"
                                                        width="300" height="300" class="testimonial-img" alt="">
                                                </div>
                                            </div><!-- End Noticias item -->

                                            <div class="swiper-slide">
                                                <div class="testimonial-item">
                                                    <img src="{{ asset('home2/assets/img/noticias/Oferta.jpeg')}}"
                                                        width="300" height="300" class="testimonial-img" alt="">
                                                </div>
                                            </div><!-- End Noticias item -->
                                            <div class="swiper-slide">
                                                <div class="testimonial-item">
                                                    <img src="{{ asset('home2/assets/img/noticias/Anuncio.jpeg')}}"
                                                        width="300" height="300" class="testimonial-img" alt="">
                                                </div>
                                            </div><!-- End Noticias item -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br><br>

                    <!-- ======= Eventos Section ======= -->
                    <div class="container">
                        <div class="section-title">
                            <h2>Eventos</h2>
                        </div>
                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="{{ asset('home2/assets/img/noticias/aviso1.jpg')}}" width="300"
                                            height="300" class="testimonial-img" alt="">
                                    </div>
                                </div><!-- End eventos item -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="{{ asset('home2/assets/img/noticias/aviso2.jpg')}}" width="300"
                                            height="300" class="testimonial-img" alt="">
                                    </div>
                                </div><!-- End eventos item -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="{{ asset('home2/assets/img/noticias/aviso3.jpg')}}" width="300"
                                            height="300" class="testimonial-img" alt="">
                                    </div>
                                </div><!-- End eventos item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End eventos Section -->
    </main><!-- End #main -->

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
                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a href="https://www.facebook.com/ITOMcentral/" class="facebook" target="_blank"><i
                            class="bx bxl-facebook"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=5212311221733&text=Hola%2C%20vi%20su%20p%C3%A1gina%20web.%20Me%20puede%20dar%20informes%20sobre%20las%20clases%20porfavor."
                        class="whatsapp" target="_blank"><i class="bx bxl-whatsapp"></i></a>
                </div>
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