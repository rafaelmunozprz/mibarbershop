<?php

session_start();
date_default_timezone_set('America/Mexico_City');
require_once "../app/Controller.php";

use App\Config\{Config};

$CONFIG = new Config();

$ROUTE = $CONFIG->ROUTE();

$route = str_replace($CONFIG->get_Route(), "", $_SERVER["REQUEST_URI"]); /* Obtiene la carpeta en donde está el proyecto */
$uri_Request = explode("?", $route)[0]; /* Separa los elementos en $_GET */

$USER_SYSTEM = isset($_SESSION[$CONFIG->get_Session_Name()]) ? $_SESSION[$CONFIG->get_Session_Name()] : false; /* Registra la sesión en una variable manipulable */

/**
 * MVC Controller
 */

$DIR = isset($uri_Request) ? explode('/', $uri_Request) : false; /* Limpia la URI */
if ($DIR) {
    $dir_Array = [];
    foreach ($DIR as $key => $value) {
        if ($DIR[$key] != '') $dir_Array[] = $DIR[$key];
    }
    $DIR = $dir_Array;
}

$DIR_SIZE = ($DIR ? sizeof($DIR) : 0); /* Tamaño de la URI */

/**
 * END MVC Controller
 */


/**
 * Root controller
 */
if (!$DIR) {
    require_once "../views/index/index.view.php";
}

/**
 * Landing Page Controller
 */

/**
 * Store controller
 */

/**
 * Error controller
 */
else {
    require_once "../views/errors/error.view.php";
}
