<?php

require_once MODELS . "userModel.php";

$action;
if (isset($_REQUEST["action"])) {
    $action = $_REQUEST["action"];
}
if (function_exists($action)) {
    call_user_func($action, $_REQUEST);
}

/* ~~~ CONTROLLER FUNCTIONS ~~~ */

function authenticate($request)
{
    $user = getUser($request);
    // $action = $request["action"];
    $pass = $request["password"];
    if ($user['password'] == $pass) {
        require_once VIEWS . "/dashboard/main.php";
    } else {
        require_once VIEWS . '/login/login.php';
    }
}

function getUser($request)
{
    $user = null;
    if (isset($request["username"])) {
        $user = getByName($request["username"]);
    }
    return $user;
}

function showDashboard()
{
    require_once VIEWS . "/dashboard/main.php";
}
