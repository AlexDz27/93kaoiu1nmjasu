<?php

$routes = [
  '/' => "views/pages/home.php",

  '/about-company' => "views/pages/about-company.php",
  '/contacts' => "views/pages/contacts.php",
  '/catalog' => "views/pages/catalog.php",
  '/product' => "views/pages/product.php",

  '404' => "views/pages/404.php"
];
setRoutes($routes);

function setRoutes($routes) {
  $uri = explode('?', $_SERVER['REQUEST_URI'])[0]; // explode to allow GET requests
  if ($uri !== '/' && substr($uri, -1) === '/') { // allow trailing slash
    $uri = rtrim($uri, '/');
  }
  $method = $_SERVER['REQUEST_METHOD'];
  $route404 = array_pop($routes);

  foreach ($routes as $routeUri => $routePage) {
    if ($uri === $routeUri) {
      load($routePage);
      return;
    }
  }

  $productUriToProductMap = require 'productUriToProductMap.php';
  if (isset($productUriToProductMap[$uri])) {
    $product = $productUriToProductMap[$uri];
    load('views/pages/product.php', ['product' => $product]);
    return;
  }

  http_response_code(404);
  load($route404);
}