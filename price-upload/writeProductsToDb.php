<?php

// require 'lib/PhpArrDbWriter.php';
$db = require 'db.php';
$products = require 'price-upload/generateProducts.php';

foreach ($products as $product) {
  $db['products'][$product['art']] = $product;
}

$dbWriterP = new PhpArrDbWriter();
$dbWriterP->write($db, 'db.php');