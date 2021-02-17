<?php
include_once "config/constants.php";

if (isset($_GET['controller'])) {
    $controller = getControllerPath($_GET['controller']);
    $fileExists = file_exists($controller);
    if ($fileExists) {
        require_once $controller;
    } else {
        require_once VIEWS . "dashboard/main.php";
    }
} else {
    require_once VIEWS . "login/login.php";
}

function getControllerPath($controller): string
{
    return CONTROLLERS . $controller . "Controller.php";
}
