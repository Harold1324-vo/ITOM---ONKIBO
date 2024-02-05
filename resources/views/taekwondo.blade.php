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
                    <li><a class="nav-link scrollto active" href="/">Inicio</a></li>
                    <li><a class="nav-link scrollto" href="/historia-TK">ITOM-ONKIBO</a></li>
                    <li class="dropdown"><a href="#"><span>Diciplinas</span> <i class="bi bi-chevron-down"></i></a>
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
    <section id="hero2" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <h1>Taekwondo</h1>
            <h2>Tae: acción de pie- Kwon: acción de mano- Do: arte o camino</h2>
            <a href="#about" class="btn-get-started scrollto">Empecemos</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <br>
                    <div class="col-md-5" data-aos="fade-right">
                        <img src="{{ asset('home2/assets/img/logos/mono2.jpg')}}" width="410" height="410" alt="">
                    </div>

                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <br>
                        <h3>¿Qué es el Taewkondo?</h3>
                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Es una de las artes marciales tradicionales de Corea que enseña no sólo las
                                            habilidades físicas de pelea, muestra formas de realzar nuestro espíritu y
                                            nuestra vida a través del entrenamiento de nuestro cuerpo y mente <i
                                                class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Primero, el Taekwondo es la forma correcta de utilizar el Tae y el Kwon
                                            Puños y Pies o todas las partes del cuerpo que están representadas por los
                                            puños y los pies. <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Segundo, es una forma de controlar o calmar peleas y mantener la paz. <i
                                                class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Taekwondo significa “la forma correcta de utilizar todas las partes del
                                            cuerpo para detener peleas y ayudar a construir un mundo mejor y más
                                            pacífico”. <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->
                            </div>
                            <br>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Equipo Section ======= -->
        <section id="what-we-do" class="what-we-do">
            <div class="container">
                <div class="section-title"><br>
                    <h2>Equipo de Entrenamiento</h2>
                </div>
                <section id="about" class="about">
                    <div class="container">
                        <div class="row">
                            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0"
                                class="scrollspy-example" tabindex="0">
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="{{ asset('home2/assets/img/uniforme/uniformeTae.jpg')}}"
                                                class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">Dobok</h5>
                                                <p class="card-text">El Dobok es el uniforme oficial que cualquier
                                                    practicante
                                                    de Taekwondo utiliza, este va acompañada de su cinta en el grado
                                                    correspondiente del estudiante.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="{{ asset('home2/assets/img/uniforme/caretaTae.jpg')}}"
                                                class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">Careta</h5>
                                                <p class="card-text">La careta se utiliza para cubrir la parte trasera y
                                                    lateral
                                                    de la cabeza, así protegiendo la nuca y el cráneo temporal del
                                                    competidor.
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
                                                <p class="card-text">El protector bucal tiene la función de proteger la
                                                    dentatura, legua, piel interna de la boca y quijada de todos los
                                                    competidores de lesiones.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="{{ asset('home2/assets/img/uniforme/petoTae.jpg')}}"
                                                class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">Peto</h5>
                                                <p class="card-text">El peto tiene dos colores, rojo o azul, dependiendo
                                                    de la
                                                    esquina que le toque al competidor dicho color será el frontal.
                                                    Tiene la
                                                    función de proteger las costillas del competidor.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="{{ asset('home2/assets/img/uniforme/guantesTae.jpg')}}"
                                                class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">Guantes</h5>
                                                <p class="card-text">Los guantes de los taekwondoines se utilizan para
                                                    proteger
                                                    la zona abdominal ya que en dicha zona se reciben los golpes
                                                    frontales.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="{{ asset('home2/assets/img/uniforme/coderasTae.jpg')}}"
                                                class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">Coderas</h5>
                                                <p class="card-text">Las coderas protegen el antebrazo y codos de los
                                                    competidorers, esto para evitar patadas dirigidas al codo y posibles
                                                    fracturas o inflmación.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="{{ asset('home2/assets/img/uniforme/concha.jpg')}}"
                                                class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">Concha</h5>
                                                <p class="card-text">La concha protege los genitales de los competidores
                                                    de
                                                    patadas accidentales de su adversario.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="{{ asset('home2/assets/img/uniforme/espinillerasTae.jpg')}}"
                                                class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">Espinilleras</h5>
                                                <p class="card-text">Las espinilleras protegen la tibia y peroné de los
                                                    competidores de lesiones en dichas zonas.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="{{ asset('home2/assets/img/uniforme/empeinerasTae.jpg')}}"
                                                class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">Empeineras</h5>
                                                <p class="card-text">Las empeineras protegen los pies de los
                                                    competidores de
                                                    torceduras o lesiones por mal conexión en las patadas.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- End Equipo pt2 Section -->
            </div>
        </section>

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