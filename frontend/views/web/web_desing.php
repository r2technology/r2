<?php

use Yii;
use frontend\assets\WebAsset;

?>
<div id="preloader">
  <div id="load"></div>
</div>

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/web/">
                <h1>r2 technology</h1>
            </a>
        </div>
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#intro">Inicio</a></li>
              <li><a href="#about">Quienes Somos</a></li>
              <li><a href="#service">Nuestros Servicios</a></li>
              <li><a href="#client">Clientes</a></li>
              <li><a href="#contact">Contactanos</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Section: intro -->
<section id="intro" class="intro">
    <div class="slogan">
        <h2>r2 technology</span> </h2>
        <h4>Trabajo que Innova, Innovación que Expande</h4>
    </div>
    <div class="page-scroll">
        <a href="#service" class="btn btn-circle">
            <i class="fa fa-angle-double-down animated"></i>
        </a>
    </div>
</section>
<!-- /Section: intro -->

<!-- Section: about -->
<section id="about" class="home-section text-center">
    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                        <div class="section-heading">
                            <h2>Quienes Somos</h2>
                            <i class="fa fa-2x fa-angle-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div class="team boxed-grey">
                        <div class="inner">
                            <h5>Ramon Ramirez</h5>
                            <p class="subtitle">CEO</p>
                            <div class="avatar"><img src="<?php Yii::$app->basePath; ?>/img/team/1.jpg" alt="" class="img-responsive img-circle" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>		
    </div>
</section>
<!-- /Section: about -->

<!-- Section: services -->
<section id="service" class="home-section text-center bg-gray">

    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                        <div class="section-heading">
                            <h2>Nuestros Servicios</h2>
                            <i class="fa fa-2x fa-angle-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-md-3">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="<?php Yii::$app->basePath; ?>/img/icons/service-icon-1.png" alt="" />
                        </div>
                        <div class="service-desc">
                            <h5>Desarrollo de Software</h5>
                            <p>Creación, desarrollo, mantenimiento, soporte y seguimiento de herramientas de software multiplataforma.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="<?php Yii::$app->basePath; ?>/img/icons/service-icon-2.png" alt="" />
                        </div>
                        <div class="service-desc">
                            <h5>Manejo de Datos</h5>
                            <p>Analizamos y estructuramos un modelo de datos con caracteristicas adaptables y de facil acceso para todos los procesos que necesite.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="<?php Yii::$app->basePath; ?>/img/icons/service-icon-3.png" alt="" />
                        </div>
                        <div class="service-desc">
                            <h5>Mantenimientos</h5>
                            <p>Contamos con el mejor soporte para todo tipo de mantenimiento tecnológico que sea necesario.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="wow fadeInRight" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="<?php Yii::$app->basePath; ?>/img/icons/service-icon-4.png" alt="" />
                        </div>
                        <div class="service-desc">
                            <h5>Asesoramiento Tecnológico</h5>
                            <p>Brindamos todo tipo de asesoramiento para establecer la infraestructura tecnologica que más se adapte a tus necesidades.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>		
    </div>
</section>
<!-- /Section: services -->

<!-- Section: client -->
<section id="client" class="home-section text-center">
    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                        <div class="section-heading">
                            <h2>Clientes</h2>
                            <i class="fa fa-2x fa-angle-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div class="team boxed-grey">
                        <div class="inner">
                            <h5>Ramon Ramirez</h5>
                            <p class="subtitle">CEO</p>
                            <div class="avatar"><img src="<?php Yii::$app->basePath; ?>/img/team/1.jpg" alt="" class="img-responsive img-circle" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>		
    </div>
</section>
<!-- /Section: client -->

<!-- Section: contact -->
<section id="contact" class="home-section text-center bg-gray">
    <div class="heading-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                        <div class="section-heading">
                            <h2>Contactanos</h2>
                            <i class="fa fa-2x fa-angle-down"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="boxed-grey">
                    <form id="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo Electrónico</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Mensaje</label>
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="widget-contact">
                    <h5>Dirección de Oficina</h5>
                    <address>
                        <strong>r2 technology.</strong><br>
                        Ubr. Los Pinos, calle 1, casa #8<br>
                        Independencia, Edo. Yaracuy.<br>
                        <strong>Codigo Postal:</strong> 3201.<br>
                        <strong>Teléfono:</strong> (0412) 1727-103
                    </address>
                    <address>
                        <strong>Correo Electrónico</strong><br>
                        <a href="mailto:#">support@r2.com</a>
                    </address>	
                    <address>
                        <strong>Visita nuestras redes sociales</strong><br>
                       	<ul class="company-social">
                            <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>	
                    </address>					

                </div>	
            </div>
        </div>	

    </div>
</section>
<!-- /Section: contact -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="wow shake" data-wow-delay="0.4s">
                <div class="page-scroll marginbot-30">
                    <a href="#intro" id="totop" class="btn btn-circle">
                        <i class="fa fa-angle-double-up animated"></i>
                    </a>
                </div>
                </div>
                <p>&copy; r2technology <?= date('Y') ?></p>
            </div>
        </div>	
    </div>
</footer> 
