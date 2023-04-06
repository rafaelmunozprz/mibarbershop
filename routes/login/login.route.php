<?php

if ($DIR_SIZE == 1 && $DIR[0] == 'login') {
    require_once "../views/login/login.view.php";
} else {
    require_once "../views/errors/errors.view.php";
}
