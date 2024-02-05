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
    <section id="hero6" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <h1>Escuelas</h1>
            <h2>Llora en el Dojo, Ríe en el Campo de Batalla.</h2>
            <a href="#what-we-do" class="btn-get-started scrollto">Empecemos</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <section id="what-we-do" class="what-we-do">
            <div class="container">
                <div class="section-title">
                    <h2>Escuelas en Toda la República</h2>
                    <p>Dentro de la república mexicana existen escuelas que imparten Taekwondo y Kick Boxing desde los
                        años noventas, la época de apogeo del Taekwondo ya había pasado mientras que la del Full Contac
                        apenas iniciaba.</p>
                    <br>
                    <p>Todas las escuelas cuentas con senseis capacitados y formados desde cero, inculcando los valores,
                        principios y disciplina que conllevan ambas artes marciales. Cada una de las escuelas ha formado
                        grandes competidores a nivel estatal, regional y olímpico.
                    </p>
                </div>
                <div class="section-title"><br>
                    <h2>Puebla y sus Doyangs</h2>
                    <p>El estado de Puebla cuenta con diversas escuelas fundadas en años recientes con logros
                        importantes en los últimos años, también escuelas con basta experiencia en competiciones de
                        todos los niveles. El municipio de Teziutlán cuenta con dos escuelas, alrededor del municio hay
                        más. Algunas de estas son las siguientes.</p>
                </div>
            </div>
            <section id="about" class="about">
                <div class="container">
                    <div class="section-title"><br>
                        <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0"
                            class="scrollspy-example" tabindex="0">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Doyang Grasfer Centro</h5>
                                    <p class="card-text">El doyang del profesor Fernando Lucas ha sido la primera
                                        escuela de Taekwondo fundada en el municipio de Teziutlán, el profesor ha sido
                                        reconocido por el municipio como un ciudadano histórico.</p>
                                </div>
                                <img src="{{ asset('home2/assets/img/escuelas/teziutlan1.jpeg')}}"
                                    class="card-img-bottom" alt="">
                                <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Ver más
                                    </button>
                                </p><br>
                                <div class="collapse" id="collapseExample" style="margin: 2px 25px;">
                                    <div class="card card-body">
                                        <div class=" row g-0">
                                            <div class="col-md-4">
                                                <h5 class="card-title" style="margin-top: 10px;">Doyang</h5>
                                                <img src="{{ asset('home2/assets/img/escuelas/teziutlan3.png')}}"
                                                    class="img-fluid rounded-start" alt="" width="100%" height="100%">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">Ubicación en Maps</h5>
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d938.4237625346757!2d-97.36271816677946!3d19.810522891416177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d19.810713399999997!2d-97.3623178!5e0!3m2!1ses-419!2smx!4v1637533254235!5m2!1ses-419!2smx"
                                                        width="100%" height="225px" style="border:0;" allowfullscreen=""
                                                        loading="lazy"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                            </div><br>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Doyang Grasfer Ahuateno</h5>
                                    <p class="card-text">La hermana del profesor Fernando Lucas también cuenta con una
                                        escuela que lleva el mismo nombre, solamente que diferente ubicación pero con la
                                        impartición de mismas artes marciales.</p>
                                </div>
                                <img src="{{ asset('home2/assets/img/escuelas/ahuateno1.jpeg')}}"
                                    class="card-img-bottom" alt="">
                                <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Ver más
                                    </button>
                                </p><br>
                                <div class="collapse" id="collapseExample" style="margin: 2px 25px;">
                                    <div class="card card-body">
                                        <div class=" row g-0">
                                            <div class="col-md-4">
                                                <h5 class="card-title" style="margin-top: 10px;">Doyang</h5>
                                                <img src="{{ asset('home2/assets/img/escuelas/ahuateno3.png')}}"
                                                    class="img-fluid rounded-start" alt="" width="100%" height="100%">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">Ubicación en Maps</h5>
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d938.3151683581383!2d-97.3586417490738!3d19.828920324523335!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1560828189331!5m2!1ses!2smx"
                                                        width="100%" height="225px" style="border:0;" allowfullscreen=""
                                                        loading="lazy"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                            </div><br>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Taekwondo Olímpico Xiutetelco</h5>
                                    <p class="card-text">El doyang del profesor Julio Roano tiene una misión clara y
                                        precisa: Formamos campeones para la vida, no solo para el deporte,
                                        contribuyendo a la formación de personas de excelencia para la sociedad.</p>
                                </div>
                                <img src="{{ asset('home2/assets/img/escuelas/xiutetelco3.jpeg')}}"
                                    class="card-img-bottom" alt="">
                                <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Ver más
                                    </button>
                                </p><br>
                                <div class="collapse" id="collapseExample" style="margin: 2px 25px;">
                                    <div class="card card-body">
                                        <div class=" row g-0">
                                            <div class="col-md-4">
                                                <h5 class="card-title" style="margin-top: 10px;">Doyang</h5>
                                                <img src="{{ asset('home2/assets/img/escuelas/xiutetelco2.jpeg')}}"
                                                    class="img-fluid rounded-start" alt="" width="100%" height="100%">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">Ubicación en Maps</h5>
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d5308.9616794912245!2d-97.3280238550821!3d19.797478438409176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d19.796697899999998!2d-97.3254025!5e0!3m2!1ses-419!2smx!4v1637534604752!5m2!1ses-419!2smx"
                                                        width="100%" height="225px" style="border:0;" allowfullscreen=""
                                                        loading="lazy"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                            </div><br>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Taekwondo Olímpico Zacapoaxtla</h5>
                                    <p class="card-text">El doyang del profesor Victor Flores tiene buena reputación por
                                        ser una institución de artes marciales seria, que basa su enseñanza en los mas
                                        altos valores morales y de convivencia social.</p>
                                </div>
                                <img src="{{ asset('home2/assets/img/escuelas/zacapoaxtla1.jpeg')}}"
                                    class="card-img-bottom" alt="">
                                <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Ver más
                                    </button>
                                </p><br>
                                <div class="collapse" id="collapseExample" style="margin: 2px 25px;">
                                    <div class="card card-body">
                                        <div class=" row g-0">
                                            <div class="col-md-4">
                                                <h5 class="card-title" style="margin-top: 10px;">Doyang</h5>
                                                <img src="{{ asset('home2/assets/img/escuelas/zacapoaxtla3.jpeg')}}"
                                                    class="img-fluid rounded-start" alt="" width="100%" height="100%">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">Ubicación en Maps</h5>
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d10612.846719956031!2d-97.59024515363957!3d19.873439529130355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d19.875247299999998!2d-97.5871421!5e0!3m2!1ses-419!2smx!4v1637534665005!5m2!1ses-419!2smx"
                                                        width="100%" height="225px" style="border:0;" allowfullscreen=""
                                                        loading="lazy"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                            </div><br>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Instituto Taekwondo Olímpico de México Atempan</h5>
                                    <p class="card-text">El doyang del profesor Fernando Rios es una Institución Marcial
                                        y Deportiva encaminada a mejorar la disciplina como forma de vida a través de su
                                        sistema de entrenamiento gradual.</p>
                                </div>
                                <img src="{{ asset('home2/assets/img/escuelas/atempan1.jpeg')}}" class="card-img-bottom"
                                    alt="">
                                <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Ver más
                                    </button>
                                </p><br>
                                <div class="collapse" id="collapseExample" style="margin: 2px 25px;">
                                    <div class="card card-body">
                                        <div class=" row g-0">
                                            <div class="col-md-4">
                                                <h5 class="card-title" style="margin-top: 10px;">Doyang</h5>
                                                <img src="{{ asset('home2/assets/img/escuelas/atempan2.jpeg')}}"
                                                    class="img-fluid rounded-start" alt="" width="100%" height="100%">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">Ubicación en Maps</h5>
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d15013.951848650564!2d-97.45293003043938!3d19.81929586470637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d19.818659999999998!2d-97.44655999999999!5e0!3m2!1ses-419!2smx!4v1637477721581!5m2!1ses-419!2smx"
                                                        width="100%" height="225px" style="border:0; margin-top: 5px"
                                                        allowfullscreen="" loading="lazy"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                            </div><br>
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