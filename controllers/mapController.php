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
    $timeFrom = $_REQUEST['timeFrom'];
    $dateTo = $_REQUEST['dateTo'];
    $timeTo = $_REQUEST['timeTo'];

    $timeInterval = resolveTime($dateFrom, $timeFrom, $dateTo, $timeTo);

    $routePoints = getRouteAPI($timeInterval);

    require_once VIEWS . "/dashboard/map.php";
}

function resolveTime($dateFrom, $timeFrom, $dateTo, $timeTo)
{
    //we create a clean way to pass the time interval we want to get the route from
    $timeInterval = new stdClass();
    $timeInterval->from = $dateFrom . 'T' . $timeFrom . ':00Z';
    $timeInterval->to = $dateTo . 'T' . $timeTo . ':00Z';

    return $timeInterval;
}

function getRouteAPI($timeInterval)
{
    //Use curl here to send API request
    $url = API_ROUTE . "&from=$timeInterval->from&till=$timeInterval->to&include[]=polyline";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = json_decode(curl_exec($ch));
    curl_close($ch);
    // echo '<pre>';
    // print_r($data->data->units[0]->routes);
    // echo '</pre>';
    return $data->data->units[0]->routes;
}
