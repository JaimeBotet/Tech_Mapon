<?php

require_once MODELS . "mapModel.php";

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
    $timeFrom = $_REQUEST['timeFrom'];
    $dateTo = $_REQUEST['dateTo'];
    $timeTo = $_REQUEST['timeTo'];

    $timeInterval = formatTime($dateFrom, $timeFrom, $dateTo, $timeTo);

    $routePoints = getRouteAPI($timeInterval);
    $fp = fopen(BASE_PATH . "/resources/polyline.json", 'w');
    fwrite($fp, json_encode($routePoints));
    fclose($fp);

    require_once VIEWS . "/dashboard/map.php";
}

//The time format from the form needs to be formatted for the API input
function formatTime($dateFrom, $timeFrom, $dateTo, $timeTo)
{
    $timeInterval = new stdClass();
    $timeInterval->from = $dateFrom . 'T' . $timeFrom . ':00Z';
    $timeInterval->to = $dateTo . 'T' . $timeTo . ':00Z';

    return $timeInterval;
}

function getRouteAPI($timeInterval)
{
    $url = API_ROUTE . "&from=$timeInterval->from&till=$timeInterval->to&include[]=polyline";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = json_decode(curl_exec($ch));
    curl_close($ch);
    return $data->data->units[0]->routes;
}

function drawRouteInMap($routePoints)
{
    require_once VIEWS . "/dashboard/map.php";
}
