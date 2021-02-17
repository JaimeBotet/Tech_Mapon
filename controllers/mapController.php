<?php

require_once MODELS . "mapModel.php";

$action;

if (isset($_REQUEST["action"])) {
    $action = $_REQUEST["action"];
} else {
    $action = "getAllEmployees";
}
