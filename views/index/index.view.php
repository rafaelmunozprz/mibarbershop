<?php

use App\Models\Templates;

$TEMPLATE = new Templates();
$TEMPLATE->header();

?>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo $ROUTE ?>Library/plugin_public/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <!-- Nav -->
    <?php $TEMPLATE->nav_bar(); ?>
    <!-- Nav -->

    <main>
        <!--? slider Area Start-->
        <div class="slider-area position-relative fix">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-9 col-md-11 col-sm-10">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay="0.2s">Con Rafaello's Barber</span>
                                    <h1 data-animation="fadeInUp" data-delay="0.5s">Sigue cortando, nosotros te ayudamos con las cuentas</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-9 col-md-11 col-sm-10">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay="0.2s">ERP para BarberShop</span>
                                    <h1 data-animation="fadeInUp" data-delay="0.5s">Agenda, corta, detalla y cobra</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- stroke Text -->
            <div class="stock-text">
                <h2>POS en línea</h2>
                <h2>POS en línea</h2>
            </div>
            <!-- Arrow -->
            <div class="thumb-content-box">
                <div class="thumb-content">
                    <h3>REGISTRATE AHORA</h3>
                    <a href="<?php echo $ROUTE?>register"> <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? About Area Start -->
        <section class="about-area section-padding30 position-relative">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-11">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="<?php echo $ROUTE ?>Library/plugin_public/img/gallery/about.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle3 mb-35">
                                <span>Idea nacida dentro de un BarberShop</span>
                                <h2>¡Totalmente gratuito para Hispanohablantes!</h2>
                            </div>
                            <p class="mb-30 pera-bottom">
                                MiBarberShop prentede ayudar en la administración de un Barber Shop sin importar el tamaño del negocio, brindando herramientas ajustadas al dia a dia,
                                conociendo las dificultades de administrar personal y llevar los gastos de tu negocio para que sepas que está pasando con tus ganacias.
                            </p>
                            <p class="pera-top mb-50">¡El servicio es totalmente gratuito! La idea es crear una comunidad de Barberos a nivel hispano</p>
                            <img src="<?php echo $ROUTE ?>Library/plugin_public/img/gallery/signature.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Shape -->
            <div class="about-shape">
                <img src="<?php echo $ROUTE ?>Library/plugin_public/img/gallery/about-shape.png" alt="">
            </div>
        </section>
        <!-- About-2 Area End -->
        <!--? Services Area Start -->
        <section class="service-area pb-170">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-11 col-sm-11">
                        <div class="section-tittle text-center mb-90">
                            <span>Servicios profesionales</span>
                            <h2>Encuentra en la comunidad ideas, consejos y crecimiento para tu negocio</h2>
                        </div>
                    </div>
                </div>
                <!-- Section caption -->
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div class="service-cap">
                                <h4><a href="#">Cursos</a></h4>
                                <p>
                                    Aprende las últimas tendencias de cabello con nuestros cursos de estilo. ¡Inscríbete ahora!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption active text-center mb-30">
                            <div class="service-icon">
                                <i class="fas fa-rss"></i>
                            </div>
                            <div class="service-cap">
                                <h4><a href="#">Blog</a></h4>
                                <p>
                                    ¡Descubre técnicas de corte, estilo y cuidado de barba y cabello en nuestro nuevo blog!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <i class="fa-solid fa-people-group"></i>
                            </div>
                            <div class="service-cap">
                                <h4><a href="#">Comunidad</a></h4>
                                <p>¡Únete a nuestra comunidad de barberos y comparte tus técnicas y consejos de corte!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Area End -->
        <!--? Team Start -->
        <div class="team-area pb-180">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-11 col-sm-11">
                        <div class="section-tittle text-center mb-100">
                            <span>Equipo profesional</span>
                            <h2>Maestros barberos con años de experiencia</h2>
                        </div>
                    </div>
                </div>
                <div class="row team-active dot-style">
                    <!-- single Tem -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-80 text-center">
                            <div class="team-img">
                                <img src="<?php echo $ROUTE ?>Library/plugin_public/img/gallery/team1.png" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Master Barber</span>
                                <h3><a href="#">Guy C. Pulido bks</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-80 text-center">
                            <div class="team-img">
                                <img src="<?php echo $ROUTE ?>Library/plugin_public/img/gallery/team2.png" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Color Expart</span>
                                <h3><a href="#">Steve L. Nolan</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-80 text-center">
                            <div class="team-img">
                                <img src="<?php echo $ROUTE ?>Library/plugin_public/img/gallery/team3.png" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Master Barber</span>
                                <h3><a href="#">Edgar P. Mathis</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-80 text-center">
                            <div class="team-img">
                                <img src="<?php echo $ROUTE ?>Library/plugin_public/img/gallery/team2.png" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Master Barber</span>
                                <h3><a href="#">Edgar P. Mathis</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        <!-- Best Pricing Area Start -->
        <div class="best-pricing section-padding2 position-relative">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-tittle mb-50">
                            <span>Nuestros mejores precios</span>
                            <h2>Servicio de administración<br> ¡GRATIS!</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="pricing-list">
                                    <ul>
                                        <li>Punto de venta . . . . . . . . . . . . . . . . . <span>$0.00</span></li>
                                        <li>Cobro de servicios . . . . . . . . . . . . . <span>$0.00</span></li>
                                        <li>Venta de artículos . . . . . . . . . . . . . <span>$0.00</span></li>
                                        <li>Registro de citas . . . . . . . . . . . . . . <span>$0.00</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="pricing-list">
                                    <ul>
                                        <li>Registro de tu negocio. . . . . . . . . . . . <span>$0.00</span></li>
                                        <li>Alta de clientes . . . . . . . . . . . . . . . . . . <span>$0.00</span></li>
                                        <li>Alta de provedores . . . . . . . . . . . . . . . <span>$0.00</span></li>
                                        <li>Alta de trabajadores . . . . . . . . . . . . . <span>$0.00</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pricing-img">
                <img class="pricing-img1" src="<?php echo $ROUTE ?>Library/plugin_public/img/gallery/pricing1.png" alt="">
                <img class="pricing-img2" src="<?php echo $ROUTE ?>Library/plugin_public/img/gallery/pricing2.png" alt="">
            </div>
        </div>
        <div class="gallery-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-9 col-sm-10">
                        <div class="section-tittle text-center mb-100">
                            <span>Galería</span>
                            <h2>Algunas imágenes del desarrollo y forma de trabajo</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img " style="background-image: url(<?php echo $ROUTE ?>Library/plugin_public/img/gallery/gallery1.png);"></div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img " style="background-image: url(<?php echo $ROUTE ?>Library/plugin_public/img/gallery/gallery2.png);"></div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img " style="background-image: url(<?php echo $ROUTE ?>Library/plugin_public/img/gallery/gallery3.png);"></div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img " style="background-image: url(<?php echo $ROUTE ?>Library/plugin_public/img/gallery/gallery4.png);"></div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Area End -->
        <!-- Cut Details Start -->
        <div class="cut-details section-bg section-padding2" data-background="<?php echo $ROUTE ?>Library/plugin_public/img/gallery/section_bg02.png">
            <div class="container">
                <div class="cut-active dot-style">
                    <div class="single-cut">
                        <div class="cut-icon mb-20">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px">
                                <image x="0px" y="0px" width="50px" height="50px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBQ4MDDIERuyfAAADc0lEQVRYw7WYXWxTZRjH/+e0ikhh7QgfiYJZZ7bhBC6mU0LQ6DBADNGYLEaNJGpi4jTEQczYjQG8EL2ThAUTvTRGBwmECyBA+XRKHJpUL1yXFseWbe1ixgZCSAg/Lmo9bXe+up0+/5vT//Oc9/ee8z7nqwbyGbVqUL2iiuiurmtMKf2tu/52DXtW1OhVtekFRZTSkCY1rYcV0VI1arl+VULH9JvnGLhpHT/wD728z+M22QVs5ksyJOlkgds4zqlWEgzSQQ3uEzF4ju8ZpZsHK4NEOcgo7xL2AFhq4CgDtPmHPEWGg0R9AwrayjD77CY2s/RtsrRXDMhrCSc5wyIvyE6GaJ4lQogQB/idZW6QjxlkxRwQee0lWdoupec0a9uqlauHM8VrYyXqyLIuEIQIcYLPZ0JC/EJnQIh8C4xYDV0wO0hgBAgRm0kxrxhSS46mQBFCHKa7GLKbbwNHiCayRAqQCBMBdVW5etlRgGzjWFUQYgMDGHnIaZfbSIxTWNFP3MGzl0GaViQWMVXoAhv9SGn0O3hO+oLPkHiZ4y5FacrD3nPSJn5GptbrJ7+P+VnERa3VA6bWKFlFyC0NqdFUXOkqQqS06kwt1XhVIeNaZiqqSZeS0z4955jWwrBCuudSskvSRklSTDEXzznuaJ74l/m+rt4Wm3Zt8WxhcYAOU5Na7OuwJ3165RHTlKlhrfQFaZckXfH0ymOFhsNKaZX6POYSU7v2SZJ6XTz7aFJKbKfH9ZxuLLp9pIk5evaKM4ZMndXzrjOJ/7+V0Uv/rYKdZx9tOi8Jg3HqPY+kn66iGdt59jrMe/nnyX52V+mhVcsNFuchLWQqeH+vRB9xCBVeJC7xZhUQYTKstyBb+JNQ4JB3OJvfKhgJPggYEeEaz5ZCmpgI4H2+WD18Xdi2zG4uBbj8r5GxvtUs2+AE+wNCrCZHq/W7OBUlya4AEI9yjbeKnfL0VbrmiIgzyCelXnnJI/zBV3NYm6cZoaPcnVkW4yQXZtVpBp1keWVmxq7YpIsc2ys8nmbOc5k6u5zTLqtIkOQNn/eBer4hx4eY9nm3XbdwkTSfun67PEQ7R8ixh1rnKsPj/64WbdPrmtI5XdGAruqGrmu+IlquBj2hDXpGl/WdDumm2yBeEEky9KRe1Go16jFFFNVt3dSEUvpLfbqgae8B7gNdcvnkrRzZ4gAAAABJRU5ErkJggg==" />
                            </svg>
                        </div>
                        <div class="cut-descriptions">
                            <p>
                                El nuevo sitio web "mibarbershop.com.mx" de manejo de barberías es impresionante. Destaca por su diseño moderno y fácil navegación, lo que hace que encontrar información relevante sobre las barberías sea muy sencillo. Además, la plataforma es muy intuitiva y permite hacer reservas de citas en línea de manera rápida y sencilla. Sin duda, es una gran herramienta para cualquier persona que busque un servicio de barbería de alta calidad.
                            </p>
                            <span>Rafael Muñoz Pérez</span>
                        </div>
                    </div>
                    <div class="single-cut">
                        <div class="cut-icon mb-20">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px">
                                <image x="0px" y="0px" width="50px" height="50px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBQ4MDDIERuyfAAADc0lEQVRYw7WYXWxTZRjH/+e0ikhh7QgfiYJZZ7bhBC6mU0LQ6DBADNGYLEaNJGpi4jTEQczYjQG8EL2ThAUTvTRGBwmECyBA+XRKHJpUL1yXFseWbe1ixgZCSAg/Lmo9bXe+up0+/5vT//Oc9/ee8z7nqwbyGbVqUL2iiuiurmtMKf2tu/52DXtW1OhVtekFRZTSkCY1rYcV0VI1arl+VULH9JvnGLhpHT/wD728z+M22QVs5ksyJOlkgds4zqlWEgzSQQ3uEzF4ju8ZpZsHK4NEOcgo7xL2AFhq4CgDtPmHPEWGg0R9AwrayjD77CY2s/RtsrRXDMhrCSc5wyIvyE6GaJ4lQogQB/idZW6QjxlkxRwQee0lWdoupec0a9uqlauHM8VrYyXqyLIuEIQIcYLPZ0JC/EJnQIh8C4xYDV0wO0hgBAgRm0kxrxhSS46mQBFCHKa7GLKbbwNHiCayRAqQCBMBdVW5etlRgGzjWFUQYgMDGHnIaZfbSIxTWNFP3MGzl0GaViQWMVXoAhv9SGn0O3hO+oLPkHiZ4y5FacrD3nPSJn5GptbrJ7+P+VnERa3VA6bWKFlFyC0NqdFUXOkqQqS06kwt1XhVIeNaZiqqSZeS0z4955jWwrBCuudSskvSRklSTDEXzznuaJ74l/m+rt4Wm3Zt8WxhcYAOU5Na7OuwJ3165RHTlKlhrfQFaZckXfH0ymOFhsNKaZX6POYSU7v2SZJ6XTz7aFJKbKfH9ZxuLLp9pIk5evaKM4ZMndXzrjOJ/7+V0Uv/rYKdZx9tOi8Jg3HqPY+kn66iGdt59jrMe/nnyX52V+mhVcsNFuchLWQqeH+vRB9xCBVeJC7xZhUQYTKstyBb+JNQ4JB3OJvfKhgJPggYEeEaz5ZCmpgI4H2+WD18Xdi2zG4uBbj8r5GxvtUs2+AE+wNCrCZHq/W7OBUlya4AEI9yjbeKnfL0VbrmiIgzyCelXnnJI/zBV3NYm6cZoaPcnVkW4yQXZtVpBp1keWVmxq7YpIsc2ys8nmbOc5k6u5zTLqtIkOQNn/eBer4hx4eY9nm3XbdwkTSfun67PEQ7R8ixh1rnKsPj/64WbdPrmtI5XdGAruqGrmu+IlquBj2hDXpGl/WdDumm2yBeEEky9KRe1Go16jFFFNVt3dSEUvpLfbqgae8B7gNdcvnkrRzZ4gAAAABJRU5ErkJggg==" />
                            </svg>
                        </div>
                        <div class="cut-descriptions">
                            <p>
                                El nuevo sitio web de manejo de barberías es una verdadera revolución en el mundo de la barbería. La plataforma no solo es fácil de usar y atractiva, sino que también ofrece una amplia gama de opciones para satisfacer las necesidades de cada cliente. Desde la reserva de citas en línea hasta la información detallada sobre cada una de las barberías, este sitio web es una herramienta invaluable para cualquier persona que busque un servicio de barbería de alta calidad. Sin duda, el sitio web es un gran paso adelante para la industria de la barbería y estamos emocionados de ver cómo se desarrollará en el futuro.
                            </p>
                            <span>Profesor Barbero Miguel</span>
                        </div>
                    </div>
                    <div class="single-cut">
                        <div class="cut-icon mb-20">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px">
                                <image x="0px" y="0px" width="50px" height="50px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBQ4MDDIERuyfAAADc0lEQVRYw7WYXWxTZRjH/+e0ikhh7QgfiYJZZ7bhBC6mU0LQ6DBADNGYLEaNJGpi4jTEQczYjQG8EL2ThAUTvTRGBwmECyBA+XRKHJpUL1yXFseWbe1ixgZCSAg/Lmo9bXe+up0+/5vT//Oc9/ee8z7nqwbyGbVqUL2iiuiurmtMKf2tu/52DXtW1OhVtekFRZTSkCY1rYcV0VI1arl+VULH9JvnGLhpHT/wD728z+M22QVs5ksyJOlkgds4zqlWEgzSQQ3uEzF4ju8ZpZsHK4NEOcgo7xL2AFhq4CgDtPmHPEWGg0R9AwrayjD77CY2s/RtsrRXDMhrCSc5wyIvyE6GaJ4lQogQB/idZW6QjxlkxRwQee0lWdoupec0a9uqlauHM8VrYyXqyLIuEIQIcYLPZ0JC/EJnQIh8C4xYDV0wO0hgBAgRm0kxrxhSS46mQBFCHKa7GLKbbwNHiCayRAqQCBMBdVW5etlRgGzjWFUQYgMDGHnIaZfbSIxTWNFP3MGzl0GaViQWMVXoAhv9SGn0O3hO+oLPkHiZ4y5FacrD3nPSJn5GptbrJ7+P+VnERa3VA6bWKFlFyC0NqdFUXOkqQqS06kwt1XhVIeNaZiqqSZeS0z4955jWwrBCuudSskvSRklSTDEXzznuaJ74l/m+rt4Wm3Zt8WxhcYAOU5Na7OuwJ3165RHTlKlhrfQFaZckXfH0ymOFhsNKaZX6POYSU7v2SZJ6XTz7aFJKbKfH9ZxuLLp9pIk5evaKM4ZMndXzrjOJ/7+V0Uv/rYKdZx9tOi8Jg3HqPY+kn66iGdt59jrMe/nnyX52V+mhVcsNFuchLWQqeH+vRB9xCBVeJC7xZhUQYTKstyBb+JNQ4JB3OJvfKhgJPggYEeEaz5ZCmpgI4H2+WD18Xdi2zG4uBbj8r5GxvtUs2+AE+wNCrCZHq/W7OBUlya4AEI9yjbeKnfL0VbrmiIgzyCelXnnJI/zBV3NYm6cZoaPcnVkW4yQXZtVpBp1keWVmxq7YpIsc2ys8nmbOc5k6u5zTLqtIkOQNn/eBer4hx4eY9nm3XbdwkTSfun67PEQ7R8ixh1rnKsPj/64WbdPrmtI5XdGAruqGrmu+IlquBj2hDXpGl/WdDumm2yBeEEky9KRe1Go16jFFFNVt3dSEUvpLfbqgae8B7gNdcvnkrRzZ4gAAAABJRU5ErkJggg==" />
                            </svg>
                        </div>
                        <div class="cut-descriptions">
                            <p>
                                El nuevo sitio web de manejo de barberías es una herramienta impresionante para quienes buscan servicios de barbería de alta calidad. Lo mejor de todo es que el uso de la plataforma es completamente gratuito.
                            </p>
                            <span>JONT NICOLIN KOOK</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cut Details End -->
        <!--? Blog Area Start -->
        <section class="home-blog-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                        <div class="section-tittle text-center mb-90">
                            <span>Nuestros nuevos temas</span>
                            <h2>Lo mas comentado en nuestros Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="<?php echo $ROUTE ?>Library/plugin_public/img/gallery/home-blog1.png" alt="">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>| Técnica</p>
                                    <h3><a href="blog_details.html">Crea un Low Fade únicamente con tu Clipper</a></h3>
                                    <a href="blog_details.html" class="more-btn">Únete y comenta »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="<?php echo $ROUTE ?>Library/plugin_public/img/gallery/home-blog2.png" alt="">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>| Productos</p>
                                    <h3><a href="blog_details.html">La mejor trimmer del momento, lo bueno y lo malo</a></h3>
                                    <a href="blog_details.html" class="more-btn">Únete y comenta »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
    </main>

    <!-- Footer -->
    <?php echo $TEMPLATE->footer(); ?>
    <!-- Footer -->

    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
    <?php echo $TEMPLATE->scripts(); ?>
</body>

</html>