<?php

if ($DIR_SIZE == 1 && $DIR[0] == 'blogs') {
    require_once "../views/blogs/blogs.view.php";
} else {
    require_once "../views/errors/errors.view.php";
}