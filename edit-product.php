<?php

require 'lib/PhpArrDbWriter.php';

const ERR_NO_FILE_UPLOADED = 4;

$art = $_POST['art'];
$isHit = null;
if ($_POST['hit'] === 'no') {
  $isHit = false;
} else {
  $isHit = true;
}
$details = $_POST['details'];
$currentOrder = $_POST['currentOrder'];

$response = [
  'status' => null,
  'payload' => null,
];

// TODO: careful here. Prob we always need to manually insert editedDb when starting fresh application
$editedDb = require 'editedDb.php';
$product = $editedDb['products']['sprava'][$art];

$product['isHit'] = $isHit;
$product['details'] = $details;
$product['galleryImgs'] = explode(",", $currentOrder);
// var_dump($_POST);
// var_dump($_FILES);
if ($_FILES['mainImg']['error'] !== ERR_NO_FILE_UPLOADED) {
  $product['img'] = '/img/uploaded/' . $_FILES['mainImg']['name'];
  move_uploaded_file($_FILES['mainImg']['tmp_name'], 'img/uploaded/' . $_FILES['mainImg']['name']);
}
if ($_FILES['galleryImgs']['error'][0] !== ERR_NO_FILE_UPLOADED) {  // bad
  foreach ($_FILES['galleryImgs']['name'] as $idx => $galImg) {
    $product['galleryImgs'][] = '/img/uploaded/' . $_FILES['galleryImgs']['name'][$idx];
    move_uploaded_file($_FILES['galleryImgs']['tmp_name'][$idx], 'img/uploaded/' . $_FILES['galleryImgs']['name'][$idx]);
  }
}

$editedDb['products']['sprava'][$art] = $product;
$catalogViewDb = require 'catalogViewDb.php';
$catalogViewDbProduct = array_filter($catalogViewDb[$product['category']], function($p) use ($art) {
  return $p['art'] === $art;
});
$idx = array_keys($catalogViewDbProduct)[0];
$catalogViewDb[$product['category']]["$idx"] = $product;
$productUriToProductMap = require 'productUriToProductMap.php';
$productUriToProductMap[$product['uri']] = $product;

$editedDbWriter = new PhpArrDbWriter();
$editedDbWriter->write($editedDb, 'editedDb.php');
$editedDbWriter->write($catalogViewDb, 'catalogViewDb.php');
$editedDbWriter->write($productUriToProductMap, 'productUriToProductMap.php');

$response['status'] = 'OK';
$response['payload'] = 'Редактирование товара прошло успешно!';
echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);