<?php
require "config.php";
require "helpers.php";

// la forma de comunicarse con el front controller es via parametros GET
// http://localhost:8000/index.php?url=home

if (empty($_GET)) {
    require "controllers/home.php";
} elseif (isset($_GET['url'])) {
    $file = "controllers/".$_GET['url'].".php";
    if (file_exists($file)) {
        require $file;
    } else {
        header("HTTP/1.1 404 Page not found");
        exit("Pagina no encontrada");
    }
}

var_dump($_GET);