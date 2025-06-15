<?php

require 'lib/PhpArrDbWriter.php';

const ERR_NO_FILE_UPLOADED = 4;

$response = [
  'status' => null,
  'payload' => null,
];
$file = $_FILES['file'];
// var_dump($file);
// die();
if ($file['error'] === ERR_NO_FILE_UPLOADED) {
  $response['status'] = 'ERR';
  $response['payload'] = 'Ошибка: файл не был выбран';
  echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
  return;
}
if ($file['type'] !== 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
  $response['status'] = 'ERR';
  $response['payload'] = 'Ошибка: файл не является Excel-файлом. Если Вы думаете, что так не должно быть, свяжитесь с программистом Алексеем';
  echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
  return;
}

if (!move_uploaded_file($file['tmp_name'], 'price-lists/' . $file['name'])) {
  $response['status'] = 'ERR';
  $response['payload'] = 'Ошибка при загрузке файла. Скорее всего, что-то не так с файлом. Если Вы думаете, что так не должно быть, свяжитесь с программистом Алексеем';
  echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
  return;
}

$db = require 'db.php';
$db['currentPriceList'] = $file['name'];
$dbWriter = new PhpArrDbWriter();
$dbWriter->write($db, 'db.php');
$excelFileName = 'price-lists/' . $file['name'];
require 'price-upload/writeProductsToDb.php';
$db2 = require 'db.php';
$products2 = $db2['products'];
$productUriToProductMap = [];
foreach ($products2 as $artKey => $product) {
  $uri = $product['uri'];
  $productUriToProductMap[$uri] = $product;
}
$dbWriter->write($productUriToProductMap, 'productUriToProductMap.php');
// low db
$db3 = require 'db.php';
$currentPriceList = $db3['currentPriceList'];
$lowDb0 = require 'lowDb.php';
$dbWriter->write(['currentPriceList' => $currentPriceList, 'searchH' => $lowDb0['searchH']], 'lowDb.php');
// catalogViewDb.php
$db4 = require 'db.php';
$products4 = $db4['products'];
$groupedByCategory = [];
foreach ($products4 as $product4) {
    $category = $product4['category'];
    
    if (!isset($groupedByCategory[$category])) {
        $groupedByCategory[$category] = [];
    }
    
    $groupedByCategory[$category][] = $product4;
}
$dbWriter->write($groupedByCategory, 'catalogViewDb.php');
// json for search via js
$db5 = require 'db.php';
$products5 = $db5['products'];
$lowDb1 = require 'lowDb.php';
$jsonProducts = [
  'h' => $lowDb1['searchH'] + 1,
  'products' => []
];
foreach ($products5 as $product5) {
  unset($product5['art']);
  unset($product5['price']);
  unset($product5['category']);
  unset($product5['unit']);
  unset($product5['upakMal']);
  unset($product5['upakKrup']);
  unset($product5['description']);
  unset($product5['isHit']);
  unset($product5['galleryImgs']);
  unset($product5['excelFileRowNum']);

  $jsonProducts['products'][] = $product5;
}
file_put_contents('search.json', json_encode($jsonProducts, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
$lowDb2 = require 'lowDb.php';
$dbWriter->write(['currentPriceList' => $currentPriceList, 'searchH' => $lowDb2['searchH'] + 1], 'lowDb.php');

$response['status'] = 'OK';
$response['payload'] = 'Прайс-лист был успешно загружен!';
echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
