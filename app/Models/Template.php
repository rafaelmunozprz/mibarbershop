<?php

namespace App\Models;

use App\Config\Config;

class Templates
{
    /**Variables publicas de header */
    public $TITLE;
    public $DESCRIPTION;
    public $KEYWORDS;
    public $ROUTE;
    public $SYS_NAME;
    public $ADDRESS = "";
    public $URL_ICON = "";
    public $URL_IMG = "";

    /**Complementos para funcionalidad */
    var $keyCaptcha_public = "";

    /**Librerias y archivos agregados extras */

    var $bootstrap = true;
    var $recaptcha = false;
    var $sweetAlert = true;
    var $cropper = false;

    var $studylab = false;

    function __construct()
    {
        $CONFIG = new Config();
        $this->ROUTE = $CONFIG->ROUTE();
        $this->SYS_NAME = "Mi Barber Shop";
        $this->TITLE = $this->SYS_NAME;
        $this->DESCRIPTION = "El mejor sitio gratuito para administrar tu BarberShop y no perder dinero";
        $this->ADDRESS = "Para todo el mundo";
        $this->KEYWORDS = "Tienda de artículos para barbería | ERP gratuito para tu BarberShop | POS gratuito para tu BarberShop";
        $this->URL_ICON = $this->ROUTE . "galeria/sistema/logos/icon.png";
        $this->URL_IMG = $this->URL_ICON;
        $this->keyCaptcha_public = $CONFIG->key_Captcha_Public;
    }

    function header()
    {
        $headerBody =
            '<!DOCTYPE html>' .
            '<html lang="es">' .

            '<head>' .
            '<meta charset="UTF-8">' .
            '<meta http-equiv="X-UA-Compatible" content="IE=edge">' .
            '<title>' . $this->TITLE . ' </title>' .
            '<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">' .
            '<meta http-equiv="Cache-control" content="no-cache">' .
            '<meta http-equiv="Pragma" content="no-cache">' .
            '<meta http-equiv="Expires" Content="0">' .
            '<meta name="keywords" content="' . $this->KEYWORDS . '">' .
            '<meta name="description" content="' . $this->DESCRIPTION . '">' .
            '<meta name="robots" content="all">' .
            '<meta name="author" content="WEBMASTER - Ing. Rafael Muñoz Pérez">' .
            '<!-- Open Graph protocol -->' .
            '<meta property="og:title" content="' . $this->DESCRIPTION . '" />' .
            '<meta property="og:site_name" content="' . $this->TITLE . '" />' .
            '<meta property="og:type" content="website" />' .
            '<meta property="og:url" content="' . $this->ROUTE . '" />' .
            '<meta property="og:image" content="' . $this->URL_IMG . '" />' .
            '<meta property="og:image:type" content="image/png" />' .
            '<meta property="og:image:width" content="200" />' .
            '<meta property="og:image:height" content="200" />' .
            '<meta property="og:description" content="' . $this->KEYWORDS . '" />' .
            '<meta name="twitter:title" content="' . $this->TITLE . '" />' .
            '<meta name="twitter:image" content="' . $this->URL_IMG . '" />' .
            '<meta name="twitter:url" content="' . $this->ROUTE . '" />' .
            '<meta name="twitter:card" content="" />' .
            '<link rel="stylesheet" href="' . $this->ROUTE . 'Library/plugin_public/css/bootstrap.min.css">' .
            '<link rel="stylesheet" href="' . $this->ROUTE . 'Library/plugin_public/css/owl.carousel.min.css">
            <link rel="stylesheet" href="' . $this->ROUTE . 'Library/plugin_public/css/slicknav.css">
            <link rel="stylesheet" href="' . $this->ROUTE . 'Library/plugin_public/css/flaticon.css">
            <link rel="stylesheet" href="' . $this->ROUTE . 'Library/plugin_public/css/gijgo.css">
            <link rel="stylesheet" href="' . $this->ROUTE . 'Library/plugin_public/css/animate.min.css">
            <link rel="stylesheet" href="' . $this->ROUTE . 'Library/plugin_public/css/animated-headline.css">
            <link rel="stylesheet" href="' . $this->ROUTE . 'Library/plugin_public/css/magnific-popup.css">
            <link rel="stylesheet" href="' . $this->ROUTE . 'Library/plugin_public/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="' . $this->ROUTE . 'Library/plugin_public/css/themify-icons.css">
            <link rel="stylesheet" href="' . $this->ROUTE . 'Library/plugin_public/css/slick.css">
            <link rel="stylesheet" href="' . $this->ROUTE . 'Library/plugin_public/css/nice-select.css">
            <link rel="stylesheet" href="' . $this->ROUTE . 'Library/plugin_public/css/style.css">' .
            '<script src="https://kit.fontawesome.com/900e64e177.js" crossorigin="anonymous"></script>';

        $headerBody .= '</head>';

        echo $headerBody;
    }

    public function nav_bar()
    {
        echo '
                <header>
                    <div class="header-area header-transparent pt-20">
                        <div class="main-header header-sticky">
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    <div class="col-xl-2 col-lg-2 col-md-1">
                                        <div class="logo">
                                            <a href="' . $this->ROUTE . '"><img src="' . $this->ROUTE . 'Library/plugin_public/img/logo/logo.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-10 col-lg-10 col-md-10">
                                        <div class="menu-main d-flex align-items-center justify-content-end">
                                            <div class="main-menu f-right d-none d-lg-block">
                                                <nav>
                                                    <ul id="navigation">
                                                        <li class="active"><a href="'.$this->ROUTE.'">MiBarberShop</a></li>
                                                        <li><a href="' . $this->ROUTE . 'store">Tienda</a></li>
                                                        <li><a href="' . $this->ROUTE . 'services">Servicios</a></li>
                                                        <li><a href="' . $this->ROUTE . 'portfolio">Portafolio</a></li>
                                                        <li><a href="' . $this->ROUTE . 'blogs">Blog</a> </li>
                                                        <li><a href="' . $this->ROUTE . 'contact">Contacto</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                            <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                                <a href="'.$this->ROUTE.'register" class="btn header-btn">Vuelvete miembro</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mobile_menu d-block d-lg-none"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>';
    }

    public function footer()
    {
        echo '
                <footer>
                    <div class="footer-area section-bg" data-background="' . $this->ROUTE . 'Library/plugin_public/img/gallery/footer_bg.png">
                        <div class="container">
                            <div class="footer-top footer-padding">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
                                        <div class="single-footer-caption mb-50">
                                            <div class="footer-logo">
                                                <a href="index.html"><img src="' . $this->ROUTE . 'Library/plugin_public/img/logo/logo2_footer.png" alt=""></a>
                                            </div>
                                            <div class="footer-tittle">
                                                <div class="footer-pera">
                                                    <p class="info1">Recibe actualizaciones y las últimas noticias con un simple Click</p>
                                                </div>
                                            </div>
                                            <div class="footer-number">
                                                <h4><span>+52 </span>378 1198577</h4>
                                                <p>contacto@mibarbershop.com.mx</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                                        <div class="single-footer-caption mb-50">
                                            <div class="footer-tittle">
                                                <h4>Location </h4>
                                                <ul>
                                                    <li><a href="#">Advanced</a></li>
                                                    <li><a href="#"> Management</a></li>
                                                    <li><a href="#">Corporate</a></li>
                                                    <li><a href="#">Customer</a></li>
                                                    <li><a href="#">Information</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                                        <div class="single-footer-caption mb-50">
                                            <div class="footer-tittle">
                                                <h4>Explorar</h4>
                                                <ul>
                                                    <li><a href="' . $this->ROUTE . 'store">Tienda</a></li>
                                                    <li><a href="' . $this->ROUTE . 'about">Acerca De...</a></li>
                                                    <li><a href="' . $this->ROUTE . 'services">Servicios</a></li>
                                                    <li><a href="' . $this->ROUTE . 'portfolio">Portafolio</a></li>
                                                    <li><a href="' . $this->ROUTE . 'blogs">Blog</a></li>
                                                    <li><a href="' . $this->ROUTE . 'contact">Contacto</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                                        <div class="single-footer-caption mb-50">
                                            <div class="footer-tittle">
                                                <h4>NewsLetter</h4>
                                                <div class="footer-pera">
                                                    <p class="info1">Subscríbete y obten las últimas actualizaciones</p>
                                                </div>
                                            </div>
                                            <div class="footer-form">
                                                <div id="mc_embed_signup">
                                                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                                        <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Correo electrónico " class="placeholder hide-on-focus" onfocus="this.placeholder = \'\'" onblur="this.placeholder = \'Your email address\'">
                                                        <div class="form-icon">
                                                            <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">Enviar</button>
                                                        </div>
                                                        <div class="mt-10 info"></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-bottom">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-xl-9 col-lg-8">
                                        <div class="footer-copy-right">
                                                Copyright &copy;<script>
                                                    document.write(new Date().getFullYear());
                                                </script> Todos los derechos reservados</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4">
                                        <div class="footer-social f-right">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fas fa-globe"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>';
    }

    function scripts()
    {
        $scripsBody = '';
        $scripsBody .= '<script> var RUTA ="' . $this->ROUTE . '";</script>';
        $scripsBody .= '
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/popper.min.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/bootstrap.min.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/jquery.slicknav.min.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/owl.carousel.min.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/slick.min.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/wow.min.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/animated.headline.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/jquery.magnific-popup.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/gijgo.min.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/jquery.nice-select.min.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/jquery.sticky.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/jquery.counterup.min.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/waypoints.min.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/jquery.countdown.min.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/hover-direction-snake.min.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/contact.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/jquery.form.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/jquery.validate.min.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/mail-script.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/jquery.ajaxchimp.min.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/plugins.js"></script>
        <script src="' . $this->ROUTE . 'Library/plugin_public/js/main.js"></script>';

        echo $scripsBody;
    }
}
