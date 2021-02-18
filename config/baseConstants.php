<?php

//API routes
define("API_BASE", 'https://mapon.com/api/v1/');
define("API_KEY", "2ab183444385fa5024dcedece4ed0f4c0be4cb06");
define("API_CAR_DATA", API_BASE . "unit/list.json?key=" . API_KEY);
define("API_ROUTE", API_BASE . "route/list.json?key=" . API_KEY);

$documentRoot = getcwd();
//BASE PATH -> FOR REFERENCE FILES
define("BASE_PATH", $documentRoot);
