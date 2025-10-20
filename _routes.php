<?php
/*
 * File: _routes.php
 * Desc: Defines the routing map for the application, including URIs, GET/POST parameters, and associated components.
 * Deps: none
 * Copyright (c) 2025 Andrés Trujillo [Mateus] byUwUr
 */

// URIs
$ROUTE_ROOT = "/";

// Default components to include on each route
$COMPONENTS_EMPTY = ["COMPONENT" => ["nav#spa-nav" => "", "footer#spa-foot" => ""]];
$ROOT_COMPONENTS = ["COMPONENT" => ["nav#spa-nav" => ""]];

// Route definitions
$routes = [
    // Format: "/uri" => ["URI" => "/file.php", "GET" => [...], "POST" => [...], "COMPONENT" => [...]]

    // "/"
    "{$ROUTE_ROOT}" => ["URI" => "/main.php", ...$ROOT_COMPONENTS],
];
