<?php
include "config.php";

$controllers = ((isset($_GET['page']))
    ? $_GET['page']
    : false);

if ($controllers)
{
    $controllers = "controllers/{$controllers}.php";
    if (file_exists($controllers))
    {
        include $controllers;
    }
}

$path = "template/".((isset($_GET['page']))
        ? $_GET['page'].'.php'
        : "main.php");
if (!file_exists($path))
{
    $path = 'template/error404.php';
}
include $path;
