<?php

// require 'lib/PhpArrDbWriter.php';
$db = require 'db.php';
$products = require 'price-upload/generateProducts.php';

foreach ($products as $product) {
  $db['products'][$product['art']] = $product;
}

$products['0100-0000-10']['isHit'] = true;
$products['0100-0000-15']['isHit'] = true;

$dbWriterP = new PhpArrDbWriter();
$dbWriterP->write($db, 'db.php');