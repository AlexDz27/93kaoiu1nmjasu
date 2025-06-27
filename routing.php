<?php

$routes = [
  '/' => "views/pages/home.php",

  '/about-company' => "views/pages/about-company.php",
  '/catalog' => "views/pages/catalog.php",

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

  $lowDb = require 'lowDb.php';
  foreach ($routes as $routeUri => $routePage) {
    if ($uri === $routeUri) {
      if ($routeUri === '/catalog') {
        $catalogViewDb = require 'catalogViewDb.php';
        $products = $catalogViewDb;
        load($routePage, ['lowDb' => $lowDb, 'products' => $products]);
        return;
      }
      
      load($routePage, ['lowDb' => $lowDb]);
      return;
    }
  }

  $productUriToProductMap = require 'productUriToProductMap.php';
  if (isset($productUriToProductMap[$uri])) {
    $product = $productUriToProductMap[$uri];
    load('views/pages/product.php', ['lowDb' => $lowDb, 'product' => $product]);
    return;
  }

  http_response_code(404);
  load($route404, ['lowDb' => $lowDb]);
}