<?php

//API routes
define("API_BASE", 'https://mapon.com/api/v1/');
define("API_CAR_DATA", API_BASE . "unit/list.json?key=2ab183444385fa5024dcedece4ed0f4c0be4cb06");
define("API_ROUTE_AND_STOPPING", API_BASE . "route/list.json?key=2ab183444385fa5024dcedece4ed0f4c0be4cb06");

$documentRoot = getcwd();
//BASE PATH -> FOR REFERENCE FILES
define("BASE_PATH", $documentRoot);
