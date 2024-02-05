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
    <section id="hero1" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <h1><span>Historia de las Organizaciones</span></h1><br>
            <a href="#what-we-do" class="btn-get-started scrollto">Empecemos</a>
        </div>
    </section>

    <main id="main">
        <!--=======Historia de las organizacioned Section=======-->
        <section id="what-we-do" class="what-we-do">
            <div class="container">
                <div class="section-title">
                    <h2>El Inicio de Todo</h2>
                    <div class="polaroid">
                        <img src="{{ asset('home2/assets/img/historia/historia.jpg')}}" class="align-center" alt="">
                    </div>
                    <div class="section-title">
                        <br>
                        <p>
                            1987 la época de oro de los grandes torneos empezaba a quedar en receso para dar paso a
                            nuevas opciones de competencia, el “Full Contact” reinaba aún y atraía cada vez más público
                            que ansiaba ver encuentros fuertes que compitieran en calidad y fuerza con el tan amado box
                            mexicano.
                        </p>
                        <br>
                        <p>
                            La idea de golpear con pies y manos, cuatro guantes en lugar de dos volvieron loca a toda
                            una generación que venía con la resaca del impacto brutal que Bruce Lee dio al mundo, el
                            pequeño Dragón fue el verdadero precursor de la competencia del contacto completo.
                        </p>
                        <br>
                        <p>
                            El inicio fue duro y lento gracias a las críticas, muchas grandes personalidades se
                            pronunciaron en contra y trataron por todos los medios de bloquear su crecimiento, incluso
                            presidentes de federaciones y del Consejo Mundial de Boxeo, estos mismos personajes años más
                            tarde se convirtieron en sus principales promotores demostrando una hipocresía profesional.
                        </p>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="polaroid">
                            <img src="{{ asset('home2/assets/img/historia/fine.jpg')}}" class="align-center" alt="">
                        </div>
                        <div class="section-title">
                            <br>
                            <p>
                                Para 1990 Enrique escribe los primeros reglamentos de competencia y manuales de
                                entrenamiento junto con su maestro y deciden cambiar el nombre a KICKBOXING, la década
                                del 90 significa el crecimiento exponencial.</p>
                            <br>
                            <p>
                                El punto negro vino cuando cientos de “maestros” de otros estilos brincaban a enseñar
                                kickboxing sin ninguna capacitación, inventando barbaridades a las que llamaban
                                “kickboxing” sin tener ni idea del sistema profesional.</p>
                            <br>
                            <p>
                                La calidad de este primer kickboxing que se enseñó en nuestro país es reconocida en todo
                                el mundo y está considerada una de las mejores escuelas del continente americano, y la
                                combinación del carácter mexicano con el profesionalismo del sistema de enseñanza han
                                dado por resultado miles de alumnos en la republica.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Historia de las organizaciones section -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('home2/assets/img/historia/macfarland.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>Historia del presidente Macfarlan</h3>
                        <p>
                            Profesor Willy Macfarland Ávila: 8° Dan, Instructor Internacional, fundador del ITOM en
                            1986; profesor de taekwondo desde 1981, practica el taekwondo desde 1973, campeón
                            nacional
                            cintas verdes 1974, campeón nacional cintas azules 1976, seleccionado nacional marrón en
                            1977 por el primer campeonato norteamericano de taekwondo, preseleccionado nacional para
                            el
                            campeonato nacional en Sttugard, Alemania 1979, preseleccionado nacional taekwondo en el
                            7°
                            campamento Panamericano 1994, 1996 primer lugar en combate y segundo en formas, primer
                            lugar
                            en el abierto de México 1997, delegado del equipo de México en España, Canadá y
                            Guatemala.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->
        <!--=======Historia Macfarland pt2 Section=======-->
        <section id="about" class="about">
            <div class="container">
                <div class="row content">
                    <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                        <img src="{{ asset('home2/assets/img/historia/Mcfarland2.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                        <p>
                            Presidente del Instituto de Tae Kwon Do Olímpico de México, 33 años de experiencia
                            avalado
                            por la PATU (Panamericano Daek Júnior), seleccionado nacional en 1979 y 1985,
                            ganador de 1°
                            lugar en formas y combate en el Panamericano durante 3 años, ex entrenador de las
                            competencias internacionales.
                        <p><br>
                    </div>
                </div>
            </div>
        </section>
    </main><br>

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