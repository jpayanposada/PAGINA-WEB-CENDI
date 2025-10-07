<!DOCTYPE html>
<html lang="es">

<?php include 'head.php'; ?>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


<body>

    <!-- Pagina de logeo -->

    <!-- Seccion de encabezado inicia-->
    <?php include 'header.php'; ?>
    <!-- Seccion de encabezado finaliza-->
    <br><br>


    <!-- Menu encabezado inicia -->
    <?php include 'navbar.php'; ?>
    <?php include 'halloween.php'; ?>

    <!-- Menu encabezado finaliza-->



    <!-- Inicio del carrusel de imagenes-->
    <section class="hero-section">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/Halloween.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/carrusel/1001.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item ">
                    <img src="img/carrusel/2002.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item ">
                    <img src="img/carrusel/3003.png" class="d-block w-100" alt="...">
                </div>
                


            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- finaliza el carrusel de imagenes -->



    <!-- Counter section  -->
    <section class="counter-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="big-icon">
                        <i class="fa fa-graduation-cap" style="color: #F08006;"></i>
                    </div>
                    <div class="counter-content">
                        <h2>MATRICÚLATE AHORA Y ENTRA AL MUNDO LABORAL</h2>
                        <p><i class="fa fa-star" style="color: #F08006;"></i>Cendi te prepara para la cuarta revolución
                            industrial</p>

                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v5.0"></script>
                    <div class="fb-page" data-href="https://www.facebook.com/InstitutoCENDI/" data-width="380" data-hide-cover="false" data-show-facepile="false"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter section end -->


    <!-- Seccion de servicio -->
    <?php include 'services.php'; ?>
    <!-- Services section end -->


    <!-- seccion de plataformas incia  -->
    <?php include 'plataformas.php'; ?>
    <!-- seccion de plataformas termina  -->
    <br>

    <!-- seccion de material de apoyo inicia -->

    <!-- OMITIDO -->
    <!-- seccion de material de apoyo termina -->

    <!-- Seccion de contadores inicias -->
    <section class="fact-section spad set-bg" data-setbg="img/sliders/p1.png">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 fact">

                    <div class="fact-text" style="text-align: center;">
                        <img src="img/icons/Bachillerato.png" width="70%">
                        <h1 style="color: white;" data-aos="fade-up" data-aos-duration="1000" data-aos-once="false">Bachillerato Privado</h1>
                        <p style="text-align: center;">y</p>
                        <h3 style="text-align: center;color: white;" data-aos="fade-up" data-aos-duration="1500" data-aos-once="false">Matrícula totalmente gratis</h3>>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Seccion de contadores finalizan-->
    <br>

    <!-- Seccion de contadores inicias -->
    <section class="fact-section spad set-bg" data-aos="fade-up" data-aos-duration="1000" data-aos-once="false" data-setbg="img/fact-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-lg-2 fact" data-aos="fade-left" data-aos-delay="0" data-aos-duration="600">
                <div class="fact-icon">
                    <i class="ti-crown"></i>
                </div>
                <div class="fact-text">
                    <h2>36</h2>
                    <p>AÑOS</p>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 fact" data-aos="fade-left" data-aos-delay="200" data-aos-duration="600">
                <div class="fact-icon">
                    <i class="ti-briefcase"></i>
                </div>
                <div class="fact-text">
                    <h2>25+</h2>
                    <p>DOCENTES</p>
                </div>
            </div>
            <div class="col-sm-4 col-lg-3 fact" data-aos="fade-left" data-aos-delay="400" data-aos-duration="600">
                <div class="fact-icon">
                    <i class="ti-user"></i>
                </div>
                <div class="fact-text">
                    <h2>12.000</h2>
                    <p>ESTUDIANTES</p>
                </div>
            </div>
            <div class="col-sm-4 col-lg-3 fact" data-aos="fade-left" data-aos-delay="600" data-aos-duration="600">
                <div class="fact-icon">
                    <i class="ti-user"></i>
                </div>
                <div class="fact-text">
                    <h2>4.500</h2>
                    <p>TÉCNICOS</p>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 fact" data-aos="fade-left" data-aos-delay="800" data-aos-duration="600">
                <div class="fact-icon">
                    <i class="ti-pencil-alt"></i>
                </div>
                <div class="fact-text">
                    <h2>12+</h2>
                    <p>PROGRAMAS</p>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Seccion de contadores finalizan-->


    <!-- seccion de pre inscripciones inicia -->
    <section class="event-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3 data-aos="fade-up" data-aos-duration="1000" data-aos-once="false">PRE-INSCRIPCIONES</h3>
                <p>CENDI te da una calurosa bienvenida, gracias por contar con nosotros</p>
            </div>
            <div class="row">
                <div class="col-md-6 event-item">
                    <div class="event-thumb">
                        <img src="img/sliders/p1.png" alt="tecnicos" height="450px">
                        <div class="event-date">
                            <span>PRE-INSCRIPCIONES TÉCNICOS</span>
                        </div>
                    </div>
                    <div class="event-info">
                        <h4>Preparate que grandes retos vendrán ahora que elegiste tu ocupación</h4>

                        <a href="" class="event-readmore" data-toggle="modal" data-target="#preTec" title="Dar click">PREINSCRIBIR AHORA<i class="fa fa-angle-double-right" style="color: #F08006;"></i></a>
                    </div>
                </div>
                <div class="col-md-6 event-item">
                    <div class="event-thumb">
                        <img src="img/sliders/p2.png" alt="bachilleres" height="450px">
                        <div class="event-date">
                            <span>PRE-INSCRIPCIONES BACHILLERATO</span>
                        </div>
                    </div>
                    <div class="event-info">
                        <h4>Disfruta de una educación integral, esta te llevará
                            al éxito con la profesión que elijas
                        </h4>

                        <a href="" class="event-readmore" data-toggle="modal" data-target="#preBach" title="Dar click">PREINSCRIBIR AHORA<i class="fa fa-angle-double-right" style="color: #F08006;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- seccion de preinscrepciones termina-->
    <!-- Seccion de mapa inicias -->
    <section class="fact-section spad set-bg" data-setbg="img/sliders/mapa.png">
        <div class="container" style="text-align: center;">
            <h2 style="text-align: center;color: white;">NUESTROS CENTROS EDUCATIVOS EN TIEMPO REAL</h2>
            <br><br>
            <div class="row">

                <iframe src="https://www.google.com/maps/d/embed?mid=1w1eUxDI3FXVEiw1C8KL22zzbn4Y0GQ8V&ehbc=2E312F" width="100%" height="480"></iframe>

            </div>
        </div>
    </section>
    <!-- Seccion de mapa finalizan-->

    <!-- Seccion de convenios inicia-->
    <?php
    include 'convenios.php';
    ?>
    <!-- Seccion de aplicaciones inicia-->
    <?php
    include 'aplicaciones.php';
    ?>
    <!-- Seccion de convenios finaliza-->

    <!-- Footer section -->
    <?php include 'footer.php'; ?>
    <!-- Footer section end-->



    <!-- inicia front end del login -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Inicio de sesión administrativo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form style="text-align: center;">
                        <div class="form-group" style="text-align: left;">
                            <label for="exampleInputEmail1">Correo electrónico</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresar correo">
                            <small id="emailHelp" class="form-text text-muted">Ingresa el correo electrónico asignado
                                por la administración del sistema.</small>
                        </div>
                        <div class="form-group" style="text-align: left;">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                        </div>

                        <button class="btn btn-success">Ingresar</button>
                        <button class="btn btn-danger">Cancelar</button>
                        <br>
                        <br>
                        <li class="fa fa-lock"></li><a href="#" title="Ingresa el correo electrónicos y luego haz click aquí"> Olvide mi contraseña</a>
                    </form>
                </div>
                <div class="modal-footer">
                    <p class="pieLogin">Si presenta problemas para iniciar o restablecer
                        contraseña, comunicate con Eagle Softwares.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- termina front end del login -->
    <!-- inicia preinscripcion tecnicos -->

    <div class="modal fade bd-example-modal-lg" id="preTec" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro de inscripción para técnicos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <iframe src="http://www.q10academico.com/Preinscripcion?aplentId=d0e037d5-22c3-4082-b55e-d30628819936" class="preInscripcioes" frameborder="0" marginwidth="0" marginheight="0" data-width="100%" data-height="auto" unselectable="on"></iframe>

                    </div>
                </div>
                <div class="modal-footer">
                    <p class="pieInscipciones">
                        <a href="http://www.q10academico.com/Preinscripcion?aplentId=d0e037d5-22c3-4082-b55e-d30628819936">
                            <li class="fa fa-search-plus" style="color: white;">
                            </li>
                            Ampliar pantalla de inscripción
                        </a>
                    </p>

                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- termina preinscripcion tecnicos -->

    <!-- inicia preinscripcion bachiller -->
    <div class="modal fade bd-example-modal-lg" id="preBach" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro de inscripción para bachillerato</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <iframe src="https://www.q10academico.com/Preinscripcion?aplentId=c866b1f7-b5a4-4146-a6d5-eda3de6bdea9" class="preInscripcioes" frameborder="0" marginwidth="0" marginheight="0" data-width="100%" data-height="1080" unselectable="on"></iframe>
                    </div>
                </div>
                <div class="modal-footer">

                    <div class="pieInscipciones"><a href="https://www.q10academico.com/Preinscripcion?aplentId=c866b1f7-b5a4-4146-a6d5-eda3de6bdea9">
                            <li class="fa fa-search-plus" style="color: white;"></li> Ampliar pantalla de inscripción
                        </a>
                    </div>

                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- termina preinscripcion bachiller -->

    <!-- inicia ventana emergente -->

    

    <div class="text-center">
        <div class="modal fade bd-example-modal-lg" id="info" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" style="text-align: center; max-width: 350px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¡MATRICÚLATE AHORA!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Cerrar"></button>
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        
                    <div class="modal-body lg">
                            <div class="row">
                                <div class="col col-md-12 col-sm-12 col-lg-12 p-2">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" style="text-align: center;">
                                                <video autoplay loop muted playsinline controls style="width: 100%; max-width: 350px; margin: 0 auto; display: block;">
                                                    <source src="img/videos/video_cendi.mp4" type="video/mp4">
                                                    Tu navegador no soporta el elemento de video.
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

                                    <!-- <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="img/TRABAJOS_CENDI/1.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/TRABAJOS_CENDI/2.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/TRABAJOS_CENDI/3.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/TRABAJOS_CENDI/4.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/TRABAJOS_CENDI/5.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/TRABAJOS_CENDI/6.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/TRABAJOS_CENDI/7.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/TRABAJOS_CENDI/8.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/TRABAJOS_CENDI/9.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/TRABAJOS_CENDI/10.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/TRABAJOS_CENDI/11.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/TRABAJOS_CENDI/12.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/TRABAJOS_CENDI/13.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/TRABAJOS_CENDI/14.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/TRABAJOS_CENDI/15.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/TRABAJOS_CENDI/16.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/TRABAJOS_CENDI/17.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/TRABAJOS_CENDI/18.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/TRABAJOS_CENDI/19.png" class="d-block w-100" alt="...">
                                            </div>
                                           
                                           
                                        </div> -->

                                        <!-- <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </button> -->
                                        <!-- <div class="modal-body">
                                            <p>Contenido del modal</p>
                                        </div> -->
                               

                            <!-- <div class="modal-footer">
                                <h5 style="color: white;text-align: center;">Envia tu hoja de vida a: reclutamiento.UT@poliandino.edu.co</h5>
                            </div> -->                        
              

    <div class="text-center">
        <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="text-align: center;">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <i class="fa fa-exclamation"></i>
                            ACCEDE A NUESTRAS PLATAFORMAS
                            <i class="fa fa-exclamation"></i>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Cerrar"></button>
                        <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body lg">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <a href="https://www.campusdigital.cendiacademico.edu.co/login/index.php" target="_blank"><img src="img/icons/campus.gif" alt="Acceder" width="250px" title="Ingresar a Rutas Formativas en Tecnologías para la creatividad y el soporte tecnológico – Industrias Creativas 4ri"></a>
                            <a href="https://site2.q10.com/login?ReturnUrl=%2F&aplentId=c866b1f7-b5a4-4146-a6d5-eda3de6bdea9" target="_blank"><img src="img/icons/qbachiller.gif" alt="Botón Q10 para bachillerato" width="250px" title="Ingresar al Q10 para estudiantes de bachillerato"></a>
                            <a href="https://site3.q10.com/login?ReturnUrl=%2F&aplentId=d0e037d5-22c3-4082-b55e-d30628819936" target="_blank"><img src="img/icons/qtecnicos.gif" alt="Botón Q10 para bachillerato" width="250px" title="Ingresar al Q10 para estudiantes de programas técnicos"></a>
                            <a href="https://campus.cendiacademico.edu.co/" target="_blank"><img src="img/icons/campus.gif" alt="Ingreso Kurve" width="250px" title="Ingresar al Moodle programa talento especializado"></a>

                            <div class="modal-footer">
                                <h5 style="color: white;text-align: center;">INFORMACIÓN IMPORTANTE</h5>
                            </div>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="pqrsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sistema de PQRS de Cendi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form">
                        <div class="form-group">
                            <label for="codigo">Radicado de la PQRS</label>
                            <input type="text" class="form-control" name="codigo" id="codigo" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tipo">Tipo de solicitud</label>
                            <select class="custom-select" id="inputGroupSelect01" name="tipo">
                                <option selected>Seleccionar...</option>
                                <option value="Pregunta">Pregunta</option>
                                <option value="Queja">Queja</option>
                                <option value="Reclamo">Reclamo</option>
                                <option value="Solicitud">Solicitud</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Nombre Completo</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="tipoId">Tipo de identificación</label>
                            <select class="custom-select" name="tipoId" id="inputGroupSelect01" name="tipo">
                                <option selected>Seleccionar...</option>
                                <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
                                <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="numId">Número de identificación</label>
                            <input type="number" class="form-control" name="numId" id="numId">
                        </div>
                        <div class="form-group">
                            <label for="clasification">Clasificación del solicitante:</label>
                            <select class="custom-select" id="inputGroupSelect01" name="clasification">
                                <option selected>Seleccionar...</option>
                                <option value="Estudiante activo">Estudiante activo</option>
                                <option value="Estudiante retirado">Estudiante retirado</option>
                                <option value="Egresado">Egresado</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="medio">Medio donde quiero que me respondan: </label>
                            <select class="custom-select" id="inputGroupSelect01" name="medio">
                                <option selected>Seleccionar...</option>
                                <option value="Estudiante activo">Correo electrónico</option>
                                <option value="Estudiante retirado">Teléfono</option>
                                <option value="Egresado">WhatsApp</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tecnology">Dirección de correo electrónico de respuesta: </label>
                            <input type="email" class="form-control" name="tecnology" id="tecnology">
                        </div>
                        <div class="form-group">
                            <label for="phone">Número de teléfono:</label>
                            <input type="text" class="form-control" name="phone" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción de la solicitud: </label>
                            <input type="text" class="form-control" name="description" id="description">
                        </div>

                        <input type="submit" id="pqrs" class="btn btn-success" value="Enviar PQRS">
                    </form>
                    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

                    <script type="text/javascript">
                        emailjs.init('Z907Sa54JE3JSg7Ek')
                    </script>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- termina ventana emergente  -->
    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {
            $("#").modal();
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#info").modal();
        });
    </script>

    <!--SCRIPT PARA ENVIAR PQRS-->


    <script>
        const btn = document.getElementById('pqrs');

        document.getElementById('form')
            .addEventListener('submit', function(event) {
                event.preventDefault();

                btn.value = 'Enviando...';

                const serviceID = 'default_service';
                const templateID = 'template_jtarnyl';

                emailjs.sendForm(serviceID, templateID, this)
                    .then(() => {
                        btn.value = 'Enviar PQRS';
                        alert('PQRS REGISTRADA CORRECTAMENTE GRACIAS!');
                    }, (err) => {
                        btn.value = 'Enviar PQRS';
                        alert(JSON.stringify(err));
                    });
            });
    </script>
    <!--GENERADOR DE CODIGO PARA EL RADICADO-->
    <script>
        function rand_code(chars, lon) {
            code = "";
            for (x = 0; x < lon; x++) {
                rand = Math.floor(Math.random() * chars.length);
                code += chars.substr(rand, 1);
            }
            return code;
        }
        caracteres = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.";
        longitud = 8;
        document.getElementById('codigo').value = rand_code(caracteres, longitud);
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    once: false
  });
</script>


</html>