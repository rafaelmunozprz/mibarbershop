<?php

session_start();
date_default_timezone_set('America/Mexico_City');
require_once "../app/Controller.php";

use App\Config\Config;

$CONFIG = new Config();

$ROUTE = $CONFIG->ROUTE();

$route = str_replace($CONFIG->get_Route(), "", $_SERVER['REQUEST_URI']); //Get the folder where the proyect is
$URI_REQUEST = explode("?", $route)[0]; //Slice the URI on $_GET elements

$USER_SYS = isset($_SESSION[$CONFIG->get_Session_Name()]) ? $_SESSION[$CONFIG->get_Session_Name()] : false; //Register the session in a veriable

/* ----------------------- */
/* --- MVC Controller----- */
/* ----------------------- */

$DIR = isset($URI_REQUEST) ? explode('/', $URI_REQUEST) : false;
if ($DIR) {
    $dir_Array = [];
    foreach ($DIR as $key => $value) {
        if ($DIR[$key] != '') {
            $dir_Array[] = $DIR[$key];
        }
    }
    $DIR = $dir_Array;
}
$DIR_SIZE = ($DIR ? sizeof($DIR) : 0); //Size of the URI

/* ----------------------- */
/* -- END MVC Controller-- */
/* ----------------------- */

/* Root controller */

if(!$DIR){
    require_once "../views/index/index.view.php";
}

/* Contact controller */
/* About controller */
/* Services controller */
/* Portfolio controller */
/* Blog Controller */

/* Login Controller */
/* Register Controller */

/* Error Controller */
else {
    require_once "../views/errors/errors.view.php";
}