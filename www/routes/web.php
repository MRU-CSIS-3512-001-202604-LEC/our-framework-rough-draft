<?php

// Every path your site responds to gets listed here, along with the
// controller in www/controllers/ that handles it.
//
// add() returns the router itself, so these can be chained. Call restrict()
// after a route to require an authorized session for it:
//
//    $router->add("GET", "/admin", "admin.php")->restrict();
//
// A path segment starting with a colon is a path parameter. A route of
// "/movies/:tmdb_id" matches /movies/572802, and the controller reads the
// value as $_GET['tmdb_id'].

$router->add("GET", "/", "app/index.php");
