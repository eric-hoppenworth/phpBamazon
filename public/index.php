<?php



if(getenv('JAWSDB_URL')){
    $url = getenv('JAWSDB_URL');
    $dbparts = parse_url($url);

    $hostname = $dbparts['host'];
    $username = $dbparts['user'];
    $password = $dbparts['pass'];
    $database = ltrim($dbparts['path'],'/');
    $mysqli = new mysqli(
        $hostname,
        $username,
        $password,
        $database
    );
} else {
    $mysqli = new mysqli("localhost", "root", "Rice3773", "bamazon");
}

// Grabs the URI and breaks it apart in case we have querystring stuff
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

$request_uri = explode('/',$request_uri[0]);

$length = count($request_uri);

for($i = 0; $i < $length; $i++){
    $request_uri[$i] = "/" . $request_uri[$i];
}

//models
require '../models/Product/Product.php';

// Routing...
switch ($request_uri[1]) {
    // Home page
    case '/':
        require '../views/layouts/home.php';
        break;
    //Post form page
    case '/products':
        require '../views/layouts/productInfo.php';
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