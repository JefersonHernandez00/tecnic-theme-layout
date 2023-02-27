<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tecnic
 */

get_header();
?>

<body>
    <header class="pt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4 flex l-flex">
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logotipo.webp" alt="">
                    </div>
                </div>
                <div class="col-md-8">

                    <div class="row">
                        <div class="col-md-10 text-end">
                            <div class="col-md-12 search">
                                <input type="text" placeholder="BUSCAR">

                                <a class="t-button">ACCESO CLIENTES</a>
                            </div>
                            

                            <div class="col-md-12 text-end pt-3">
                                <nav class="navbar navbar-expand-lg menu">
                                    <div class="container-fluid p-0">
                                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mb-2 mb-lg-0">
                                          <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="#">Tecnic</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">• servicios</a>
                                        </li> <li class="nav-item">
                                            <a class="nav-link" href="#">• noticias</a>
                                        </li> <li class="nav-item">
                                            <a class="nav-link" href="#">• contacto</a>
                                        </li>
                                        

                                    </ul>

                                </div>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="col-md-2 top-menu">
                    <li class="first">CAST</li>
                    <li>• ENG</li>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
<!-- slider section -->
<section class="slider">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="text-center text-white">
                    SOLUCIONES GLOBALES
                </h1>
                <p class="text-center text-white">Desarrollamos la tecnología para tus proyectos</p>
                <p class="text-center text-white">con nuestro personal especializado y los medios de producción más avanzados</p>
                <div class="contact pt-5">
                    <div class="btn text-center text-white ">CONTACTAR</div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
<section>
    <div class="container sec-2
    ">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
            <p>
                <span style="font-weight:bold;color: rgba(70,107,138,1);">TECTNIC</span>
                es una empresa de fabricación de equipos electrónicos para terceros que ofrece soluciones innovavdoras. Nuestra filosofía siempre ha sido ofrecer un servicio en el que primen la <b> calidad </b> y la <b> innovación.</b> Ofrecemos una grtan variedad de tecnologías relacionadas con los procesos de producción, así como todos los procedimientos y herramientas relacionadas con el suministro de equipos bajo los <b>estándares de calidad.</b>
            </p>
        </div>
    </div>
</div>
</section>
<section class="icon-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="icon py-4 geeks">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon1.webp" alt="">
                </div>
                <h4 class="text-center p-color ">INNOVACIÓN</h4>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla id eros.</p>
            </div>
            <div class="col-md-4">
                <div class="icon py-4 geeks" >
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon2.webp" alt="">
                </div>
                <h4 class="text-center p-color">SOLUCIONES GLOBALES</h4>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla id eros.</p>
            </div>
            <div class="col-md-4">
                <div class="icon py-4 geeks">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon3.webp" alt="">
                </div>
                <h4 class="text-center p-color">TECNOLOGÍA</h4>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla id eros.</p>
            </div>
        </div>
    </div>
</section>
<section class="service py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Objeto_inteligente_vectorial1_.png" alt="">
            </div>
            <div class="col-md-4">
                <h2 class="p-color text-center">NUESTROS SERVICIOS</h2>
            </div>
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Objeto_inteligente_vectorial1_.png" alt="">
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/industrial-designer.webp" class="card-img-top fade" alt="...">
                    <div class="card-body p-0">
                        <h5 class="card-title">ASESORAMIENTO TÉCNICO</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/computer-literacy.webp" class="card-img-top fade" alt="...">
                    <div class="card-body p-0">
                        <h5 class="card-title">MONTAJE</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card ">
                   <img src="<?php echo get_template_directory_uri(); ?>/img/technological-background.webp" class="card-img-top fade" alt="...">
                   <div class="card-body p-0">
                    <h5 class="card-title">ENSAMBLADO</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section class="project">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h2 class="text-center text-white heading">
                    LA SOLUCIÓN A TUS PROYECTOS
                </h2>
                <p class="text-center text-white">Plantéanos cuál es tu necesidad</p>
                <p class="text-center text-white">para el desarrollo de tu nuevo proyecto electrónico</p>
                <div class="contact pt-3">
                    <button class="btn text-center text-white ">CONTACTAR</button>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="notice">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 flex">
                <h3 class="p-color text-center">Tecnología, innovación y actualidad</h3>
                <p>en el montaje y ensamblado electrónico</p>
            </div>
            <div class="col-md-1">
                <img class="varti" src="<?php echo get_template_directory_uri(); ?>/img/vartile.png" alt="">
            </div>

            <div class="col-md-7 flex">
                <?php echo do_shortcode('[noticias id="102"]'); ?>
            </div>



        </div>
    </div>
</section>
<?php get_footer(); ?>
</body>




