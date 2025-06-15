<?php

// require 'lib/PhpArrDbWriter.php';
$db = require 'db.php';
$products = require 'price-upload/generateProducts.php';

foreach ($products as $product) {
  $db['products'][$product['art']] = $product;
}

$db['products']['0100-0000-10']['isHit'] = true;
$db['products']['0100-0000-15']['isHit'] = true;

// Imgs
$db['products']['0100-0000-10']['img'] = '/img/product/kisti/0100-0000-10.jpg';
// TODO: no photo for this?
$db['products']['0100-0000-15']['img'] = '/img/product/kisti/0100-0000-10.jpg';
$db['products']['0100-0000-20']['img'] = '/img/product/kisti/0100-0000-20.jpg';

$dbWriterP = new PhpArrDbWriter();
$dbWriterP->write($db, 'db.php');