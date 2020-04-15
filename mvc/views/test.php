<?php
$title = "Probando vistas en PHP";
$enterprise = "UAdeO";

function view(string $view, $vars) {
    extract($vars);
    include 'layout/master.php';
}

view("home", compact("title", "enterprise"));

// https://www.w3schools.com/php/php_arrays_associative.asp