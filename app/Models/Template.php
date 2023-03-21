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
            '<meta name="twitter:card" content="" />'.
            '<link rel="stylesheet" href="' . $this->ROUTE . 'Library/plugin_public/css/bootstrap.min.css">'.
            '<link rel="stylesheet" href="'.$this->ROUTE.'Library/plugin_public/css/owl.carousel.min.css">
            <link rel="stylesheet" href="'.$this->ROUTE.'Library/plugin_public/css/slicknav.css">
            <link rel="stylesheet" href="'.$this->ROUTE.'Library/plugin_public/css/flaticon.css">
            <link rel="stylesheet" href="'.$this->ROUTE.'Library/plugin_public/css/gijgo.css">
            <link rel="stylesheet" href="'.$this->ROUTE.'Library/plugin_public/css/animate.min.css">
            <link rel="stylesheet" href="'.$this->ROUTE.'Library/plugin_public/css/animated-headline.css">
            <link rel="stylesheet" href="'.$this->ROUTE.'Library/plugin_public/css/magnific-popup.css">
            <link rel="stylesheet" href="'.$this->ROUTE.'Library/plugin_public/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="'.$this->ROUTE.'Library/plugin_public/css/themify-icons.css">
            <link rel="stylesheet" href="'.$this->ROUTE.'Library/plugin_public/css/slick.css">
            <link rel="stylesheet" href="'.$this->ROUTE.'Library/plugin_public/css/nice-select.css">
            <link rel="stylesheet" href="'.$this->ROUTE.'Library/plugin_public/css/style.css">';

        $headerBody .= '</head>';

        echo $headerBody;
    }

    function scripts()
    {
        $scripsBody = '';
        $scripsBody .= '<script> var RUTA ="' . $this->ROUTE . '";</script>';
        $scripsBody .= '
        <script src="'.$this->ROUTE.'Library/plugin_public/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/popper.min.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/bootstrap.min.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/jquery.slicknav.min.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/owl.carousel.min.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/slick.min.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/wow.min.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/animated.headline.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/jquery.magnific-popup.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/gijgo.min.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/jquery.nice-select.min.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/jquery.sticky.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/jquery.counterup.min.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/waypoints.min.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/jquery.countdown.min.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/hover-direction-snake.min.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/contact.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/jquery.form.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/jquery.validate.min.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/mail-script.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/jquery.ajaxchimp.min.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/plugins.js"></script>
        <script src="'.$this->ROUTE.'Library/plugin_public/js/main.js"></script>';
        
        echo $scripsBody;
    }
}