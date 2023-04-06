<?php

if ($DIR_SIZE == 1 && $DIR[0] == 'register') {
    require_once "../views/register/register.view.php";
} else {
    require_once "../views/errors/errors.view.php";
}
