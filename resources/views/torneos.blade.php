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
    <section id="hero5" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <h1>Torneos</h1>
            <h2>El arte de pegar y no dejar que te peguen.</h2>
            <a href="#what-we-do" class="btn-get-started scrollto">Empecemos</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <section id="what-we-do" class="what-we-do">
            <div class="container">
                <div class="section-title">
                    <h2>¿Qué son los Torneos?</h2>
                    <p>Los torneos son eventos deportivos en los cuales los estudiantes de Taekwondo y Kick Boxing
                        realizan combates a nivel amateur con el objetivo de foguearse y así tomar experiencia, llevar a
                        cabo todo lo entrenado y divertirse.</p>
                    <br>
                    <p>A nivel nacional se llevan torneos cada mes, dependiendo de la región es como se organizan las
                        escuelas, regularmente son cada 4 o 5 meses. En algunas ocasiones los torneos duran 2 días
                        completos.
                    </p>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                            aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                            aria-label="Slide 7"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('home2/assets/img/torneos/torneo1.jpg')}}" class="align-center" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('home2/assets/img/torneos/torneo2.jpg')}}" class="align-center" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('home2/assets/img/torneos/torneo3.jpg')}}" class="align-center" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('home2/assets/img/torneos/torneo4.jpg')}}" class="align-center" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('home2/assets/img/torneos/torneo5.jpg')}}" class="align-center" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('home2/assets/img/torneos/torneo7.jpg')}}" class="align-center" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('home2/assets/img/torneos/torneo8.jpg')}}" class="align-center" alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="section-title">
                    <br>
                    <p>En cada torneo se le entrega una medalla y/o reconocimiento de su participación al estudiante, en
                        caso de un acciedente siempre hay primeros auxilios en puntos estratégicos para atender una
                        lesión, también se le da un trofeo a la escuela con más combates ganados.</p>
                    </p>
                </div>
            </div>
            <section id="about" class="about">
                <div class="container">
                    <div class="section-title"><br>
                        <h2>Momentos en Torneos</h2>
                        <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0"
                            class="scrollspy-example" tabindex="0">
                            <div class="card mb-3">
                                <div class=" row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('home2/assets/img/torneos/pelea1.jpg')}}"
                                            class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Copa Olímpico</h5>
                                            <p class="card-text">La copa olímpico se realiza cada año en diferente
                                                estado de la república donde asisten la mayoría de las escuelas.</p><br>
                                            <p class="card-text"><small class="text-muted">Puebla 2017</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class=" row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('home2/assets/img/torneos/pelea2.jpg')}}"
                                            class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Team Kick Boxing</h5>
                                            <p class="card-text">El torneo en Teziutlán se lleva acabo a mediados del
                                                mes de
                                                Febrero en el centro de convenciones, con invitados de regiones
                                                alrededores.</p><br>
                                            <p class="card-text"><small class="text-muted">Teziutlán 2019</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class=" row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('home2/assets/img/torneos/pelea3.jpg')}}"
                                            class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Trofeos</h5>
                                            <p class="card-text">Cada torneo otorga tres lugares a las escuelas con un
                                                mayor desempeño en todas las competiciones del día. Da un prestigio a la
                                                escuela ganadora.</p><br>
                                            <p class="card-text"><small class="text-muted">Teziutlán 2019</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class=" row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('home2/assets/img/torneos/pelea4.jpg')}}"
                                            class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Ganadores en Selectivo Estatal</h5>
                                            <p class="card-text">Estudiantes de Taekwondo de Xiutetelco participaron en
                                                el selectivo de Puebla para competir a nivel nacional es sus respectivas
                                                categorías.</p><br>
                                            <p class="card-text"><small class="text-muted">Puebla 2018</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class=" row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('home2/assets/img/torneos/pelea5.jpeg')}}"
                                            class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Combate Kick Boxing</h5>
                                            <p class="card-text">Cada combate de kick boxing tiene permitido patadas
                                                apartir de la rodilla hacia la cabeza y boxeo. 3 Rouds de 2 minutos
                                                con
                                                1 minuto de descanso.</p><br>
                                            <p class="card-text"><small class="text-muted">Teziutlán 2019</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class=" row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('home2/assets/img/torneos/pelea6.jpg')}}"
                                            class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Combate Taekwondo</h5>
                                            <p class="card-text">Cada combate de Taekwondo respeta las reglas
                                                globales,
                                                pateo al peto y careta, también permiten los golpes al peto.
                                                Dependiendo
                                                de la patada se van contando los puntos.</p><br>
                                            <p class="card-text"><small class="text-muted">Puebla 2021</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class=" row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('home2/assets/img/torneos/pelea7.jpg')}}"
                                            class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Equipo Teziutlán Ganador en Copa Olímpico</h5>
                                            <p class="card-text">Equipo de Kick Boxing del Doyang Grasfer gana
                                                primer
                                                lugar a nivel nacional, la competición en peso gallo.</p><br>
                                            <p class="card-text"><small class="text-muted">Puebla 2018</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class=" row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('home2/assets/img/torneos/pelea8.jpg')}}"
                                            class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">La Edad No Es Factor</h5>
                                            <p class="card-text">Niños y niñas compiten en combate, formas o
                                                circuitos
                                                psicomotrices a partir de los 4 años de edad.</p><br>
                                            <p class="card-text"><small class="text-muted">Atempan 2016</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </section>
    </main>

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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <!-- Template Main JS File -->
    <script src="{{ asset('home2/assets/js/main.js')}}"></script>

</body>

</html>