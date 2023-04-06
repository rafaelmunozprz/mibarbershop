<?php


if ($DIR_SIZE == 1 && $DIR[0] == 'contact') {
    require_once "../views/contact/contact.view.php";
} else {
    require_once "../views/errors/errors.view.php";
}