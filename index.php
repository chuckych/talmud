<?php
function E_ALL()
{
    if ($_SERVER['SERVER_NAME'] == 'localhost') {
        error_reporting(E_ALL);
        ini_set('display_errors', '1');
    } else {
        error_reporting(E_ALL);
        ini_set('display_errors', '0');
    }
}
function vjs()
{
    if ($_SERVER['SERVER_NAME'] == 'localhost') {
        return time();
    } else {
        return 'v0.0.1';
    }
}
function pagina($pagina)
{
    $pag = (!isset($_GET['p']) or $_GET['p'] == "index.php") ? $pagina : $_GET['p'];
    return $pag;
}
require pagina('talmud.php');