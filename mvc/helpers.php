<?php
/**
 * Funciones para que la app opere correctamente
 */

function view(string $name, $vars = []) {
    extract($vars);
    $title .= " - $name";
    include "views/$name.tpl.php";
}