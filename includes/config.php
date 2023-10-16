<?php

define("BASE_DIR", $_SERVER['DOCUMENT_ROOT'] . "/CoffeeNation");
define("BASE_URL", "/CoffeeNation");

$connection = mysqli_connect("localhost", "root", "", "coffeenation");

function pathOf($path)
{
    return BASE_DIR . "/" . $path;
}

function urlOf($path)
{
    return BASE_URL . '/' . $path;
}
session_start();
