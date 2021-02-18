<?php

require_once MODELS . "mapModel.php";

$action;

$action;
if (isset($_REQUEST["action"])) {
    $action = $_REQUEST["action"];
}
if (function_exists($action)) {
    call_user_func($action, $_REQUEST);
}

function getCarRoute()
{
    $dateFrom = $_REQUEST['dateFrom'];
    $dateTo = $_REQUEST['dateTo'];
}
