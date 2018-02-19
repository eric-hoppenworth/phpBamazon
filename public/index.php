<?php
// Grabs the URI and breaks it apart in case we have querystring stuff
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

getenv('JAWSDB_URL')

$mysqli = new mysqli("localhost", "root", "Rice3773", "bamazon");
// Route it up!
switch ($request_uri[0]) {
    // Home page
    case '/':
        require '../views/layouts/home.php';
        break;
    //Post form page
    case '/post':
        require '../views/layouts/post.php';
        break;
    // About page
    case '/about':
        require '../views/layouts/about.php';
        break;
    // Everything else
    default:
        header('HTTP/1.0 404 Not Found');
        require '../views/layouts/404.php';
        break;
}