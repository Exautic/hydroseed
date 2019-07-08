<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
    <!--<![endif]-->

    <head>

        <!--- basic page needs
        ================================================== -->
        <meta charset="utf-8">
        <title>HydroSeed</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- mobile specific metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/base.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">

        <!-- script
        ================================================== -->
        <script src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/pace.min.js"></script>

        <!-- favicons
        ================================================== -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

    </head>

    <body id="top">

        <!-- header
        ================================================== -->
        <header class="s-header">

            <div class="header-logo">
                <a class="site-logo" href="<?php echo base_url(); ?>home">
                    <img src="<?php echo base_url(); ?>assets/images/logo-page.png" alt="Homepage">
                </a>
            </div>

            <nav class="header-nav">

                <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

                <div class="header-nav__content">
                    <h3>Navegacion</h3>

                    <ul class="header-nav__list">
                        <li class="current"><a class=""  href="<?php echo base_url(); ?>home" title="home">Home</a></li>
                        <li><a class=""  href="<?php echo base_url(); ?>registro" title="registro">Registrarse</a></li>
                        <li><a class=""  href="<?php echo base_url(); ?>sesion" title="services">Iniciar sesion</a></li>
                        <li><a class=""  href="#contact" title="contact">Contacto</a></li>
                        <li><a class=""  href="<?php echo base_url(); ?>sesionAdmin" title="clients">Administracion</a></li>
                    </ul>

                    <p>HydroSeed, proyecto en desarrollo</p>

                </div> <!-- end header-nav__content -->

            </nav>  <!-- end header-nav -->

            <a class="header-menu-toggle" href="#0">
                <span class="header-menu-text">Menu</span>
                <span class="header-menu-icon"></span>
            </a>

        </header> <!-- end s-header -->


        <!-- home
        ================================================== -->
        <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>assets/images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

            <div class="overlay"></div>
            <div class="shadow-overlay"></div>

            <div class="home-content">

                <div class="row home-content__main">

                    <h3>Bienvenido a HydroSeed</h3>

                    <h1>
                        Proyecto en desarrollo <br>
                    </h1>

                    <div class="home-content__buttons">
                        <a href="<?php echo base_url(); ?>registro" class=" btn btn--stroke">
                            Unete
                        </a>
                        <a href="#contact" class=" btn btn--stroke">
                            Contactanos
                        </a>
                    </div>

                </div>

            </div> <!-- end home-content -->


            <ul class="home-social">
                <li>
                    <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
                </li>
                <li>
                    <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
                </li>
                <li>
                    <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
                </li>
            </ul> 
            <!-- end home-social -->

        </section> <!-- end s-home -->


        <!-- services ================================================== -->
        <section id='services' class="s-services">

            <div class="row section-header has-bottom-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">What We Do</h3>
                    <h1 class="display-2">We’ve got everything you need to launch and grow your business</h1>
                </div>
            </div> <!-- end section-header -->

            <div class="row services-list block-1-2 block-tab-full">

                <div class="col-block service-item" data-aos="fade-up">
                    <div class="service-icon">
                        <i class="icon-paint-brush"></i>
                    </div>
                    <div class="service-text">
                        <h3 class="h2">Brand Identity</h3>
                        <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                            Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                            Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                        </p>
                    </div>
                </div>

                <div class="col-block service-item" data-aos="fade-up">
                    <div class="service-icon">
                        <i class="icon-group"></i>
                    </div>
                    <div class="service-text">
                        <h3 class="h2">Illustration</h3>
                        <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                            Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                            Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                        </p>
                    </div>
                </div>

                <div class="col-block service-item" data-aos="fade-up">
                    <div class="service-icon">
                        <i class="icon-megaphone"></i>
                    </div>  
                    <div class="service-text">
                        <h3 class="h2">Marketing</h3>
                        <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                            Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                            Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                        </p>
                    </div>
                </div>

                <div class="col-block service-item" data-aos="fade-up">
                    <div class="service-icon">
                        <i class="icon-earth"></i>
                    </div>
                    <div class="service-text">
                        <h3 class="h2">Web Design</h3>
                        <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                            Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                            Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                        </p>
                    </div>
                </div>

                <div class="col-block service-item" data-aos="fade-up">
                    <div class="service-icon">
                        <i class="icon-cube"></i>
                    </div>
                    <div class="service-text">
                        <h3 class="h2">Packaging Design</h3>
                        <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                            Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                            Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                        </p>
                    </div>
                </div>

                <div class="col-block service-item" data-aos="fade-up">
                    <div class="service-icon"><i class="icon-lego-block"></i></div>
                    <div class="service-text">
                        <h3 class="h2">Web Development</h3>
                        <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                            Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                            Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                        </p>
                    </div>
                </div>

            </div> <!-- end services-list -->

        </section> <!-- end s-services -->

        <!-- contact
        ================================================== -->
        <section id="contact" class="s-contact">

            <div class="overlay"></div>
            <div class="contact__line"></div>

            <div class="row section-header" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">Contacta con nosotros</h3>
                    <h1 class="display-2 display-2--light">Si tienes dudas, tan solo pregunta.</h1>
                </div>
            </div>

            <div class="row contact-content" data-aos="fade-up">

                <div class="contact-primary">

                    <h3 class="h6">Envianos un comentario</h3>

                    <form method="post" action="<?php echo base_url(); ?>assets/enviar2.php" novalidate="novalidate">
                        <fieldset>

                            <div class="form-field">
                                <input name="nombre" type="text" id="nombre" placeholder="Tu Nombre" value="" minlength="2" required="" aria-required="true" class="full-width">
                            </div>
                            <div class="form-field">
                                <input name="email" type="email" id="email" placeholder="Tu E-mail" value="" required="" aria-required="true" class="full-width">
                            </div>
                            <div class="form-field">
                                <input name="asunto" type="text" id="asunto" placeholder="Asunto" value="" class="full-width">
                            </div>
                            <div class="form-field">
                                <textarea name="mensaje" id="mensaje" placeholder="Tu Mensaje o Comentario" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                            </div>
                            <div class="form-field">
                                <button class="full-width btn--primary">Enviar</button>
                            </div>
                        </fieldset>
                    </form>

                </div> <!-- end contact-primary -->

               

            </div> <!-- end contact-content -->

        </section> <!-- end s-contact -->



        <!-- footer
        ================================================== -->
        <footer>

            <div class="row footer-main">

                <div class="col-six tab-full left footer-desc">

                    <div class="center-align">
                        Proyecto en desarrollo
                    </div>
                </div>

            </div> <!-- end footer-main -->

            <div class="row footer-bottom">

                <div class="col-twelve">
                    <div class="copyright">
                        <span>© Copyright HydroSeed 2019</span> 
                    </div>

                    <div class="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                    </div>
                </div>

            </div> <!-- end footer-bottom -->

        </footer> <!-- end footer -->

        <!-- preloader
        ================================================== -->
<!--        <div id="preloader">
            <div id="loader">
                <div class="line-scale-pulse-out">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>-->

        <!-- Java Script
        ================================================== -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
        <script>
     
        </script>
    </body>

</html>