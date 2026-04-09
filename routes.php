<?php

const BASE_URL = '/e-shop';
$uri = $_SERVER['REQUEST_URI'];

// Remove query string
$uri = parse_url($uri, PHP_URL_PATH);

// Remove base folder from URI
$uri = str_replace(BASE_URL, '', $uri);

// Remove trailing slash
$uri = rtrim($uri, '/');
//echo $uri;
//switch ($uri) {
//    case '':
//        require './controllers/home.php';
//        break;
//    case '/about':
//        require './controllers/about.php';
//        break;
//    case '/contact':
//        require './controllers/contact.php';
//        break;
//    case '/products':
//        require './controllers/products.php';
//        break;
//    case '/login':
//        require './controllers/login.php';
//        break;
//    case '/register':
//        require './controllers/register.php';
//        break;
//    default:
//        http_response_code(404);
//        echo '404 Not Found';
//        break;
//}


$routes = [
    '' => 'home.php',
    '/about' => 'about.php',
    '/contact' => 'contact.php',
    '/products' => 'products.php',
    '/login' => 'login.php',
    '/register' => 'register.php',
    '/logout' => 'logout.php'
];


foreach ($routes as $route => $controller) {
    if ($uri === $route) {
        require './controllers/' . $controller;
        exit;
    }
}

http_response_code(404);
require 'controllers/404.php';
exit;




