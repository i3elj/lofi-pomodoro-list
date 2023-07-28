<?php

require_once "not_found.php";
require_once "utils.php";

$parsed_uri = parse_url($_SERVER["REQUEST_URI"]);
$path = $parsed_uri['path'];

/**
 * Make sure every new route is added at the top of the list. Usually new routes
 * have the tendency to grow larger than the previous one. This way the regular
 * expression (`preg_match()`) will work well without making mistakes.
 *
 * Obs: $key path --- url path (it uses regex, that's why /.../)
 *      $key view --- path to the view file based on project's roots
 */
$routes = [
    [
        'path' => '/\//',
        'view' => 'views/home/index.php',
    ],
];

create_router($routes, $path);
