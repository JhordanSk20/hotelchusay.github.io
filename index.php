<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hiroto Template">
    <meta name="keywords" content="Hiroto, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel Chusay</title>
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
     <!-- Favicon -->
    <link rel="icon" type="image/jpg" href="img/logo/logo-favicon.svg" style="height: 10px; width: 10px;" />
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__btn__widget">
            <a href="#">Book Now <span class="arrow_right"></span></a>
        </div>
        <div class="offcanvas__widget">
            <ul>
                <li><span class="icon_pin_alt"></span> 96 Ernser Vista Suite 437, NY, US</li>
                <li><span class="icon_phone"></span> (123) 456-78-910</li>
            </ul>
        </div>
        <!--div class="offcanvas__language">
            <img src="img/lan.png" alt="">
            <span>English</span>
            <i class="fa fa-angle-down"></i>
            <ul>
                <li>English</li>
                <li>Bangla</li>
            </ul>
        </div-->
        <!--div class="offcanvas__auth">
            <ul>
                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
            </ul>
        </div-->
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <li><span class="icon_pin_alt"></span> 96 Ernser Vista Suite 437, NY, US</li>
                            <li><span class="icon_phone"></span> (123) 456-78-910</li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <div class="header__top__auth">
                                <ul>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Register</a></li>
                                </ul>
                            </div>
                            <div class="header__top__language">
                                <img src="img/lan.png" alt="">
                                <span>English</span>
                                <i class="fa fa-angle-down"></i>
                                <ul>
                                    <li>English</li>
                                    <li>Bangla</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__nav__option ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="header__logo">
                            <a href="./index.php"><img src="img/logo/logo-hotel-white.svg" alt="" style="height: 100px;"></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="header__nav">
                            <nav class="header__menu">
                                <ul class="menu__class">
                                    <li class="active"><a href="./index.php">Inicio</a></li>
                                    <li><a href="./rooms.php">Habitaciones</a></li>
                                    <li><a href="./about.html">Nosotros</a></li>
                                    <!--li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="./about.html">About Us</a></li>
                                            <li><a href="./room-details.html">Room Details</a></li>
                                            <li><a href="./blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li-->
                                    <li><a href="./blog.php">Blog</a></li>
                                    <li><a href="./contact.php">Contacto</a></li>
                                </ul>
                            </nav>
                            <div class="header__nav__widget">
                                <h2><a href="admin/reservation.php">Reservar Ahora<span class="arrow_right"></span></a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open">
                    <span class="fa fa-bars"></span>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="img/hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <h5>BIENVENIDO A HOTEL CHUSAY</h5>
                        <h2>Vive tus sueños en nuestro Hotel de ensueño</h2>
                    </div>
                    <!--form action="#" class="filter__form">
                        <div class="filter__form__item filter__form__item--search">
                            <p>Location</p>
                            <div class="filter__form__input">
                                <input type="text" placeholder="Search Location">
                                <span class="icon_search"></span>
                            </div>
                        </div>
                        <div class="filter__form__item">
                            <p>Check In</p>
                            <div class="filter__form__datepicker">
                                <span class="icon_calendar"></span>
                                <input type="text" class="datepicker_pop check__in">
                                <i class="arrow_carrot-down"></i>
                            </div>
                        </div>
                        <div class="filter__form__item">
                            <p>Check Out</p>
                            <div class="filter__form__datepicker">
                                <span class="icon_calendar"></span>
                                <input type="text" class="datepicker_pop check__out">
                                <i class="arrow_carrot-down"></i>
                            </div>
                        </div>
                        <div class="filter__form__item filter__form__item--select">
                            <p>Person</p>
                            <div class="filter__form__select">
                                <span class="icon_group"></span>
                                <select>
                                    <option value="">2 Adult, 1 Children</option>
                                    <option value="">2 Adult</option>
                                    <option value="">1 Adult</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit">BOOK NOW</button>
                    </form-->
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Home About Section Begin -->
    <section class="home-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="home__about__text">
                        <div class="section-title">
                            <h5>SOBRE NOSOTROS</h5>
                            <h2>Disfrute pleno y comodidad sin igual. Todo en un mismo lugar </h2>
                        </div>
                        <p class="first-para">Mereces que tus vacaciones sean memorables, mereces todo el disfrute, calidad y confort que sólo nuestro Hotel te puede ofrecer, simplemente lo mereces.</p>
                        <p class="last-para">Que te sientas en nuestro Hotel tan bien como en tu hogar, es el propósito que nos proponemos día a día alcanzar y por eso nos esforzamos sin parar.</p>
                        <img src="img/home-about/sign.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home__about__pic">
                        <img src="img/index/imagenes mezcladas.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home About Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/icons8-wifi-60 (2).png" alt="" >
                        <h4>Wi-Fi gratis</h4>
                        <p>Porque pensamos en nuestros clientes, brindamos conexión Wifi gratuita y de alta velocidad en todas las áreas del hotel.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/icons8-lavado-60.png" alt="">
                        <h4>Lavanderia</h4>
                        <p>Los huéspedes disfrutan de acceso a nuestro servicio de lavandería en 
                            el hotel, ubicado en el sótano del segundo nivel.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/icons8-gym-60.png" alt="">
                        <h4>Gimnasio</h4>
                        <p>Relájese y haga ejercicio en nuestro gimnasio
                            que cuenta con equipo de gimnasio completo y nuestrsa máquinas de ultima generación.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/icons8-valet-parking-60.png" alt="">
                        <h4>Zona de estacionamiento</h4>
                        <p>Estacionamiento externo vigilado las 24 horas completamente
                             gratuito para los clientes que se hospeden en nuestro hotel,.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/icons8-restaurant-60.png" alt="">
                        <h4>Restaurante</h4>
                        <p>Nuestro restaurante te deleitara con los mejores platos nacionales,
                             quedaras fascinado con la sazon de nuestos chefs altamentes calificados.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/icons8-swimming-60 (1).png" alt="">
                        <h4>Piscina</h4>
                        <p> Puede pasar el tiempo que desee 
                            en nuestra piscina temperada, que cuenta con personal
                             especialmente asignado para sus necesidades.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Home Room Section Begin -->
    <section class="home-room spad py-2 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>NUESTRAS HABITACIONES</h5>
                        <h2>Explora Nuestro Hotel</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" data-setbg="img/home-room/hr-1.jpg">
                        <div class="home__room__title">
                            <h4>HABITACIÓN SUPERIOR</h4>
                            <h2><sup>S/</sup>55<span>/día</span></h2>
                        </div>
                        <a href="admin/reservation.php">Reservar Ahora</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" data-setbg="img/home-room/hr-2.jpg">
                        <div class="home__room__title">
                            <h4>HABITACIÓN DE LUJO</h4>
                            <h2><sup>S/</sup >95<span>/day</span></h2>
                        </div>
                        <a href="admin/reservation.php">Reservar Ahora</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" data-setbg="img/home-room/hr-3.jpg">
                        <div class="home__room__title">
                            <h4>CASA DE HUESPEDES</h4>
                            <h2><sup>S/</sup>50<span>/day</span></h2>
                        </div>
                        <a href="admin/reservation.php">Reservar Ahora</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" data-setbg="img/home-room/hr-4.jpg">
                        <div class="home__room__title">
                            <h4>HABITACIÓN INDIVIDUAL</h4>
                            <h2><sup>S/</sup>40<span>/day</span></h2>
                        </div>
                        <a href="admin/reservation.php">Reservar Ahora</a>
                    </div>
                </div>
            </div>
        </div>
        <!--div class="container">
            <div class="home__explore">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <h3>Planning your next trip? Save up to 25% on your hotel</h3>
                    </div>
                    <div class="col-lg-3 col-md-4 text-center">
                        <a href="#" class="primary-btn">Explorer More</a>
                    </div>
                </div>
            </div>
        </div-->
    </section>
    <!-- Home Room Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="testimonial__pic">
                        <img src="img/index/testimonios_1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial__text">
                        <div class="section-title">
                            <h5>TESTIMONIOS</h5>
                            <h2>¿Qué dicen los clientes sobre nosotros?</h2>
                        </div>
                        <div class="testimonial__slider__content">
                            <div class="testimonial__slider owl-carousel">
                                <div class="testimonial__item">
                                    <h5>Lima, Perú</h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Una estancia muy agradable. Nos ha encantado la casa,
                                         la decoración con detalles de muy buen gusto. El 
                                         desayuno estupendo y el café genial. Gracias,
                                          esperamos volver y seguro que la recomendaremos.🤲💙</p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5>María Torres</h5>
                                                    <span>Cliente</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__item">
                                    <h5>Monterrey, México</h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Hotel con encanto,decorado con mucho gusto y en un entorno de ensueño.Limpieza impecable y desayunos muy completos y deliciosos.
                                        La amabilidad del personal inmejorable.
                                        Sin duda volveremos y recomendáremos este lugar tan maravilloso.
                                        Muchas gracias por el trato recibido 😊</p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5>Raul Dominguez</h5>
                                                    <span>Cliente</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__item">
                                    <h5>Cali, Colombia</h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Hemos estado en familia y la habitación comodisima. 
                                        La limpieza de 10 y el trato del personal otro 10. 
                                        El desayuno buenísimo y el entorno maravillos . Elegancia,
                                         comodidad y tranquilidad …. qué más se puede pedir.</p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5>Javier López</h5>
                                                    <span>Cliente</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__item">
                                    <h5>Lima, Perú</h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Nos ha gustado todo.
                                        El lugar
                                        La atención fenomenal
                                        Todo perfecto. Aunque la perfección sería completa ,
                                         mal me sepa,si se evitará en este tipo de hoteles 
                                         la presencia de menores ya que le quitan el encanto y 
                                         tranquilidad del lugar.
                                        Por lo demás perfecto.
                                        Muchas gracias y seguramente volveremos y por supuesto aconsejaremos el lugar.</p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5>Fiorella Mendez</h5>
                                                    <span>Cliente</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-num" id="snh-1"></div>
                            <div class="slider__progress"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Chooseus Section Begin -->
    <div class="chooseus spad set-bg" data-setbg="img/chooseus-bg.jpg">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="chooseus__text">
                        <div class="section-title">
                            <h5>POR QUÉ ELEGIRNOS</h5>
                            <h2>Contáctenos ahora para obtener las últimas ofertas y para la próxima reserva.</h2>
                        </div>
                        <a href="#" class="primary-btn">Reservar Ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chooseus Section End -->

    <!-- Gallery Section Begin -->
    <section class="gallery spad">
        <div class="gallery__text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="section-title">
                            <h5>NUESTRA GALERÍA</h5>
                            <h2>Explora nuestra galeria de hotel</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="gallery__title">
                            <p>Explora la galería y descubre nuestras fotos populares de las instalaciones de Hotel Chusay. 
                                Visita la calidad de atención que nos identifica y ven a conocernos.</p>
                            <a href="#" class="primary-btn">Ver Galeria<span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery__slider owl-carousel">
            <div class="gallery__item small__item set-bg" data-setbg="img/gallery/gallery-1.jpg"></div>
            <div class="gallery__item set-bg" data-setbg="img/gallery/gallery-2.jpg"></div>
            <div class="gallery__item set-bg" data-setbg="img/gallery/gallery-3.jpg"></div>
            <div class="gallery__item set-bg" data-setbg="img/gallery/gallery-4.jpg"></div>
        </div>
    </section>
    <!-- Gallery Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>BLOG</h5>
                        <h2>Artículos Populares</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 p-0 order-lg-1 col-md-6 order-md-1">
                    <div class="latest__blog__pic set-bg" data-setbg="img/blog/Ruby-on-Rails.png"></div>
                </div>
                <div class="col-lg-3 p-0 order-lg-2 col-md-6 order-md-2">
                    <div class="latest__blog__text">
                        <div class="label">Programación</div>
                        <h5>10 Motivos para empezar en Ruby On Rails</h5>
                        <p><i class="fa fa-clock-o"></i> 05 Mayo, 2022</p>
                        <a href="#">Leer Más</a>
                    </div>
                </div>
                <div class="col-lg-3 p-0 order-lg-3 col-md-6 order-md-4">
                    <div class="latest__blog__pic set-bg" data-setbg="img/blog/robots.jpg"></div>
                </div>
                <div class="col-lg-3 p-0 order-lg-4 col-md-6 order-md-3">
                    <div class="latest__blog__text">
                        <div class="label">Robótica</div>
                        <h5>Robots, una tecnología competitiva</h5>
                        <p><i class="fa fa-clock-o"></i> 04 Abril, 2022</p>
                        <a href="#">Leer Más</a>
                    </div>
                </div>
                <div class="col-lg-3 p-0 order-lg-6 col-md-6 order-md-5">
                    <div class="latest__blog__pic latest__blog__pic__last__row set-bg"
                        data-setbg="img/blog/hackeoweb.jpg"></div>
                </div>
                <div class="col-lg-3 p-0 order-lg-5 col-md-6 order-md-6">
                    <div class="latest__blog__text">
                        <div class="label">Tecnología</div>
                        <h5>Cómo evitar hackeos en tu sitio web</h5>
                        <p><i class="fa fa-clock-o"></i>  31 Marzo, 2022</p>
                        <a href="#">Leer Más</a>
                    </div>
                </div>
                <div class="col-lg-3 p-0 order-lg-8 col-md-6 order-md-8">
                    <div class="latest__blog__pic latest__blog__pic__last__row set-bg"
                        data-setbg="img/blog/google.jpg"></div>
                </div>
                <div class="col-lg-3 p-0 order-lg-7 col-md-6 order-md-7">
                    <div class="latest__blog__text">
                        <div class="label">Tecnología</div>
                        <h5>5 Trucos para tus búsquedas en Google</h5>
                        <p><i class="fa fa-clock-o"></i> 14 Marzo, 2022</p>
                        <a href="#">Leer Más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo__carousel owl-carousel">
                        <div class="logo__carousel__item" style="background-color: black;">
                            <a href="#"><img src="img/logo/logo-machupichu.jpg" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="img/logo/logo-mistura.jpg" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="img/logo/logo-coca.jpg" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="img/logo/logo-graña.jpg" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="img/logo/logo-ecoturismo.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer__content">
                <div class="row">
                    <div class="col-lg-3 col-md-1 col-sm-6 ">
                        <div class="footer__about" >
                            <div class="footer__logo">
                                <a href="#"><img src="img/HOTEL.svg" alt="" style="height: 100px;"></a>
                                <h4>(51) 985-451-895</h4>
                            <ul>
                                <li>Av.San Luis 2906, San Borja 41, Lima</li>
                                <li>hotel_chusay@gmail.com</li>
                            </ul>
                            </div>
                            
                        
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1 col-md-5 offset-md-1 col-sm-6">
                        <div class="footer__widget">
                            <h4>Enlaces rápidos</h4>
                            <ul>
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Reservar</a></li>
                                <li><a href="#">Nosotros</a></li>
                                <li><a href="#">Actividades</a></li>
                                <li><a href="#">Contacto</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Servicios</a></li>
                                <li><a href="#">Habitaciones</a></li>
                                <li><a href="#">Restaurante</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Eventos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <div class="footer__newslatter">
                            <h4>Suscríbete a nuestro boletín de noticias</h4>
                            <form action="#">
                                <input type="text" placeholder="Email">
                                <button type="submit">Subscribirse</button>
                            </form>
                            <ul class="socialIcons" style="text-align: start;">
                                <li class="facebook"><a href=""><i class="fa fa-fw fa-facebook"></i>Facebook</a></li>
                                <li class="twitter"><a href=""><i class="fa fa-fw fa-twitter"></i>Twitter</a></li>
                                <li class="instagram"><a href=""><i class="fa fa-fw fa-instagram"></i>Instagram</a></li>
                                <li class="pinterest"><a href=""><i class="fa fa-fw fa-pinterest-p"></i>Pinterest</a></li>
                                <li class="linkedin"><a href=""><i class="fa fa-fw fa-linkedin"></i>Linkedin</a></li>
                                <li class="youtube"><a href=""><i class="fa fa-fw fa-youtube-play"></i>Youtube</a></li>
                              </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="footer__copyright__text">
                            <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Hotel Chusay 2022 - Todos los derechos reservados
                        </div>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <ul class="footer__copyright__links">
                            <li><a href="#">Términos de Uso</a></li>
                            <li><a href="#"> Política de privacidad</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>